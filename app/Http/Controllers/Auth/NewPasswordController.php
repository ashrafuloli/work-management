<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Services\Auth\PasswordResetService;
use Illuminate\Http\JsonResponse;

class NewPasswordController extends Controller
{
    public function __construct(
        protected PasswordResetService $passwordResetService
    ) {
    }

    public function store(
        ResetPasswordRequest $request
    ): JsonResponse {

        $this->passwordResetService->resetPassword(
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Your password has been reset successfully.',
            'data' => [
                'redirect' => route('login'),
            ],
        ]);
    }
}
