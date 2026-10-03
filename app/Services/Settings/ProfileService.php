<?php

namespace App\Services\Settings;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProfileService
{
    /**
     * Get the authenticated user's profile.
     */
    public function getProfile(User $user): UserProfile
    {
        return $user->profile()->firstOrCreate(
            [
                'user_id' => $user->id,
            ],
            [
                'first_name' => $this->getDefaultFirstName($user),
                'last_name' => null,
                'display_name' => $this->getDefaultDisplayName($user),
                'timezone' => config('app.timezone', 'UTC'),
                'locale' => config('app.locale', 'en'),
                'date_format' => 'MMM D, YYYY',
                'theme' => 'light',
            ]
        );
    }


    /**
     * Update the authenticated user's profile.
     */
    public function updateProfile(
        User $user,
        array $data
    ): UserProfile {
        return DB::transaction(function () use ($user, $data) {

            $profile = $this->getProfile($user);

            $profile->update([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'] ?? null,
                'display_name' => $data['display_name'] ?? null,

                'job_title' => $data['job_title'] ?? null,
                'department' => $data['department'] ?? null,
                'phone' => $data['phone'] ?? null,
                'bio' => $data['bio'] ?? null,

                'address_line_1' => $data['address_line_1'] ?? null,
                'address_line_2' => $data['address_line_2'] ?? null,
                'city' => $data['city'] ?? null,
                'state' => $data['state'] ?? null,
                'postal_code' => $data['postal_code'] ?? null,
                'country' => $data['country'] ?? null,

                'timezone' => $data['timezone'],
                'locale' => $data['locale'],
                'date_format' => $data['date_format'],
                'theme' => $data['theme'],
            ]);

            return $profile->fresh();
        });
    }


    /**
     * Update the authenticated user's password.
     *
     * Password hashing is handled automatically by the
     * User model's "hashed" password cast.
     */
    public function updatePassword(
        User $user,
        string $password
    ): User {
        $user->update([
            'password' => $password,
        ]);

        return $user->fresh();
    }


    /**
     * Upload and update the user's avatar.
     */
    public function updateAvatar(
        User $user,
        UploadedFile $file
    ): UserProfile {
        $profile = $this->getProfile($user);

        /*
        |--------------------------------------------------------------------------
        | Upload Directory
        |--------------------------------------------------------------------------
        */

        $directory = public_path('uploads/users');

        if (!File::exists($directory)) {
            File::makeDirectory(
                $directory,
                0755,
                true
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Keep Previous Avatar Path
        |--------------------------------------------------------------------------
        */

        $oldAvatar = $profile->avatar
            ? public_path($profile->avatar)
            : null;


        /*
        |--------------------------------------------------------------------------
        | Generate Unique File Name
        |--------------------------------------------------------------------------
        */

        $extension = $file->extension();

        $filename =
            'avatar_' .
            $user->id .
            '_' .
            Str::uuid() .
            '.' .
            $extension;


        $newPath =
            'uploads/users/' . $filename;

        $newFilePath =
            public_path($newPath);


        /*
        |--------------------------------------------------------------------------
        | Store New File
        |--------------------------------------------------------------------------
        */

        try {

            $file->move(
                $directory,
                $filename
            );


            /*
            |--------------------------------------------------------------------------
            | Update Database
            |--------------------------------------------------------------------------
            */

            DB::transaction(function () use (
                $profile,
                $newPath
            ) {

                $profile->update([
                    'avatar' => $newPath,
                ]);

            });

        } catch (\Throwable $exception) {

            /*
            |--------------------------------------------------------------------------
            | Cleanup New File If Database Update Fails
            |--------------------------------------------------------------------------
            */

            if (File::exists($newFilePath)) {
                File::delete($newFilePath);
            }

            throw $exception;
        }


        /*
        |--------------------------------------------------------------------------
        | Delete Previous Avatar
        |--------------------------------------------------------------------------
        |
        | The old file is deleted only after the new file has been
        | successfully stored and the database has been updated.
        |
        */

        if (
            $oldAvatar &&
            $oldAvatar !== $newFilePath &&
            File::exists($oldAvatar)
        ) {
            File::delete($oldAvatar);
        }


        return $profile->fresh();
    }


    /**
     * Remove the user's avatar.
     */
    public function removeAvatar(
        User $user
    ): UserProfile {
        $profile = $this->getProfile($user);

        /*
        |--------------------------------------------------------------------------
        | Keep Current Avatar Path
        |--------------------------------------------------------------------------
        */

        $avatarPath = $profile->avatar
            ? public_path($profile->avatar)
            : null;


        /*
        |--------------------------------------------------------------------------
        | Update Database First
        |--------------------------------------------------------------------------
        */

        DB::transaction(function () use ($profile) {

            $profile->update([
                'avatar' => null,
            ]);

        });


        /*
        |--------------------------------------------------------------------------
        | Delete Avatar File
        |--------------------------------------------------------------------------
        |
        | Database is now pointing to no avatar. If filesystem deletion
        | fails, the database remains in a clean state.
        |
        */

        if (
            $avatarPath &&
            File::exists($avatarPath)
        ) {
            File::delete($avatarPath);
        }


        return $profile->fresh();
    }


    /**
     * Get a default first name from the user's email.
     */
    protected function getDefaultFirstName(
        User $user
    ): string {
        return ucfirst(
            explode(
                '@',
                $user->email
            )[0]
        );
    }


    /**
     * Get a default display name from the user's email.
     */
    protected function getDefaultDisplayName(
        User $user
    ): string {
        return $this->getDefaultFirstName($user);
    }
}
