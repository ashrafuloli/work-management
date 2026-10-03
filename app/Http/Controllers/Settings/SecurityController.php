<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\DisableEmailTwoFactorRequest;
use App\Http\Requests\Settings\VerifyEmailTwoFactorRequest;
use App\Services\Security\EmailTwoFactorService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class SecurityController extends Controller
{
    public function __construct(
        protected EmailTwoFactorService $emailTwoFactorService,
    ) {
    }

    /*
    |--------------------------------------------------------------------------
    | Email Two-Factor Authentication Status
    |--------------------------------------------------------------------------
    */

    /**
     * Get Email 2FA status.
     */
    public function twoFactorStatus(
        Request $request
    ): JsonResponse {
        $user = $request->user();

        $emailEnabled = $this->emailTwoFactorService
            ->isEnabled($user);

        return response()->json([
            'success' => true,
            'message' => null,

            'data' => [
                'email_2fa_enabled' => $emailEnabled,
                'enabled' => $emailEnabled,
            ],
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Enable Email Two-Factor Authentication
    |--------------------------------------------------------------------------
    */

    /**
     * Send an Email 2FA verification code.
     */
    public function sendEmailTwoFactorCode(
        Request $request
    ): JsonResponse {
        try {
            $user = $request->user();

            if ($this->emailTwoFactorService->isEnabled($user)) {
                return response()->json([
                    'success' => false,
                    'message' => __(
                        'profile.js.email_two_factor_already_enabled'
                    ),
                ], 422);
            }

            $this->emailTwoFactorService->sendCode($user);

            return response()->json([
                'success' => true,
                'message' => __(
                    'profile.js.email_two_factor_code_sent'
                ),

                'data' => [
                    'email' => $this->maskEmail($user->email),
                ],
            ]);
        } catch (Throwable $exception) {
            report($exception);

            return response()->json([
                'success' => false,
                'message' => __(
                    'profile.js.unable_to_send_email_two_factor_code'
                ),
            ], 500);
        }
    }

    /**
     * Verify Email OTP and enable Email 2FA.
     */
    public function verifyEmailTwoFactorCode(
        VerifyEmailTwoFactorRequest $request
    ): JsonResponse {
        try {
            $user = $request->user();

            if ($this->emailTwoFactorService->isEnabled($user)) {
                return response()->json([
                    'success' => false,
                    'message' => __(
                        'profile.js.email_two_factor_already_enabled'
                    ),
                ], 422);
            }

            $verified = $this->emailTwoFactorService->verifyCode(
                $user,
                $request->validated('code')
            );

            if (! $verified) {
                return response()->json([
                    'success' => false,
                    'message' => __(
                        'profile.js.email_two_factor_invalid_code'
                    ),

                    'errors' => [
                        'code' => [
                            __(
                                'profile.js.email_two_factor_invalid_code'
                            ),
                        ],
                    ],
                ], 422);
            }

            $this->emailTwoFactorService->enable($user);

            return response()->json([
                'success' => true,
                'message' => __(
                    'profile.js.email_two_factor_enabled'
                ),

                'data' => [
                    'email_2fa_enabled' => true,
                    'enabled' => true,
                    'email' => $this->maskEmail($user->email),
                ],
            ]);
        } catch (Throwable $exception) {
            report($exception);

            return response()->json([
                'success' => false,
                'message' => __(
                    'profile.js.unable_to_verify_email_two_factor'
                ),
            ], 500);
        }
    }

    /**
     * Resend Email 2FA verification code.
     */
    public function resendEmailTwoFactorCode(
        Request $request
    ): JsonResponse {
        try {
            $user = $request->user();

            if ($this->emailTwoFactorService->isEnabled($user)) {
                return response()->json([
                    'success' => false,
                    'message' => __(
                        'profile.js.email_two_factor_already_enabled'
                    ),
                ], 422);
            }

            $this->emailTwoFactorService->sendCode($user);

            return response()->json([
                'success' => true,
                'message' => __(
                    'profile.js.email_two_factor_code_resent'
                ),

                'data' => [
                    'email' => $this->maskEmail($user->email),
                ],
            ]);
        } catch (Throwable $exception) {
            report($exception);

            return response()->json([
                'success' => false,
                'message' => __(
                    'profile.js.unable_to_resend_email_two_factor_code'
                ),
            ], 500);
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Disable Email Two-Factor Authentication
    |--------------------------------------------------------------------------
    */

    /**
     * Send a verification code before disabling Email 2FA.
     */
    public function sendEmailTwoFactorDisableCode(
        Request $request
    ): JsonResponse {
        try {
            $user = $request->user();

            if (! $this->emailTwoFactorService->isEnabled($user)) {
                return response()->json([
                    'success' => false,
                    'message' => __(
                        'profile.js.email_two_factor_not_enabled'
                    ),
                ], 422);
            }

            $this->emailTwoFactorService->sendCode($user);

            return response()->json([
                'success' => true,
                'message' => __(
                    'profile.js.email_two_factor_code_sent'
                ),

                'data' => [
                    'email' => $this->maskEmail($user->email),
                ],
            ]);
        } catch (Throwable $exception) {
            report($exception);

            return response()->json([
                'success' => false,
                'message' => __(
                    'profile.js.unable_to_send_email_two_factor_code'
                ),
            ], 500);
        }
    }

    /**
     * Verify Email OTP and disable Email 2FA.
     */
    public function disableEmailTwoFactor(
        DisableEmailTwoFactorRequest $request
    ): JsonResponse {
        try {
            $user = $request->user();

            if (! $this->emailTwoFactorService->isEnabled($user)) {
                return response()->json([
                    'success' => false,
                    'message' => __(
                        'profile.js.email_two_factor_not_enabled'
                    ),
                ], 422);
            }

            $verified = $this->emailTwoFactorService->verifyCode(
                $user,
                $request->validated('code')
            );

            if (! $verified) {
                return response()->json([
                    'success' => false,
                    'message' => __(
                        'profile.js.email_two_factor_invalid_code'
                    ),

                    'errors' => [
                        'code' => [
                            __(
                                'profile.js.email_two_factor_invalid_code'
                            ),
                        ],
                    ],
                ], 422);
            }

            $this->emailTwoFactorService->disable($user);

            return response()->json([
                'success' => true,
                'message' => __(
                    'profile.js.email_two_factor_disabled'
                ),

                'data' => [
                    'email_2fa_enabled' => false,
                    'enabled' => false,
                ],
            ]);
        } catch (Throwable $exception) {
            report($exception);

            return response()->json([
                'success' => false,
                'message' => __(
                    'profile.js.unable_to_disable_email_two_factor'
                ),
            ], 500);
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Helper
    |--------------------------------------------------------------------------
    */

    /**
     * Mask an email address for UI display.
     *
     * Example:
     *
     * ashraful@example.com
     * a******l@example.com
     */
    protected function maskEmail(string $email): string
    {
        [$username, $domain] = array_pad(
            explode('@', $email, 2),
            2,
            ''
        );

        if ($username === '') {
            return $email;
        }

        $length = strlen($username);

        if ($length <= 2) {
            $maskedUsername = substr($username, 0, 1) . '*';
        } else {
            $maskedUsername =
                substr($username, 0, 1)
                . str_repeat('*', max(2, $length - 2))
                . substr($username, -1);
        }

        return $maskedUsername
            . ($domain ? '@' . $domain : '');
    }
}
