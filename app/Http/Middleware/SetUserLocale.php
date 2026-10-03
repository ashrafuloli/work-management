<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetUserLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(
        Request $request,
        Closure $next
    ): Response {
        $locale = $request->user()?->profile?->locale
            ?? config('localization.default', 'en');

        $supportedLocales = array_keys(
            config('localization.supported', [])
        );

        if (! in_array($locale, $supportedLocales, true)) {
            $locale = config('localization.fallback', 'en');
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
