<?php

namespace App\Services\Security;

use App\Models\EmailTwoFactorAuthentication;
use App\Models\EmailTwoFactorCode;
use App\Models\User;
use App\Notifications\TwoFactorEmailCodeNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmailTwoFactorService
{
    /**
     * Email OTP length.
     */
    protected int $codeLength = 6;

    /**
     * OTP validity in minutes.
     */
    protected int $codeExpiresInMinutes = 10;

    /**
     * Maximum verification attempts for one OTP.
     */
    protected int $maxAttempts = 5;

    /**
     * Check whether Email 2FA is enabled.
     */
    public function isEnabled(User $user): bool
    {
        return (bool) $user
            ->emailTwoFactorAuthentication
            ?->enabled;
    }

    /**
     * Send a new Email 2FA verification code.
     */
    public function sendCode(User $user): void
    {
        $code = $this->generateCode();

        /*
        |--------------------------------------------------------------------------
        | Create OTP
        |--------------------------------------------------------------------------
        |
        | Previous active OTPs are invalidated before creating the new one.
        |
        */

        $emailCode = DB::transaction(function () use ($user, $code) {

            EmailTwoFactorCode::query()
                ->where('user_id', $user->id)
                ->whereNull('used_at')
                ->update([
                    'used_at' => now(),
                ]);

            return EmailTwoFactorCode::create([
                'user_id' => $user->id,
                'code_hash' => Hash::make($code),
                'expires_at' => now()->addMinutes(
                    $this->codeExpiresInMinutes
                ),
                'used_at' => null,
                'attempts' => 0,
            ]);
        });

        /*
        |--------------------------------------------------------------------------
        | Queue Email Notification
        |--------------------------------------------------------------------------
        |
        | TwoFactorEmailCodeNotification implements ShouldQueue, so the
        | notification is handled asynchronously by Laravel's queue worker.
        |
        */

        try {
            $user->notify(
                new TwoFactorEmailCodeNotification(
                    $code,
                    $this->codeExpiresInMinutes
                )
            );
        } catch (\Throwable $exception) {

            /*
            |--------------------------------------------------------------------------
            | Remove OTP If Queue Dispatch Fails
            |--------------------------------------------------------------------------
            |
            | This catches an immediate dispatch failure.
            |
            | It does NOT catch a later mail delivery failure because the
            | notification itself is queued.
            |
            */

            $emailCode->delete();

            throw $exception;
        }
    }

    /**
     * Verify an Email 2FA code.
     *
     * A code:
     * - must exist
     * - must not be used
     * - must not be expired
     * - must not exceed maximum attempts
     * - must match the stored hash
     */
    public function verifyCode(
        User $user,
        string $code
    ): bool {
        $code = $this->normalizeCode($code);

        if (! $this->isValidCode($code)) {
            return false;
        }

        return DB::transaction(function () use ($user, $code) {

            /*
            |--------------------------------------------------------------------------
            | Get Latest Active OTP
            |--------------------------------------------------------------------------
            */

            $emailCode = EmailTwoFactorCode::query()
                ->where('user_id', $user->id)
                ->whereNull('used_at')
                ->where(
                    'expires_at',
                    '>',
                    now()
                )
                ->latest('id')
                ->lockForUpdate()
                ->first();

            if (! $emailCode) {
                return false;
            }

            /*
            |--------------------------------------------------------------------------
            | Maximum Attempts
            |--------------------------------------------------------------------------
            */

            if ($emailCode->attempts >= $this->maxAttempts) {
                return false;
            }

            /*
            |--------------------------------------------------------------------------
            | Count Verification Attempt
            |--------------------------------------------------------------------------
            */

            $emailCode->increment('attempts');

            /*
            |--------------------------------------------------------------------------
            | Verify OTP
            |--------------------------------------------------------------------------
            */

            if (! Hash::check(
                $code,
                $emailCode->code_hash
            )) {
                return false;
            }

            /*
            |--------------------------------------------------------------------------
            | Mark OTP As Used
            |--------------------------------------------------------------------------
            */

            $emailCode->update([
                'used_at' => now(),
            ]);

            /*
            |--------------------------------------------------------------------------
            | Invalidate Other Active Codes
            |--------------------------------------------------------------------------
            */

            EmailTwoFactorCode::query()
                ->where('user_id', $user->id)
                ->where(
                    'id',
                    '!=',
                    $emailCode->id
                )
                ->whereNull('used_at')
                ->update([
                    'used_at' => now(),
                ]);

            return true;
        });
    }

    /**
     * Enable Email 2FA after successful OTP verification.
     */
    public function enable(
        User $user
    ): EmailTwoFactorAuthentication {
        return DB::transaction(function () use ($user) {

            return EmailTwoFactorAuthentication::updateOrCreate(
                [
                    'user_id' => $user->id,
                ],
                [
                    'enabled' => true,
                    'confirmed_at' => now(),
                ]
            );
        });
    }

    /**
     * Disable Email 2FA.
     */
    public function disable(User $user): void
    {
        DB::transaction(function () use ($user) {

            EmailTwoFactorAuthentication::updateOrCreate(
                [
                    'user_id' => $user->id,
                ],
                [
                    'enabled' => false,
                    'confirmed_at' => null,
                ]
            );

            /*
            |--------------------------------------------------------------------------
            | Invalidate Existing Email OTP Codes
            |--------------------------------------------------------------------------
            */

            EmailTwoFactorCode::query()
                ->where('user_id', $user->id)
                ->whereNull('used_at')
                ->update([
                    'used_at' => now(),
                ]);
        });
    }

    /**
     * Get Email 2FA configuration.
     */
    public function getConfiguration(
        User $user
    ): ?EmailTwoFactorAuthentication {
        return $user->emailTwoFactorAuthentication;
    }

    /**
     * Generate a secure six-digit OTP.
     */
    protected function generateCode(): string
    {
        return str_pad(
            (string) random_int(0, 999999),
            $this->codeLength,
            '0',
            STR_PAD_LEFT
        );
    }

    /**
     * Normalize an OTP code.
     */
    protected function normalizeCode(
        string $code
    ): string {
        return preg_replace(
            '/[^0-9]/',
            '',
            trim($code)
        ) ?? '';
    }

    /**
     * Validate OTP format.
     */
    protected function isValidCode(
        string $code
    ): bool {
        return preg_match(
                '/^\d{6}$/',
                $code
            ) === 1;
    }
}
