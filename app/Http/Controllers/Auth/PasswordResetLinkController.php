<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Services\Auth\PasswordResetService;
use Illuminate\Http\JsonResponse;

class PasswordResetLinkController extends Controller
{
    public function __construct(
        protected PasswordResetService $passwordResetService
    ) {
    }

    public function store(
        ForgotPasswordRequest $request
    ): JsonResponse {
        $this->passwordResetService->sendResetLink(
            $request->validated('email')
        );

        return response()->json([
            'success' => true,
            'message' => 'If an account exists with this email, a password reset link has been sent.',
        ]);
    }
}
