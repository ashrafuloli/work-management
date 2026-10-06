<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Services\Settings\ProfileSessionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class ProfileSessionController extends Controller
{
    public function __construct(
        protected ProfileSessionService $profileSessionService,
    ) {
    }

    /**
     * Get the authenticated user's active sessions.
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $sessions = $this->profileSessionService->getActiveSessions(
                $request
            );

            return response()->json([
                'success' => true,
                'message' => null,
                'data' => [
                    'sessions' => $sessions,
                ],
            ]);
        } catch (Throwable $exception) {
            report($exception);

            return response()->json([
                'success' => false,
                'message' => __('common.something_went_wrong'),
            ], 500);
        }
    }

    /**
     * Sign out a specific session.
     */
    public function destroy(
        Request $request,
        string $sessionId
    ): JsonResponse {
        try {
            $signedOut = $this->profileSessionService->destroySession(
                $request,
                $sessionId
            );

            if (! $signedOut) {
                return response()->json([
                    'success' => false,
                    'message' => __(
                        'profile.js.session_not_found'
                    ),
                ], 404);
            }

            return response()->json([
                'success' => true,
                'message' => __(
                    'profile.js.session_signed_out'
                ),
                'data' => [],
            ]);
        } catch (Throwable $exception) {
            report($exception);

            return response()->json([
                'success' => false,
                'message' => __('common.something_went_wrong'),
            ], 500);
        }
    }

    /**
     * Sign out all other sessions.
     */
    public function logoutOthers(Request $request): JsonResponse
    {
        try {
            $count = $this->profileSessionService->logoutOtherSessions(
                $request
            );

            return response()->json([
                'success' => true,
                'message' => __(
                    'profile.js.other_sessions_signed_out'
                ),
                'data' => [
                    'signed_out_count' => $count,
                ],
            ]);
        } catch (Throwable $exception) {
            report($exception);

            return response()->json([
                'success' => false,
                'message' => __('common.something_went_wrong'),
            ], 500);
        }
    }
}
