<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginService
{
    /**
     * Verify the user's login credentials.
     *
     * This method does NOT finalize the login when Email 2FA
     * is enabled.
     *
     * @return array{
     *     user: User,
     *     requires_two_factor: bool,
     *     two_factor_method: string|null,
     *     remember: bool
     * }
     */
    public function login(array $data): array
    {
        $email = strtolower(
            trim((string) ($data['email'] ?? ''))
        );

        $password = (string) ($data['password'] ?? '');

        $remember = (bool) ($data['remember'] ?? false);

        /*
        |--------------------------------------------------------------------------
        | Attempt Authentication
        |--------------------------------------------------------------------------
        |
        | Auth::attempt() verifies the credentials and temporarily authenticates
        | the user. If Email 2FA is enabled, we immediately logout the user
        | and keep only the pending 2FA state.
        |
        */

        if (! Auth::attempt([
            'email' => $email,
            'password' => $password,
        ], false)) {
            throw ValidationException::withMessages([
                'email' => 'The email or password is incorrect.',
            ]);
        }

        /** @var User $user */
        $user = Auth::user();

        /*
        |--------------------------------------------------------------------------
        | Account Status
        |--------------------------------------------------------------------------
        */

        if ($user->status !== 'active') {
            Auth::logout();

            throw ValidationException::withMessages([
                'email' => 'Your account is currently inactive.',
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Email Verification
        |--------------------------------------------------------------------------
        */

        if (! $user->hasVerifiedEmail()) {
            Auth::logout();

            throw ValidationException::withMessages([
                'email' => 'Please verify your email address before signing in.',
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Email Two-Factor Authentication
        |--------------------------------------------------------------------------
        */

        $emailTwoFactorEnabled = (bool) $user
            ->emailTwoFactorAuthentication
            ?->enabled;

        if ($emailTwoFactorEnabled) {
            Auth::logout();

            return [
                'user' => $user,
                'requires_two_factor' => true,
                'two_factor_method' => 'email',
                'remember' => $remember,
            ];
        }

        /*
        |--------------------------------------------------------------------------
        | No 2FA - Finalize Login
        |--------------------------------------------------------------------------
        */

        Auth::login(
            $user,
            $remember
        );

        $this->recordSuccessfulLogin($user);

        return [
            'user' => $user,
            'requires_two_factor' => false,
            'two_factor_method' => null,
            'remember' => $remember,
        ];
    }

    /**
     * Finalize login after successful 2FA verification.
     */
    public function completeTwoFactorLogin(
        User $user,
        bool $remember = false
    ): User {
        Auth::login(
            $user,
            $remember
        );

        $this->recordSuccessfulLogin($user);

        return $user->fresh();
    }

    /**
     * Record the successful login time.
     */
    protected function recordSuccessfulLogin(
        User $user
    ): void {
        $user->update([
            'last_login_at' => now(),
        ]);
    }
}
