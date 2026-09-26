<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SocialAuthController;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home.index');
})->name('home');


/*
|--------------------------------------------------------------------------
| Components Preview
|--------------------------------------------------------------------------
*/

Route::get('/components', function () {
    return view('pages.components.components');
})->name('components');


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
| Login, registration, password reset and social authentication.
|
*/

Route::prefix('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Login
    |--------------------------------------------------------------------------
    */

    Route::get('/login', function () {
        return view('pages.auth.login');
    })->name('login');

    Route::post('/login', [
        AuthenticatedSessionController::class,
        'store',
    ])->name('login.store');


    /*
    |--------------------------------------------------------------------------
    | Register
    |--------------------------------------------------------------------------
    */

    Route::get('/register', function () {
        return view('pages.auth.register');
    })->name('register');

    Route::post('/register', [
        RegisteredUserController::class,
        'store',
    ])->name('register.store');


    /*
    |--------------------------------------------------------------------------
    | Forgot Password
    |--------------------------------------------------------------------------
    */

    Route::get('/forgot-password', function () {
        return view('pages.auth.forgot-password');
    })->name('password.request');

    Route::post('/forgot-password', [
        PasswordResetLinkController::class,
        'store',
    ])
        ->middleware('throttle:6,1')
        ->name('password.email');


    /*
    |--------------------------------------------------------------------------
    | Reset Password
    |--------------------------------------------------------------------------
    */

    Route::get('/reset-password/{token}', function (
        string $token,
        Request $request
    ) {
        return view('pages.auth.reset-password', [
            'token' => $token,
            'email' => $request->query('email'),
        ]);
    })->name('password.reset');

    Route::post('/reset-password', [
        NewPasswordController::class,
        'store',
    ])
        ->middleware('throttle:6,1')
        ->name('password.update');


    /*
    |--------------------------------------------------------------------------
    | Google Authentication
    |--------------------------------------------------------------------------
    */

    Route::get('/google/redirect', [
        SocialAuthController::class,
        'redirectGoogle',
    ])->name('google.redirect');

    Route::get('/google/callback', [
        SocialAuthController::class,
        'callbackGoogle',
    ])->name('google.callback');


    /*
    |--------------------------------------------------------------------------
    | GitHub Authentication
    |--------------------------------------------------------------------------
    */

    Route::get('/github/redirect', [
        SocialAuthController::class,
        'redirectGithub',
    ])->name('github.redirect');

    Route::get('/github/callback', [
        SocialAuthController::class,
        'callbackGithub',
    ])->name('github.callback');

});


/*
|--------------------------------------------------------------------------
| Email Verification Routes
|--------------------------------------------------------------------------
|
| These routes require authentication.
|
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Verification Notice
    |--------------------------------------------------------------------------
    */

    Route::get('/auth/verify-email', function () {
        return view('pages.auth.verify-email');
    })->name('verification.notice');


    /*
    |--------------------------------------------------------------------------
    | Verify Email
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/auth/email/verify/{id}/{hash}',
        function (EmailVerificationRequest $request) {

            $request->fulfill();

            return redirect()
                ->route('dashboard')
                ->with(
                    'status',
                    'Your email address has been verified successfully.'
                );
        }
    )
        ->middleware('signed')
        ->name('verification.verify');


    /*
    |--------------------------------------------------------------------------
    | Resend Verification Email
    |--------------------------------------------------------------------------
    */

    Route::post(
        '/auth/email/verification-notification',
        function (Request $request) {

            $user = $request->user();

            if ($user->hasVerifiedEmail()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Your email address is already verified.',
                ], 422);
            }

            $user->sendEmailVerificationNotification();

            return response()->json([
                'success' => true,
                'message' => 'A new verification link has been sent to your email.',
            ]);
        }
    )
        ->middleware('throttle:6,1')
        ->name('verification.send');

});


/*
|--------------------------------------------------------------------------
| Authenticated Application Routes
|--------------------------------------------------------------------------
|
| All application/dashboard pages require authentication.
|
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', function () {
        return view('pages.dashboard.index');
    })->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | Projects
    |--------------------------------------------------------------------------
    */

    Route::prefix('projects')
        ->name('projects.')
        ->group(function () {

            /*
            |--------------------------------------------------------------------------
            | Project List
            |--------------------------------------------------------------------------
            */

            Route::get('/', function () {
                return view('pages.projects.index');
            })->name('index');


            /*
            |--------------------------------------------------------------------------
            | Create Project
            |--------------------------------------------------------------------------
            */

            Route::get('/create', function () {
                return view('pages.projects.create');
            })->name('create');


            /*
            |--------------------------------------------------------------------------
            | Project Overview
            |--------------------------------------------------------------------------
            */

            Route::get('/{project}', function ($project) {
                return view('pages.projects.overview');
            })
                ->whereNumber('project')
                ->name('overview');


            /*
            |--------------------------------------------------------------------------
            | Project Tasks
            |--------------------------------------------------------------------------
            */

            Route::get('/{project}/tasks', function ($project) {
                return view('pages.projects.tasks');
            })
                ->whereNumber('project')
                ->name('tasks');


            /*
            |--------------------------------------------------------------------------
            | Project Milestones
            |--------------------------------------------------------------------------
            */

            Route::get('/{project}/milestones', function ($project) {
                return view('pages.projects.milestones');
            })
                ->whereNumber('project')
                ->name('milestones');


            /*
            |--------------------------------------------------------------------------
            | Project Timeline
            |--------------------------------------------------------------------------
            */

            Route::get('/{project}/timeline', function ($project) {
                return view('pages.projects.timeline');
            })
                ->whereNumber('project')
                ->name('timeline');


            /*
            |--------------------------------------------------------------------------
            | Project Calendar
            |--------------------------------------------------------------------------
            */

            Route::get('/{project}/calendar', function ($project) {
                return view('pages.projects.calendar');
            })
                ->whereNumber('project')
                ->name('calendar');


            /*
            |--------------------------------------------------------------------------
            | Project Workstreams
            |--------------------------------------------------------------------------
            */

            Route::get('/{project}/workstreams', function ($project) {
                return view('pages.projects.workstreams');
            })
                ->whereNumber('project')
                ->name('workstreams');


            /*
            |--------------------------------------------------------------------------
            | Project Files
            |--------------------------------------------------------------------------
            */

            Route::get('/{project}/files', function ($project) {
                return view('pages.projects.files');
            })
                ->whereNumber('project')
                ->name('files');


            /*
            |--------------------------------------------------------------------------
            | Project Team
            |--------------------------------------------------------------------------
            */

            Route::get('/{project}/team', function ($project) {
                return view('pages.projects.team');
            })
                ->whereNumber('project')
                ->name('team');


            /*
            |--------------------------------------------------------------------------
            | Project Activity
            |--------------------------------------------------------------------------
            */

            Route::get('/{project}/activity', function ($project) {
                return view('pages.projects.activity');
            })
                ->whereNumber('project')
                ->name('activity');


            /*
            |--------------------------------------------------------------------------
            | Project Reports
            |--------------------------------------------------------------------------
            */

            Route::get('/{project}/reports', function ($project) {
                return view('pages.projects.reports');
            })
                ->whereNumber('project')
                ->name('reports');


            /*
            |--------------------------------------------------------------------------
            | Project Risks & Issues
            |--------------------------------------------------------------------------
            */

            Route::get('/{project}/risks-issues', function ($project) {
                return view('pages.projects.risks-issues');
            })
                ->whereNumber('project')
                ->name('risks-issues');

        });


    /*
    |--------------------------------------------------------------------------
    | Time Tracking
    |--------------------------------------------------------------------------
    */

    Route::get('/time-tracking', function () {
        return view('pages.time-tracking.index');
    })->name('time-tracking');


    /*
    |--------------------------------------------------------------------------
    | Tasks
    |--------------------------------------------------------------------------
    */

    Route::prefix('tasks')
        ->name('tasks.')
        ->group(function () {

            /*
            |--------------------------------------------------------------------------
            | Task List
            |--------------------------------------------------------------------------
            */

            Route::get('/', function () {
                return view('pages.tasks.index');
            })->name('index');


            /*
            |--------------------------------------------------------------------------
            | Task Detail
            |--------------------------------------------------------------------------
            */

            Route::get('/{task}', function ($task) {
                return view('pages.tasks.detail');
            })
                ->whereNumber('task')
                ->name('detail');

        });


    /*
    |--------------------------------------------------------------------------
    | Calendar
    |--------------------------------------------------------------------------
    */

    Route::get('/calendar', function () {
        return view('pages.calendar.index');
    })->name('calendar');


    /*
    |--------------------------------------------------------------------------
    | Workstreams
    |--------------------------------------------------------------------------
    */

    Route::get('/workstreams', function () {
        return view('pages.workstreams.index');
    })->name('workstreams');


    /*
    |--------------------------------------------------------------------------
    | Files & Documents
    |--------------------------------------------------------------------------
    */

    Route::get('/files', function () {
        return view('pages.files.index');
    })->name('files');

    Route::get('/documents', function () {
        return view('pages.documents.index');
    })->name('documents');


    /*
    |--------------------------------------------------------------------------
    | Team
    |--------------------------------------------------------------------------
    */

    Route::prefix('team')
        ->name('team.')
        ->group(function () {

            /*
            |--------------------------------------------------------------------------
            | Team List
            |--------------------------------------------------------------------------
            */

            Route::get('/', function () {
                return view('pages.team.index');
            })->name('index');


            /*
            |--------------------------------------------------------------------------
            | Team Member
            |--------------------------------------------------------------------------
            */

            Route::get('/{member}', function ($member) {
                return view('pages.team.member');
            })
                ->whereNumber('member')
                ->name('member');

        });


    /*
    |--------------------------------------------------------------------------
    | Project Activity
    |--------------------------------------------------------------------------
    */

    Route::get('/activity', function () {
        return view('pages.activity.index');
    })->name('activity');


    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    */

    Route::get('/notifications', function () {
        return view('pages.notifications.index');
    })->name('notifications');


    /*
    |--------------------------------------------------------------------------
    | Global Search
    |--------------------------------------------------------------------------
    */

    Route::get('/search', function () {
        return view('pages.search.index');
    })->name('search');


    /*
    |--------------------------------------------------------------------------
    | Reports
    |--------------------------------------------------------------------------
    */

    Route::prefix('reports')
        ->name('reports.')
        ->group(function () {

            Route::get('/', function () {
                return view('pages.reports.index');
            })->name('index');

        });


    /*
    |--------------------------------------------------------------------------
    | Risks & Issues
    |--------------------------------------------------------------------------
    */

    Route::get('/risks-issues', function () {
        return view('pages.risks-issues.index');
    })->name('risks-issues');


    /*
    |--------------------------------------------------------------------------
    | Settings
    |--------------------------------------------------------------------------
    */

    Route::prefix('settings')
        ->name('settings.')
        ->group(function () {

            /*
            |--------------------------------------------------------------------------
            | Settings Overview
            |--------------------------------------------------------------------------
            */

            Route::get('/', function () {
                return view('pages.settings.index');
            })->name('index');


            /*
            |--------------------------------------------------------------------------
            | Profile Settings
            |--------------------------------------------------------------------------
            */

            Route::get('/profile', function () {
                return view('pages.settings.profile');
            })->name('profile');


            /*
            |--------------------------------------------------------------------------
            | Roles & Permissions
            |--------------------------------------------------------------------------
            */

            Route::get('/roles-permissions', function () {
                return view('pages.settings.roles-permissions');
            })->name('roles-permissions');


            /*
            |--------------------------------------------------------------------------
            | Workspace Settings
            |--------------------------------------------------------------------------
            */

            Route::get('/workspace', function () {
                return view('pages.settings.workspace');
            })->name('workspace');


            /*
            |--------------------------------------------------------------------------
            | Integrations
            |--------------------------------------------------------------------------
            */

            Route::get('/integrations', function () {
                return view('pages.settings.integrations');
            })->name('integrations');


            /*
            |--------------------------------------------------------------------------
            | API / Developer
            |--------------------------------------------------------------------------
            */

            Route::get('/api', function () {
                return view('pages.settings.api');
            })->name('api');

        });


    /*
    |--------------------------------------------------------------------------
    | Billing
    |--------------------------------------------------------------------------
    */

    Route::prefix('billing')
        ->name('billing.')
        ->group(function () {

            /*
            |--------------------------------------------------------------------------
            | Billing Overview
            |--------------------------------------------------------------------------
            */

            Route::get('/', function () {
                return view('pages.billing.index');
            })->name('index');


            /*
            |--------------------------------------------------------------------------
            | Subscription
            |--------------------------------------------------------------------------
            */

            Route::get('/subscription', function () {
                return view('pages.billing.subscription');
            })->name('subscription');


            /*
            |--------------------------------------------------------------------------
            | Checkout
            |--------------------------------------------------------------------------
            */

            Route::get('/checkout', function () {
                return view('pages.billing.checkout');
            })->name('checkout');


            /*
            |--------------------------------------------------------------------------
            | Payment Success
            |--------------------------------------------------------------------------
            */

            Route::get('/success', function () {
                return view('pages.billing.success');
            })->name('success');

        });

});


/*
|--------------------------------------------------------------------------
| Pricing
|--------------------------------------------------------------------------
*/

Route::get('/pricing', function () {
    return view('pages.pricing.index');
})->name('pricing');


/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/

Route::post('/logout', [
    AuthenticatedSessionController::class,
    'destroy',
])
    ->middleware('auth')
    ->name('logout');
