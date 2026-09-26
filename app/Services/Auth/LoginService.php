<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginService
{
    /**
     * Authenticate user.
     */
    public function login(array $data): User
    {
        $credentials = [
            'email' => strtolower(trim($data['email'])),
            'password' => $data['password'],
        ];

        $remember = $data['remember'] ?? false;


        /*
        |--------------------------------------------------------------------------
        | Attempt Authentication
        |--------------------------------------------------------------------------
        */

        if (! Auth::attempt($credentials, $remember)) {

            throw ValidationException::withMessages([
                'email' => 'The email or password is incorrect.',
            ]);
        }


        /*
        |--------------------------------------------------------------------------
        | Get Authenticated User
        |--------------------------------------------------------------------------
        */

        /** @var User $user */
        $user = Auth::user();


        /*
        |--------------------------------------------------------------------------
        | Check Account Status
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
        | Update Last Login
        |--------------------------------------------------------------------------
        */

        $user->update([
            'last_login_at' => now(),
        ]);


        return $user;
    }
}
