<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\Auth\LoginService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function __construct(
        protected LoginService $loginService
    ) {
    }

    /**
     * Authenticate user.
     */
    public function store(LoginRequest $request): JsonResponse
    {
        try {
            $result = $this->loginService->login(
                $request->validated()
            );

            $user = $result['user'];

            /*
            |--------------------------------------------------------------------------
            | Two-Factor Authentication Required
            |--------------------------------------------------------------------------
            |
            | The password has been verified, but the user must complete
            | the configured second authentication factor before Laravel
            | considers the session fully authenticated.
            |
            */

            if ($result['requires_two_factor']) {

                /*
                |--------------------------------------------------------------------------
                | Regenerate Session
                |--------------------------------------------------------------------------
                |
                | Regenerate the session ID before storing the temporary
                | authentication state.
                |
                */

                $request->session()->regenerate();

                /*
                |--------------------------------------------------------------------------
                | Store Pending 2FA State
                |--------------------------------------------------------------------------
                |
                | The user is NOT authenticated yet.
                |
                */

                $request->session()->put([
                    'two_factor.pending_user_id' => $user->id,
                    'two_factor.remember' => (bool) $result['remember'],
                    'two_factor.method' => $result['two_factor_method'],
                ]);

                /*
                |--------------------------------------------------------------------------
                | Response
                |--------------------------------------------------------------------------
                */

                return response()->json([
                    'success' => true,
                    'message' => 'Two-factor authentication is required.',
                    'data' => [
                        'requires_two_factor' => true,
                        'two_factor_method' => $result['two_factor_method'],
                        'redirect' => route('login.two-factor'),
                    ],
                ]);
            }

            /*
            |--------------------------------------------------------------------------
            | Normal Login
            |--------------------------------------------------------------------------
            */

            $request->session()->regenerate();

            return response()->json([
                'success' => true,
                'message' => 'Login successful.',
                'data' => [
                    'user_id' => $user->id,
                    'email' => $user->email,
                    'email_verified' => $user->hasVerifiedEmail(),
                    'requires_two_factor' => false,
                    'redirect' => route('dashboard'),
                ],
            ]);
        } catch (ValidationException $exception) {
            throw $exception;
        }
    }

    /**
     * Logout user.
     */
    public function destroy(Request $request): JsonResponse
    {
        auth()->logout();

        /*
        |--------------------------------------------------------------------------
        | Clear Pending 2FA State
        |--------------------------------------------------------------------------
        */

        $request->session()->forget([
            'two_factor.pending_user_id',
            'two_factor.remember',
            'two_factor.method',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Invalidate Session
        |--------------------------------------------------------------------------
        */

        $request->session()->invalidate();

        /*
        |--------------------------------------------------------------------------
        | Regenerate CSRF Token
        |--------------------------------------------------------------------------
        */

        $request->session()->regenerateToken();

        return response()->json([
            'success' => true,
            'message' => 'You have been signed out successfully.',
            'redirect' => route('login'),
        ]);
    }
}
