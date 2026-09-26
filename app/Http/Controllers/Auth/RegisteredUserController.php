<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\Auth\RegistrationService;
use Illuminate\Http\JsonResponse;

class RegisteredUserController extends Controller
{
    /**
     * Registration service.
     */
    public function __construct(
        protected RegistrationService $registrationService
    ) {
    }

    /**
     * Register a new user.
     */
    public function store(RegisterRequest $request): JsonResponse
    {
        $user = $this->registrationService->register(
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Account created successfully. Please check your email to verify your account.',
            'data' => [
                'user_id' => $user->id,
                'email' => $user->email,
            ],
        ], 201);
    }
}
