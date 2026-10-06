<?php

namespace App\Services\Settings;

use Carbon\Carbon;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileSessionService
{
    /**
     * Get all sessions belonging to the authenticated user.
     */
    public function getActiveSessions(Request $request): array
    {
        $user = $request->user();
        $currentSessionId = $request->session()->getId();

        $sessions = $this->sessionsQuery($user->id)
            ->orderByDesc('last_activity')
            ->get();

        return $sessions
            ->map(function (object $session) use ($currentSessionId) {
                $isCurrent = $session->id === $currentSessionId;

                return [
                    'id' => $session->id,
                    'device' => $this->detectDevice(
                        (string) $session->user_agent
                    ),
                    'browser' => $this->detectBrowser(
                        (string) $session->user_agent
                    ),
                    'platform' => $this->detectPlatform(
                        (string) $session->user_agent
                    ),
                    'ip_address' => $session->ip_address,
                    'last_active' => $this->formatLastActivity(
                        (int) $session->last_activity
                    ),
                    'last_activity' => Carbon::createFromTimestamp(
                        (int) $session->last_activity
                    )->toIso8601String(),
                    'is_current' => $isCurrent,
                    'status' => $isCurrent ? 'current' : 'active',
                ];
            })
            ->values()
            ->all();
    }

    /**
     * Sign out a specific session.
     *
     * The current session can never be removed through this method.
     */
    public function destroySession(
        Request $request,
        string $sessionId
    ): bool {
        $user = $request->user();
        $currentSessionId = $request->session()->getId();

        if ($sessionId === $currentSessionId) {
            return false;
        }

        return DB::table('sessions')
                ->where('id', $sessionId)
                ->where('user_id', $user->id)
                ->delete() > 0;
    }

    /**
     * Sign out all sessions except the current session.
     */
    public function logoutOtherSessions(Request $request): int
    {
        $user = $request->user();
        $currentSessionId = $request->session()->getId();

        return DB::table('sessions')
            ->where('user_id', $user->id)
            ->where('id', '!=', $currentSessionId)
            ->delete();
    }

    /**
     * Build the sessions query for a user.
     */
    protected function sessionsQuery(int $userId): Builder
    {
        return DB::table('sessions')
            ->where('user_id', $userId)
            ->select([
                'id',
                'ip_address',
                'user_agent',
                'last_activity',
            ]);
    }

    /**
     * Format the last activity time for the frontend.
     */
    protected function formatLastActivity(int $timestamp): string
    {
        return Carbon::createFromTimestamp($timestamp)
            ->diffForHumans();
    }

    /**
     * Detect the browser from the user agent.
     */
    protected function detectBrowser(string $userAgent): string
    {
        $browsers = [
            'Edge' => [
                'Edg/',
                'Edge/',
            ],
            'Opera' => [
                'OPR/',
                'Opera/',
            ],
            'Chrome' => [
                'Chrome/',
                'CriOS/',
            ],
            'Firefox' => [
                'Firefox/',
                'FxiOS/',
            ],
            'Safari' => [
                'Safari/',
            ],
            'Internet Explorer' => [
                'MSIE ',
                'Trident/',
            ],
        ];

        foreach ($browsers as $browser => $signatures) {
            foreach ($signatures as $signature) {
                if (str_contains($userAgent, $signature)) {
                    if (
                        $browser === 'Safari'
                        && (
                            str_contains(
                                $userAgent,
                                'Chrome/'
                            )
                            || str_contains(
                                $userAgent,
                                'CriOS/'
                            )
                            || str_contains(
                                $userAgent,
                                'Android'
                            )
                        )
                    ) {
                        continue;
                    }

                    return $browser;
                }
            }
        }

        return 'Unknown Browser';
    }

    /**
     * Detect the operating system/platform from the user agent.
     */
    protected function detectPlatform(string $userAgent): string
    {
        if (
            str_contains($userAgent, 'iPhone')
            || str_contains($userAgent, 'iPad')
            || str_contains($userAgent, 'iPod')
        ) {
            return 'iOS';
        }

        if (str_contains($userAgent, 'Android')) {
            return 'Android';
        }

        if (
            str_contains($userAgent, 'Mac OS X')
            || str_contains($userAgent, 'Macintosh')
        ) {
            return 'macOS';
        }

        if (
            str_contains($userAgent, 'Windows NT')
            || str_contains($userAgent, 'Windows')
        ) {
            return 'Windows';
        }

        if (
            str_contains($userAgent, 'Linux')
            && ! str_contains($userAgent, 'Android')
        ) {
            return 'Linux';
        }

        if (
            str_contains($userAgent, 'CrOS')
        ) {
            return 'ChromeOS';
        }

        return 'Unknown';
    }

    /**
     * Detect the general device type.
     */
    protected function detectDevice(string $userAgent): string
    {
        if (
            str_contains($userAgent, 'iPad')
            || str_contains($userAgent, 'Tablet')
            || str_contains($userAgent, 'Android')
            && ! str_contains($userAgent, 'Mobile')
        ) {
            return 'Tablet';
        }

        if (
            str_contains($userAgent, 'iPhone')
            || str_contains($userAgent, 'iPod')
            || str_contains($userAgent, 'Android')
            && str_contains($userAgent, 'Mobile')
        ) {
            return 'Mobile';
        }

        return 'Desktop';
    }
}
