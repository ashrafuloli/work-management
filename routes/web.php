<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public / General
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home.index');
})->name('home');

Route::get('/components', function () {
    return view('pages.components.components');
})->name('components');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
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


    /*
    |--------------------------------------------------------------------------
    | Register
    |--------------------------------------------------------------------------
    */

    Route::get('/register', function () {
        return view('pages.auth.register');
    })->name('register');


    /*
    |--------------------------------------------------------------------------
    | Forgot Password
    |--------------------------------------------------------------------------
    */

    Route::get('/forgot-password', function () {
        return view('pages.auth.forgot-password');
    })->name('forgot-password');


    /*
    |--------------------------------------------------------------------------
    | Reset Password
    |--------------------------------------------------------------------------
    */

    Route::get('/reset-password', function () {
        return view('pages.auth.reset-password');
    })->name('reset-password');


    /*
    |--------------------------------------------------------------------------
    | Email Verification
    |--------------------------------------------------------------------------
    */

    Route::get('/verify-email', function () {
        return view('pages.auth.verify-email');
    })->name('verify-email');

});


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

Route::prefix('projects')->name('projects.')->group(function () {

    // Projects listing
    Route::get('/', function () {
        return view('pages.projects.index');
    })->name('index');

    // Create project
    Route::get('/create', function () {
        return view('pages.projects.create');
    })->name('create');

    // Project overview
    Route::get('/{project}', function ($project) {
        return view('pages.projects.overview');
    })->name('overview');

    // Project tasks
    Route::get('/{project}/tasks', function ($project) {
        return view('pages.projects.tasks');
    })->name('tasks');

    // Project milestones
    Route::get('/{project}/milestones', function ($project) {
        return view('pages.projects.milestones');
    })->name('milestones');

    // Project timeline
    Route::get('/{project}/timeline', function ($project) {
        return view('pages.projects.timeline');
    })->name('timeline');

    // Project calendar
    Route::get('/{project}/calendar', function ($project) {
        return view('pages.projects.calendar');
    })->name('calendar');

    // Project workstreams
    Route::get('/{project}/workstreams', function ($project) {
        return view('pages.projects.workstreams');
    })->name('workstreams');

    // Project files
    Route::get('/{project}/files', function ($project) {
        return view('pages.projects.files');
    })->name('files');

    // Project team
    Route::get('/{project}/team', function ($project) {
        return view('pages.projects.team');
    })->name('team');

    // Project activity
    Route::get('/{project}/activity', function ($project) {
        return view('pages.projects.activity');
    })->name('activity');

    // Project reports
    Route::get('/{project}/reports', function ($project) {
        return view('pages.projects.reports');
    })->name('reports');

    // Project risks & issues
    Route::get('/{project}/risks-issues', function ($project) {
        return view('pages.projects.risks-issues');
    })->name('risks-issues');

});

Route::get('/time-tracking', function () {
    return view('pages.time-tracking.index');
})->name('time-tracking');


/*
|--------------------------------------------------------------------------
| Tasks
|--------------------------------------------------------------------------
*/

Route::prefix('tasks')->name('tasks.')->group(function () {

    Route::get('/', function () {
        return view('pages.tasks.index');
    })->name('index');

    Route::get('/{task}', function ($task) {
        return view('pages.tasks.detail');
    })->name('detail');

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

Route::prefix('team')->name('team.')->group(function () {

    Route::get('/', function () {
        return view('pages.team.index');
    })->name('index');

    Route::get('/{member}', function ($member) {
        return view('pages.team.member');
    })->name('member');

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

Route::prefix('reports')->name('reports.')->group(function () {

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

Route::prefix('settings')->name('settings.')->group(function () {

    // General settings
    Route::get('/', function () {
        return view('pages.settings.index');
    })->name('index');

    // Profile
    Route::get('/profile', function () {
        return view('pages.settings.profile');
    })->name('profile');

    // Roles & Permissions
    Route::get('/roles-permissions', function () {
        return view('pages.settings.roles-permissions');
    })->name('roles-permissions');

    // Workspace Settings
    Route::get('/workspace', function () {
        return view('pages.settings.workspace');
    })->name('workspace');

    // Integrations
    Route::get('/integrations', function () {
        return view('pages.settings.integrations');
    })->name('integrations');

    // API / Developer
    Route::get('/api', function () {
        return view('pages.settings.api');
    })->name('api');

});


/*
|--------------------------------------------------------------------------
| Billing
|--------------------------------------------------------------------------
*/

Route::prefix('billing')->name('billing.')->group(function () {

    Route::get('/', function () {
        return view('pages.billing.index');
    })->name('index');

    Route::get('/subscription', function () {
        return view('pages.billing.subscription');
    })->name('subscription');

    Route::get('/checkout', function () {
        return view('pages.billing.checkout');
    })->name('checkout');

    Route::get('/success', function () {
        return view('pages.billing.success');
    })->name('success');

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
| Pricing
|--------------------------------------------------------------------------
*/

Route::get('/logout', function () {
    return view('pages.dashboard.index');
})->name('logout');
