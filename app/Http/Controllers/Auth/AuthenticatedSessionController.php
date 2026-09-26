<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\Auth\LoginService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    public function __construct(
        protected LoginService $loginService
    )
    {
    }

    /**
     * Authenticate user.
     */
    public function store(LoginRequest $request): JsonResponse
    {
        try {

            $user = $this->loginService->login(
                $request->validated()
            );


            /*
            |--------------------------------------------------------------------------
            | Regenerate Session
            |--------------------------------------------------------------------------
            */

            $request->session()->regenerate();


            /*
            |--------------------------------------------------------------------------
            | Response
            |--------------------------------------------------------------------------
            */

            return response()->json([
                'success' => true,
                'message' => 'Login successful.',
                'data' => [
                    'user_id' => $user->id,
                    'email' => $user->email,
                    'email_verified' => $user->hasVerifiedEmail(),
                    'redirect' => route('dashboard'),
                ],
            ]);

        } catch (\Illuminate\Validation\ValidationException $exception) {

            throw $exception;
        }
    }


    /**
     * Logout user.
     */
    public function destroy(Request $request): JsonResponse
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json([
            'success' => true,
            'message' => 'You have been signed out successfully.',
            'redirect' => route('login'),
        ]);
    }
}
