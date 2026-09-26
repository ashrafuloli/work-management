<?php

namespace App\Services\Auth;

use App\Jobs\SendEmailVerificationJob;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegistrationService
{
    /**
     * Register a new user.
     */
    public function register(array $data): User
    {
        return DB::transaction(function () use ($data) {

            /*
            |--------------------------------------------------------------------------
            | Create User
            |--------------------------------------------------------------------------
            */

            $user = User::create([
                'email' => strtolower(trim($data['email'])),
                'password' => $data['password'],
                'user_type' => 'member',
                'status' => 'active',
            ]);


            /*
            |--------------------------------------------------------------------------
            | Create User Profile
            |--------------------------------------------------------------------------
            */

            $firstName = trim($data['first_name']);

            $lastName = isset($data['last_name'])
                ? trim($data['last_name'])
                : null;

            $displayName = trim(
                $firstName . ' ' . ($lastName ?? '')
            );

            $user->profile()->create([
                'first_name' => $firstName,
                'last_name' => $lastName ?: null,
                'display_name' => $displayName,
                'timezone' => config(
                    'app.timezone',
                    'UTC'
                ),
                'locale' => config(
                    'app.locale',
                    'en'
                ),
            ]);


            /*
            |--------------------------------------------------------------------------
            | Authenticate User
            |--------------------------------------------------------------------------
            |
            | The user needs to be authenticated so the signed email
            | verification route protected by auth middleware can be used.
            |
            */

            Auth::login($user);


            /*
            |--------------------------------------------------------------------------
            | Send Verification Email After Transaction Commit
            |--------------------------------------------------------------------------
            |
            | The verification email job is dispatched only after the
            | user and profile have been successfully committed.
            |
            */

            SendEmailVerificationJob::dispatch($user)
                ->afterCommit();


            return $user;
        });
    }
}
