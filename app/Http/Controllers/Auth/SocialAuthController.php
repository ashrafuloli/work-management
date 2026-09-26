<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\SocialAuthService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Throwable;

class SocialAuthController extends Controller
{
    public function __construct(
        protected SocialAuthService $socialAuthService
    ) {
    }


    /*
    |--------------------------------------------------------------------------
    | Google
    |--------------------------------------------------------------------------
    */

    public function redirectGoogle(): RedirectResponse
    {
        return Socialite::driver('google')
            ->scopes([
                'openid',
                'profile',
                'email',
            ])
            ->redirect();
    }


    public function callbackGoogle(): RedirectResponse
    {
        try {

            $socialUser = Socialite::driver('google')
                ->user();


            $user = $this->socialAuthService
                ->authenticateGoogle($socialUser);


            if ($user->status !== 'active') {

                return redirect()
                    ->route('login')
                    ->with(
                        'error',
                        'Your account is currently inactive.'
                    );
            }


            Auth::login(
                $user,
                true
            );


            request()
                ->session()
                ->regenerate();


            return redirect()
                ->route('dashboard');

        } catch (Throwable $exception) {

            report($exception);

            return redirect()
                ->route('login')
                ->with(
                    'error',
                    'Unable to sign in with Google. Please try again.'
                );
        }
    }


    /*
    |--------------------------------------------------------------------------
    | GitHub
    |--------------------------------------------------------------------------
    */

    public function redirectGithub(): RedirectResponse
    {
        return Socialite::driver('github')
            ->scopes([
                'read:user',
                'user:email',
            ])
            ->redirect();
    }


    public function callbackGithub(): RedirectResponse
    {
        try {

            $socialUser = Socialite::driver('github')
                ->user();


            $user = $this->socialAuthService
                ->authenticateGithub($socialUser);


            if ($user->status !== 'active') {

                return redirect()
                    ->route('login')
                    ->with(
                        'error',
                        'Your account is currently inactive.'
                    );
            }


            Auth::login(
                $user,
                true
            );


            request()
                ->session()
                ->regenerate();


            return redirect()
                ->route('dashboard');

        } catch (Throwable $exception) {

            report($exception);

            return redirect()
                ->route('login')
                ->with(
                    'error',
                    'Unable to sign in with GitHub. Please try again.'
                );
        }
    }
}
