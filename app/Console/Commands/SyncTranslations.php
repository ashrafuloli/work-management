<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class SyncTranslations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'translations:sync
                            {--check : Only check for missing translations without modifying the file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scan application files and sync translation keys with the English translation file';

    /**
     * Translation file path.
     */
    protected string $translationPath;

    /**
     * Directories to scan.
     *
     * @var array<int, string>
     */
    protected array $scanDirectories = [
        'app',
        'resources/views',
        'resources/js',
        'routes',
    ];

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->translationPath = resource_path('lang/en.json');

        $this->components->info(
            'Scanning application files for translation keys...'
        );

        $keys = $this->extractTranslationKeys();

        if (empty($keys)) {
            $this->components->warn(
                'No translation keys were found.'
            );

            return self::SUCCESS;
        }

        $translations = $this->loadTranslations();

        $missingKeys = array_values(
            array_diff($keys, array_keys($translations))
        );

        $this->newLine();

        $this->components->info(
            sprintf(
                'Found %d translation key%s.',
                count($keys),
                count($keys) === 1 ? '' : 's'
            )
        );

        if (empty($missingKeys)) {
            $this->components->success(
                'All translation keys are already synchronized.'
            );

            return self::SUCCESS;
        }

        $this->components->warn(
            sprintf(
                '%d missing translation key%s found.',
                count($missingKeys),
                count($missingKeys) === 1 ? '' : 's'
            )
        );

        $this->newLine();

        foreach ($missingKeys as $key) {
            $this->line("  <fg=yellow>+</> {$key}");
        }

        if ($this->option('check')) {
            $this->newLine();

            $this->components->warn(
                'Check mode enabled. No files were modified.'
            );

            return self::SUCCESS;
        }

        foreach ($missingKeys as $key) {
            $translations[$key] = $key;
        }

        ksort($translations);

        File::ensureDirectoryExists(
            dirname($this->translationPath)
        );

        File::put(
            $this->translationPath,
            json_encode(
                $translations,
                JSON_PRETTY_PRINT |
                JSON_UNESCAPED_UNICODE |
                JSON_UNESCAPED_SLASHES
            ) . PHP_EOL
        );

        $this->newLine();

        $this->components->success(
            'English translation file synchronized successfully.'
        );

        return self::SUCCESS;
    }

    /**
     * Extract translation keys from application files.
     *
     * @return array<int, string>
     */
    protected function extractTranslationKeys(): array
    {
        $keys = [];

        foreach ($this->scanDirectories as $directory) {
            $path = base_path($directory);

            if (! File::isDirectory($path)) {
                continue;
            }

            $files = File::allFiles($path);

            foreach ($files as $file) {
                $extension = strtolower(
                    $file->getExtension()
                );

                if (! in_array(
                    $extension,
                    ['php', 'blade.php', 'js'],
                    true
                )) {
                    continue;
                }

                $content = File::get($file->getRealPath());

                $keys = array_merge(
                    $keys,
                    $this->extractKeysFromContent($content)
                );
            }
        }

        return array_values(
            array_unique($keys)
        );
    }

    /**
     * Extract translation keys from file content.
     *
     * Supports:
     *
     * __('common.dashboard')
     * __('profile.title')
     * trans('common.dashboard')
     *
     * @return array<int, string>
     */
    protected function extractKeysFromContent(
        string $content
    ): array {
        preg_match_all(
            "/(?:__|trans)\(\s*['\"]([^'\"]+)['\"]\s*(?:,|\))/",
            $content,
            $matches
        );

        return $matches[1] ?? [];
    }

    /**
     * Load the existing English translations.
     *
     * @return array<string, string>
     */
    protected function loadTranslations(): array
    {
        if (! File::exists($this->translationPath)) {
            return [];
        }

        $content = File::get(
            $this->translationPath
        );

        if (trim($content) === '') {
            return [];
        }

        $translations = json_decode(
            $content,
            true
        );

        if (! is_array($translations)) {
            $this->components->error(
                'The English translation file contains invalid JSON.'
            );

            return [];
        }

        return $translations;
    }
}
