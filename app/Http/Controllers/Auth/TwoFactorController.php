<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Auth\LoginService;
use App\Services\Security\EmailTwoFactorService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TwoFactorController extends Controller
{
    public function __construct(
        protected EmailTwoFactorService $emailTwoFactorService,
        protected LoginService $loginService,
    ) {
    }

    /**
     * Show the login two-factor verification page.
     */
    public function show(Request $request): View|RedirectResponse
    {
        /*
        |--------------------------------------------------------------------------
        | Check Pending 2FA Session
        |--------------------------------------------------------------------------
        */

        $userId = $request->session()->get(
            'two_factor.pending_user_id'
        );

        if (! $userId) {
            return redirect()
                ->route('login')
                ->with(
                    'status',
                    'Your two-factor authentication session has expired.'
                );
        }

        /*
        |--------------------------------------------------------------------------
        | Validate Pending Method
        |--------------------------------------------------------------------------
        |
        | Email is currently the only supported two-factor method.
        |
        */

        $method = $request->session()->get(
            'two_factor.method'
        );

        if ($method !== 'email') {
            $this->clearPendingTwoFactorSession($request);

            return redirect()
                ->route('login')
                ->with(
                    'status',
                    'Please sign in again.'
                );
        }

        /*
        |--------------------------------------------------------------------------
        | Load User
        |--------------------------------------------------------------------------
        */

        $user = User::query()->find($userId);

        if (! $user || $user->status !== 'active') {
            $this->clearPendingTwoFactorSession($request);

            return redirect()
                ->route('login')
                ->with(
                    'status',
                    'Please sign in again.'
                );
        }

        /*
        |--------------------------------------------------------------------------
        | Validate Email 2FA Configuration
        |--------------------------------------------------------------------------
        */

        if (! $this->emailTwoFactorService->isEnabled($user)) {
            $this->clearPendingTwoFactorSession($request);

            return redirect()
                ->route('login')
                ->with(
                    'status',
                    'Your email two-factor authentication configuration has changed. Please sign in again.'
                );
        }

        /*
        |--------------------------------------------------------------------------
        | Render 2FA Page
        |--------------------------------------------------------------------------
        */

        return view('pages.auth.two-factor', [
            'user' => $user,
            'method' => 'email',
            'email' => $this->maskEmail($user->email),
        ]);
    }

    /**
     * Verify the login Email OTP.
     */
    public function verify(Request $request): JsonResponse
    {
        /*
        |--------------------------------------------------------------------------
        | Get Pending 2FA Session
        |--------------------------------------------------------------------------
        */

        $userId = $request->session()->get(
            'two_factor.pending_user_id'
        );

        $method = $request->session()->get(
            'two_factor.method'
        );

        if (! $userId || $method !== 'email') {
            return response()->json([
                'success' => false,
                'message' => 'Your two-factor authentication session has expired. Please sign in again.',
                'data' => [
                    'redirect' => route('login'),
                ],
            ], 401);
        }

        /*
        |--------------------------------------------------------------------------
        | Validate Request
        |--------------------------------------------------------------------------
        */

        $validated = $request->validate([
            'code' => [
                'required',
                'string',
                'max:50',
            ],
        ], [
            'code.required' => 'Authentication code is required.',
        ]);

        $code = trim(
            (string) $validated['code']
        );

        /*
        |--------------------------------------------------------------------------
        | Find Pending User
        |--------------------------------------------------------------------------
        */

        $user = User::query()->find($userId);

        if (! $user || $user->status !== 'active') {
            $this->clearPendingTwoFactorSession($request);

            return response()->json([
                'success' => false,
                'message' => 'Your account could not be verified. Please sign in again.',
                'data' => [
                    'redirect' => route('login'),
                ],
            ], 401);
        }

        /*
        |--------------------------------------------------------------------------
        | Validate Email 2FA
        |--------------------------------------------------------------------------
        */

        if (! $this->emailTwoFactorService->isEnabled($user)) {
            $this->clearPendingTwoFactorSession($request);

            return response()->json([
                'success' => false,
                'message' => 'Email two-factor authentication is no longer enabled. Please sign in again.',
                'data' => [
                    'redirect' => route('login'),
                ],
            ], 401);
        }

        /*
        |--------------------------------------------------------------------------
        | Verify Email OTP
        |--------------------------------------------------------------------------
        */

        $verified = $this->emailTwoFactorService->verifyCode(
            $user,
            $code
        );

        if (! $verified) {
            return response()->json([
                'success' => false,
                'message' => 'The verification code is invalid or expired.',
                'errors' => [
                    'code' => [
                        'The verification code is invalid or expired.',
                    ],
                ],
            ], 422);
        }

        /*
        |--------------------------------------------------------------------------
        | Get Remember Preference
        |--------------------------------------------------------------------------
        */

        $remember = (bool) $request->session()->get(
            'two_factor.remember',
            false
        );

        /*
        |--------------------------------------------------------------------------
        | Complete Login
        |--------------------------------------------------------------------------
        */

        $this->loginService->completeTwoFactorLogin(
            $user,
            $remember
        );

        /*
        |--------------------------------------------------------------------------
        | Clear Pending 2FA Session
        |--------------------------------------------------------------------------
        */

        $this->clearPendingTwoFactorSession($request);

        /*
        |--------------------------------------------------------------------------
        | Regenerate Authenticated Session
        |--------------------------------------------------------------------------
        */

        $request->session()->regenerate();

        /*
        |--------------------------------------------------------------------------
        | Success Response
        |--------------------------------------------------------------------------
        */

        return response()->json([
            'success' => true,
            'message' => 'Two-factor authentication successful.',
            'data' => [
                'user_id' => $user->id,
                'email' => $user->email,
                'two_factor_method' => 'email',
                'redirect' => route('dashboard'),
            ],
        ]);
    }

    /**
     * Resend email two-factor authentication code.
     */
    public function resendEmailCode(
        Request $request
    ): JsonResponse {
        /*
        |--------------------------------------------------------------------------
        | Check Pending 2FA Session
        |--------------------------------------------------------------------------
        */

        $userId = $request->session()->get(
            'two_factor.pending_user_id'
        );

        $method = $request->session()->get(
            'two_factor.method'
        );

        if (! $userId || $method !== 'email') {
            return response()->json([
                'success' => false,
                'message' => 'Your email two-factor authentication session has expired. Please sign in again.',
                'data' => [
                    'redirect' => route('login'),
                ],
            ], 401);
        }

        /*
        |--------------------------------------------------------------------------
        | Load User
        |--------------------------------------------------------------------------
        */

        $user = User::query()->find($userId);

        if (! $user || $user->status !== 'active') {
            $this->clearPendingTwoFactorSession($request);

            return response()->json([
                'success' => false,
                'message' => 'Your account could not be verified. Please sign in again.',
                'data' => [
                    'redirect' => route('login'),
                ],
            ], 401);
        }

        /*
        |--------------------------------------------------------------------------
        | Check Email 2FA
        |--------------------------------------------------------------------------
        */

        if (! $this->emailTwoFactorService->isEnabled($user)) {
            $this->clearPendingTwoFactorSession($request);

            return response()->json([
                'success' => false,
                'message' => 'Email two-factor authentication is no longer enabled.',
                'data' => [
                    'redirect' => route('login'),
                ],
            ], 401);
        }

        /*
        |--------------------------------------------------------------------------
        | Send New Code
        |--------------------------------------------------------------------------
        */

        try {
            $this->emailTwoFactorService->sendCode($user);
        } catch (\Throwable $exception) {
            report($exception);

            return response()->json([
                'success' => false,
                'message' => 'Unable to send a new verification code. Please try again.',
            ], 500);
        }

        return response()->json([
            'success' => true,
            'message' => 'A new verification code has been sent to your email.',
            'data' => [
                'email' => $this->maskEmail($user->email),
            ],
        ]);
    }

    /**
     * Clear pending two-factor session data.
     */
    protected function clearPendingTwoFactorSession(
        Request $request
    ): void {
        $request->session()->forget([
            'two_factor.pending_user_id',
            'two_factor.remember',
            'two_factor.method',
        ]);
    }

    /**
     * Mask email address for the 2FA page.
     */
    protected function maskEmail(string $email): string
    {
        [$username, $domain] = array_pad(
            explode('@', $email, 2),
            2,
            ''
        );

        if ($username === '' || $domain === '') {
            return $email;
        }

        $length = strlen($username);

        if ($length <= 2) {
            $maskedUsername = substr(
                    $username,
                    0,
                    1
                ) . '***';
        } else {
            $visibleCharacters = min(2, $length);

            $maskedUsername =
                substr(
                    $username,
                    0,
                    $visibleCharacters
                )
                . str_repeat(
                    '*',
                    max(
                        3,
                        $length - $visibleCharacters
                    )
                );
        }

        return $maskedUsername . '@' . $domain;
    }
}
