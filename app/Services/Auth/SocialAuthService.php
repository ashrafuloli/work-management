<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Laravel\Socialite\Contracts\User as SocialUser;

class SocialAuthService
{
    /**
     * Authenticate a user through Google.
     */
    public function authenticateGoogle(SocialUser $socialUser): User
    {
        return $this->authenticate(
            provider: 'google',
            socialUser: $socialUser
        );
    }


    /**
     * Authenticate a user through GitHub.
     */
    public function authenticateGithub(SocialUser $socialUser): User
    {
        return $this->authenticate(
            provider: 'github',
            socialUser: $socialUser
        );
    }


    /**
     * Find or create the application user.
     */
    protected function authenticate(
        string $provider,
        SocialUser $socialUser
    ): User {
        return DB::transaction(function () use (
            $provider,
            $socialUser
        ) {

            $providerId = (string) $socialUser->getId();

            $email = $socialUser->getEmail();

            $email = $email
                ? strtolower(trim($email))
                : null;


            /*
            |--------------------------------------------------------------------------
            | Find By Provider ID
            |--------------------------------------------------------------------------
            */

            $user = $this->findByProviderId(
                provider: $provider,
                providerId: $providerId
            );


            /*
            |--------------------------------------------------------------------------
            | Find By Email
            |--------------------------------------------------------------------------
            |
            | If the user already registered with email/password,
            | connect the social provider to the same account.
            |
            */

            if (!$user && $email) {

                $user = User::where(
                    'email',
                    $email
                )->first();

            }


            /*
            |--------------------------------------------------------------------------
            | Create User
            |--------------------------------------------------------------------------
            */

            if (!$user) {

                if (!$email) {

                    throw new \RuntimeException(
                        ucfirst($provider) .
                        ' did not provide an email address.'
                    );

                }

                $user = $this->createUser(
                    provider: $provider,
                    providerId: $providerId,
                    email: $email,
                    socialUser: $socialUser
                );

            } else {

                /*
                |--------------------------------------------------------------------------
                | Connect Social Account
                |--------------------------------------------------------------------------
                */

                $this->connectProvider(
                    user: $user,
                    provider: $provider,
                    providerId: $providerId,
                    socialUser: $socialUser
                );

            }


            /*
            |--------------------------------------------------------------------------
            | Update Login Information
            |--------------------------------------------------------------------------
            */

            $user->update([
                'last_login_at' => now(),
            ]);


            /*
            |--------------------------------------------------------------------------
            | Update Profile
            |--------------------------------------------------------------------------
            */

            $this->syncProfile(
                user: $user,
                socialUser: $socialUser
            );


            return $user->fresh([
                'profile',
            ]);

        });
    }


    /**
     * Find a user using provider ID.
     */
    protected function findByProviderId(
        string $provider,
        string $providerId
    ): ?User {

        $column = match ($provider) {

            'google' => 'google_id',

            'github' => 'github_id',

            default => throw new \InvalidArgumentException(
                "Unsupported social provider: {$provider}"
            ),

        };


        return User::where(
            $column,
            $providerId
        )->first();
    }


    /**
     * Connect the provider to an existing user.
     */
    protected function connectProvider(
        User $user,
        string $provider,
        string $providerId,
        SocialUser $socialUser
    ): void {

        $data = [];


        if ($provider === 'google') {

            if (!$user->google_id) {
                $data['google_id'] = $providerId;
            }

        }


        if ($provider === 'github') {

            if (!$user->github_id) {
                $data['github_id'] = $providerId;
            }

        }


        /*
        |--------------------------------------------------------------------------
        | Social Login = Verified Email
        |--------------------------------------------------------------------------
        |
        | Only mark the email verified when the provider returned an email.
        |
        */

        if (
            $socialUser->getEmail() &&
            !$user->email_verified_at
        ) {

            $data['email_verified_at'] = now();

        }


        if (!empty($data)) {

            $user->update($data);

        }

    }


    /**
     * Create a new application user.
     */
    protected function createUser(
        string $provider,
        string $providerId,
        string $email,
        SocialUser $socialUser
    ): User {

        $name = trim(
            (string) $socialUser->getName()
        );


        /*
        |--------------------------------------------------------------------------
        | Generate Name
        |--------------------------------------------------------------------------
        */

        if (!$name) {

            $name = trim(
                (string) $socialUser->getNickname()
            );

        }


        if (!$name) {

            $name = Str::before(
                $email,
                '@'
            );

        }


        $nameParts = preg_split(
            '/\s+/',
            $name,
            2
        );


        $firstName =
            $nameParts[0]
            ?? 'User';


        $lastName =
            $nameParts[1]
            ?? null;


        /*
        |--------------------------------------------------------------------------
        | Provider ID
        |--------------------------------------------------------------------------
        */

        $providerData = match ($provider) {

            'google' => [
                'google_id' => $providerId,
            ],

            'github' => [
                'github_id' => $providerId,
            ],

            default => throw new \InvalidArgumentException(
                "Unsupported social provider: {$provider}"
            ),

        };


        /*
        |--------------------------------------------------------------------------
        | Create User
        |--------------------------------------------------------------------------
        */

        $user = User::create(
            array_merge(
                [
                    'email' => $email,

                    /*
                    |--------------------------------------------------------------------------
                    | Social Accounts Do Not Require Password
                    |--------------------------------------------------------------------------
                    */

                    'password' => null,

                    'user_type' => 'member',

                    'status' => 'active',

                    'email_verified_at' => now(),

                    'last_login_at' => now(),
                ],
                $providerData
            )
        );


        /*
        |--------------------------------------------------------------------------
        | Create Profile
        |--------------------------------------------------------------------------
        */

        $user->profile()->create([
            'first_name' => $firstName,

            'last_name' => $lastName,

            'display_name' => $name,

            'avatar' => $socialUser->getAvatar(),

            'timezone' => config(
                'app.timezone',
                'UTC'
            ),

            'locale' => config(
                'app.locale',
                'en'
            ),
        ]);


        return $user;
    }


    /**
     * Synchronize social profile information.
     */
    protected function syncProfile(
        User $user,
        SocialUser $socialUser
    ): void {

        $profile = $user->profile;


        /*
        |--------------------------------------------------------------------------
        | Create Missing Profile
        |--------------------------------------------------------------------------
        */

        if (!$profile) {

            $name = trim(
                (string) $socialUser->getName()
            );


            if (!$name) {

                $name = trim(
                    (string) $socialUser->getNickname()
                );

            }


            if (!$name) {

                $name = Str::before(
                    $user->email,
                    '@'
                );

            }


            $nameParts = preg_split(
                '/\s+/',
                $name,
                2
            );


            $firstName =
                $nameParts[0]
                ?? 'User';


            $lastName =
                $nameParts[1]
                ?? null;


            $user->profile()->create([
                'first_name' => $firstName,

                'last_name' => $lastName,

                'display_name' => $name,

                'avatar' => $socialUser->getAvatar(),

                'timezone' => config(
                    'app.timezone',
                    'UTC'
                ),

                'locale' => config(
                    'app.locale',
                    'en'
                ),
            ]);


            return;
        }


        /*
        |--------------------------------------------------------------------------
        | Update Avatar
        |--------------------------------------------------------------------------
        */

        if (
            !$profile->avatar &&
            $socialUser->getAvatar()
        ) {

            $profile->update([
                'avatar' => $socialUser->getAvatar(),
            ]);

        }

    }
}
