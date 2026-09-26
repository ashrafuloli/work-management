@extends('layout.auth')

@section('title', 'Sign In')

@section('content')

    <div class="wm-auth-page wm-auth-page--login">

        <div class="wm-auth-container">

            {{-- =====================================================
                Brand / Introduction
            ====================================================== --}}

            <section class="wm-auth__brand">

                <div class="wm-auth__brand-inner">

                    {{-- Logo --}}

                    <a
                        href="{{ route('home') }}"
                        class="wm-auth__logo"
                    >

                        <span class="wm-auth__logo-mark">
                            <i class="ph ph-kanban"></i>
                        </span>

                        <span class="wm-auth__logo-text">
                            WorkManagement
                        </span>

                    </a>


                    {{-- Brand Content --}}

                    <div class="wm-auth__brand-content">

                        <span class="wm-auth__brand-eyebrow">

                            <i class="ph ph-sparkle"></i>

                            Work smarter, together

                        </span>


                        <h1 class="wm-auth__brand-title">

                            Everything your team needs to

                            <span>
                                get work done.
                            </span>

                        </h1>


                        <p class="wm-auth__brand-description">

                            Plan projects, manage tasks, collaborate with
                            your team, and keep your work moving forward —
                            all from one simple workspace.

                        </p>


                        {{-- Features --}}

                        <div class="wm-auth__features">

                            <div class="wm-auth__feature">

                                <span class="wm-auth__feature-icon">

                                    <i class="ph ph-check-circle"></i>

                                </span>

                                <span>
                                    Manage projects and tasks effortlessly
                                </span>

                            </div>


                            <div class="wm-auth__feature">

                                <span class="wm-auth__feature-icon">

                                    <i class="ph ph-check-circle"></i>

                                </span>

                                <span>
                                    Keep your entire team aligned
                                </span>

                            </div>


                            <div class="wm-auth__feature">

                                <span class="wm-auth__feature-icon">

                                    <i class="ph ph-check-circle"></i>

                                </span>

                                <span>
                                    Track progress and deadlines in one place
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- Testimonial --}}

                    <div class="wm-auth__testimonial">

                        <div class="wm-auth__testimonial-stars">

                            <i class="ph-fill ph-star"></i>
                            <i class="ph-fill ph-star"></i>
                            <i class="ph-fill ph-star"></i>
                            <i class="ph-fill ph-star"></i>
                            <i class="ph-fill ph-star"></i>

                        </div>


                        <blockquote>

                            “WorkManagement gives our team a much clearer
                            view of what needs to happen and who owns it.”

                        </blockquote>


                        <div class="wm-auth__testimonial-author">

                            <div class="wm-auth__testimonial-avatar">
                                SJ
                            </div>

                            <div>

                                <strong>
                                    Sarah Johnson
                                </strong>

                                <span>
                                    Project Manager
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =====================================================
                Login Panel
            ====================================================== --}}

            <section class="wm-auth__panel">

                <div class="wm-auth__form-wrapper">

                    {{-- Mobile Logo --}}

                    <a
                        href="{{ route('home') }}"
                        class="wm-auth__mobile-logo"
                    >

                        <span class="wm-auth__logo-mark">

                            <i class="ph ph-kanban"></i>

                        </span>

                        <span class="wm-auth__logo-text">
                            WorkManagement
                        </span>

                    </a>


                    {{-- Form Header --}}

                    <div class="wm-auth__form-header">

                        <h2 class="wm-auth__form-title">
                            Welcome back
                        </h2>

                        <p class="wm-auth__form-description">
                            Sign in to your workspace to continue.
                        </p>

                    </div>


                    {{-- =================================================
                        AJAX Alert
                    ================================================== --}}

                    <div
                        class="wm-auth__ajax-alert"
                        id="wm-login-alert"
                    ></div>


                    {{-- Status Message --}}

                    @if (session('status'))

                        <div class="wm-auth__alert wm-auth__alert--success">

                            <i class="ph ph-check-circle"></i>

                            <span>
                                {{ session('status') }}
                            </span>

                            <button
                                type="button"
                                class="wm-auth__alert-close"
                                data-alert-close
                                aria-label="Close"
                            >

                                <i class="ph ph-x"></i>

                            </button>

                        </div>

                    @endif


                    {{-- Server Error Message --}}

                    @if ($errors->any())

                        <div class="wm-auth__alert wm-auth__alert--danger">

                            <i class="ph ph-warning-circle"></i>

                            <div>

                                <strong>
                                    Please check your details.
                                </strong>

                                <ul>

                                    @foreach ($errors->all() as $error)

                                        <li>
                                            {{ $error }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                            <button
                                type="button"
                                class="wm-auth__alert-close"
                                data-alert-close
                                aria-label="Close"
                            >

                                <i class="ph ph-x"></i>

                            </button>

                        </div>

                    @endif


                    {{-- =================================================
                        Login Form
                    ================================================== --}}

                    <form
                        method="POST"
                        action="{{ route('login.store') }}"
                        class="wm-auth__form"
                        id="wm-login-form"
                        novalidate
                    >

                        @csrf


                        {{-- Email --}}

                        <div class="wm-auth__field">

                            <label
                                for="email"
                                class="wm-auth__label"
                            >
                                Email address
                            </label>


                            <div class="wm-auth__input-wrapper">

                                <i class="ph ph-envelope wm-auth__input-icon"></i>

                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="form-control wm-auth__input"
                                    placeholder="you@example.com"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    required
                                    autofocus
                                >

                            </div>


                            <span
                                class="wm-auth__field-error"
                                data-error-for="email"
                            ></span>

                        </div>


                        {{-- Password --}}

                        <div class="wm-auth__field">

                            <div class="wm-auth__label-row">

                                <label
                                    for="password"
                                    class="wm-auth__label"
                                >
                                    Password
                                </label>


                                <a
                                    href="{{ route('password.request') }}"
                                    class="wm-auth__forgot-link"
                                >
                                    Forgot password?
                                </a>

                            </div>


                            <div class="wm-auth__input-wrapper">

                                <i class="ph ph-lock-key wm-auth__input-icon"></i>

                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="form-control wm-auth__input wm-auth__input--password"
                                    placeholder="Enter your password"
                                    autocomplete="current-password"
                                    required
                                >


                                <button
                                    type="button"
                                    class="wm-auth__password-toggle"
                                    id="wm-password-toggle"
                                    aria-label="Show password"
                                    aria-pressed="false"
                                >

                                    <i
                                        class="ph ph-eye"
                                        id="wm-password-icon"
                                    ></i>

                                </button>

                            </div>


                            <span
                                class="wm-auth__field-error"
                                data-error-for="password"
                            ></span>

                        </div>


                        {{-- Remember Me --}}

                        <div class="wm-auth__form-options">

                            <label class="wm-auth__checkbox">

                                <input
                                    type="checkbox"
                                    name="remember"
                                    value="1"
                                >

                                <span class="wm-auth__checkbox-mark">

                                    <i class="ph ph-check"></i>

                                </span>

                                <span class="wm-auth__checkbox-label">
                                    Remember me
                                </span>

                            </label>

                        </div>


                        {{-- Submit --}}

                        <button
                            type="submit"
                            class="btn btn-primary wm-auth__submit"
                            id="wm-login-submit"
                        >

                            <span class="wm-auth__submit-content">

                                <span>
                                    Sign in
                                </span>

                                <i class="ph ph-arrow-right"></i>

                            </span>


                            <span class="wm-auth__submit-loading">

                                <span class="wm-auth__spinner"></span>

                                Signing in...

                            </span>

                        </button>


                        {{-- Divider --}}

                        <div class="wm-auth__divider">

                            <span>
                                Or continue with
                            </span>

                        </div>


                        {{-- Social Login --}}

                        <div class="wm-auth__socials">

                            {{-- Google --}}

                            <a
                                href="{{ route('google.redirect') }}"
                                class="wm-auth__social-button"
                                aria-label="Continue with Google"
                            >

                                <svg
                                    class="wm-auth__social-icon wm-auth__social-icon--google"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                >

                                    <path
                                        d="M21.35 12.27c0-.72-.06-1.42-.18-2.09H12v3.96h5.24a4.48 4.48 0 0 1-1.94 2.94v2.45h3.14c1.84-1.7 2.91-4.2 2.91-7.26Z"
                                    />

                                    <path
                                        d="M12 21.96c2.63 0 4.83-.87 6.44-2.37l-3.14-2.45c-.87.58-1.98.92-3.3.92-2.54 0-4.7-1.72-5.47-4.03H3.28v2.53A9.73 9.73 0 0 0 12 21.96Z"
                                    />

                                    <path
                                        d="M6.53 14.03a5.85 5.85 0 0 1 0-3.73V7.77H3.28a9.72 9.72 0 0 0 0 8.79l3.25-2.53Z"
                                    />

                                    <path
                                        d="M12 6.27c1.43 0 2.72.49 3.73 1.46l2.8-2.8C16.83 3.35 14.63 2.48 12 2.48a9.73 9.73 0 0 0-8.72 5.29l3.25 2.53C7.3 7.99 9.46 6.27 12 6.27Z"
                                    />

                                </svg>

                                <span>
            Continue with Google
        </span>

                            </a>


                            {{-- GitHub --}}

                            <a
                                href="{{ route('github.redirect') }}"
                                class="wm-auth__social-button"
                                aria-label="Continue with GitHub"
                            >

                                <i
                                    class="ph-fill ph-github-logo wm-auth__social-icon wm-auth__social-icon--github"
                                    aria-hidden="true"
                                ></i>

                                <span>
            Continue with GitHub
        </span>

                            </a>

                        </div>


                        {{-- Register --}}

                        <p class="wm-auth__register">

                            Don't have an account?

                            <a href="{{ route('register') }}">
                                Create an account
                            </a>

                        </p>

                    </form>


                    {{-- Footer --}}

                    <div class="wm-auth__footer">

                        <span>
                            © {{ date('Y') }} WorkManagement
                        </span>


                        <div>

                            <a href="#">
                                Privacy
                            </a>

                            <a href="#">
                                Terms
                            </a>

                        </div>

                    </div>

                </div>

            </section>

        </div>

    </div>

@endsection


@push('script')

    <script>

        $(document).ready(function () {

            'use strict';


            // =========================================================
            // Password Visibility
            // =========================================================

            $('#wm-password-toggle').on(
                'click',
                function () {

                    const $button = $(this);

                    const $input = $('#password');

                    const $icon = $('#wm-password-icon');

                    const isPassword =
                        $input.attr('type') === 'password';


                    if (isPassword) {

                        $input.attr(
                            'type',
                            'text'
                        );

                        $icon
                            .removeClass('ph-eye')
                            .addClass('ph-eye-slash');

                        $button.attr(
                            'aria-label',
                            'Hide password'
                        );

                        $button.attr(
                            'aria-pressed',
                            'true'
                        );

                    } else {

                        $input.attr(
                            'type',
                            'password'
                        );

                        $icon
                            .removeClass('ph-eye-slash')
                            .addClass('ph-eye');

                        $button.attr(
                            'aria-label',
                            'Show password'
                        );

                        $button.attr(
                            'aria-pressed',
                            'false'
                        );

                    }

                }
            );


            // =========================================================
            // Clear Field Error
            // =========================================================

            $('.wm-auth__input').on(
                'input',
                function () {

                    const $input = $(this);

                    const field =
                        $input.attr('id');


                    $input.removeClass(
                        'is-invalid'
                    );


                    $input
                        .closest('.wm-auth__input-wrapper')
                        .removeClass('is-invalid');


                    $('[data-error-for="' + field + '"]')
                        .text('');

                }
            );


            // =========================================================
            // Login Submit
            // =========================================================

            $('#wm-login-form').on(
                'submit',
                function (event) {

                    event.preventDefault();


                    const $form = $(this);

                    const $email = $('#email');

                    const $password = $('#password');

                    let isValid = true;


                    /*
                    |--------------------------------------------------------------------------
                    | Clear Previous Errors
                    |--------------------------------------------------------------------------
                    */

                    clearValidationErrors();

                    clearAjaxAlert();


                    /*
                    |--------------------------------------------------------------------------
                    | Client-side Validation
                    |--------------------------------------------------------------------------
                    */

                    const email =
                        $.trim($email.val());


                    const password =
                        $password.val();


                    if (!email) {

                        showFieldError(
                            $email,
                            'Email address is required.'
                        );

                        isValid = false;

                    } else if (!isValidEmail(email)) {

                        showFieldError(
                            $email,
                            'Please enter a valid email address.'
                        );

                        isValid = false;

                    }


                    if (!password) {

                        showFieldError(
                            $password,
                            'Password is required.'
                        );

                        isValid = false;

                    }


                    if (!isValid) {
                        return;
                    }


                    /*
                    |--------------------------------------------------------------------------
                    | Start Loading
                    |--------------------------------------------------------------------------
                    */

                    setLoading(true);


                    /*
                    |--------------------------------------------------------------------------
                    | AJAX Login
                    |--------------------------------------------------------------------------
                    */

                    $.ajax({

                        url: $form.attr('action'),

                        method: 'POST',

                        data: $form.serialize(),

                        dataType: 'json',

                        headers: {
                            'Accept': 'application/json'
                        },


                        success: function (response) {

                            /*
                            |--------------------------------------------------------------------------
                            | Login Success
                            |--------------------------------------------------------------------------
                            */

                            if (
                                response.success &&
                                response.data &&
                                response.data.redirect
                            ) {

                                showSuccess(
                                    response.message ||
                                    'Login successful.'
                                );


                                /*
                                |--------------------------------------------------------------------------
                                | Redirect
                                |--------------------------------------------------------------------------
                                */

                                setTimeout(
                                    function () {

                                        window.location.href =
                                            response.data.redirect;

                                    },
                                    350
                                );


                                return;
                            }


                            /*
                            |--------------------------------------------------------------------------
                            | Unexpected Success Response
                            |--------------------------------------------------------------------------
                            */

                            setLoading(false);


                            showError(
                                response.message ||
                                'Unable to sign in.'
                            );

                        },


                        error: function (xhr) {

                            setLoading(false);


                            /*
                            |--------------------------------------------------------------------------
                            | Validation Error - 422
                            |--------------------------------------------------------------------------
                            */

                            if (xhr.status === 422) {

                                const response =
                                    xhr.responseJSON || {};


                                if (response.errors) {

                                    showValidationErrors(
                                        response.errors
                                    );

                                }


                                showError(
                                    response.message ||
                                    'Please check your login details.'
                                );


                                return;
                            }


                            /*
                            |--------------------------------------------------------------------------
                            | Unauthorized - 401
                            |--------------------------------------------------------------------------
                            */

                            if (xhr.status === 401) {

                                showError(
                                    'The email or password is incorrect.'
                                );

                                return;
                            }


                            /*
                            |--------------------------------------------------------------------------
                            | CSRF - 419
                            |--------------------------------------------------------------------------
                            */

                            if (xhr.status === 419) {

                                showError(
                                    'Your session has expired. Please refresh the page and try again.'
                                );

                                return;
                            }


                            /*
                            |--------------------------------------------------------------------------
                            | Too Many Requests - 429
                            |--------------------------------------------------------------------------
                            */

                            if (xhr.status === 429) {

                                showError(
                                    'Too many login attempts. Please wait a moment and try again.'
                                );

                                return;
                            }


                            /*
                            |--------------------------------------------------------------------------
                            | Server Error
                            |--------------------------------------------------------------------------
                            */

                            const response =
                                xhr.responseJSON || {};


                            showError(
                                response.message ||
                                'Something went wrong. Please try again.'
                            );

                        }

                    });

                }
            );


            // =========================================================
            // Email Validation
            // =========================================================

            function isValidEmail(email) {

                return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(
                    email
                );

            }


            // =========================================================
            // Show Field Error
            // =========================================================

            function showFieldError(
                $input,
                message
            ) {

                const field =
                    $input.attr('id');


                $input.addClass(
                    'is-invalid'
                );


                $input
                    .closest('.wm-auth__input-wrapper')
                    .addClass('is-invalid');


                $('[data-error-for="' + field + '"]')
                    .text(message);

            }


            // =========================================================
            // Show Laravel Validation Errors
            // =========================================================

            function showValidationErrors(
                errors
            ) {

                $.each(
                    errors,
                    function (
                        field,
                        messages
                    ) {

                        const $input =
                            $('[name="' + field + '"]');


                        if (!$input.length) {
                            return;
                        }


                        showFieldError(
                            $input,
                            messages[0] || 'Invalid value.'
                        );

                    }
                );

            }


            // =========================================================
            // Clear Validation Errors
            // =========================================================

            function clearValidationErrors() {

                $('.wm-auth__input')
                    .removeClass('is-invalid');


                $('.wm-auth__input-wrapper')
                    .removeClass('is-invalid');


                $('.wm-auth__field-error')
                    .text('');

            }


            // =========================================================
            // Success Alert
            // =========================================================

            function showSuccess(message) {

                const html = `

                <div class="wm-auth__alert wm-auth__alert--success">

                    <i class="ph ph-check-circle"></i>

                    <span>
                        ${escapeHtml(message)}
                    </span>

                    <button
                        type="button"
                        class="wm-auth__alert-close"
                        data-alert-close
                        aria-label="Close"
                    >

                        <i class="ph ph-x"></i>

                    </button>

                </div>

            `;


                $('#wm-login-alert')
                    .html(html);

            }


            // =========================================================
            // Error Alert
            // =========================================================

            function showError(message) {

                const html = `

                <div class="wm-auth__alert wm-auth__alert--danger">

                    <i class="ph ph-warning-circle"></i>

                    <span>
                        ${escapeHtml(message)}
                    </span>

                    <button
                        type="button"
                        class="wm-auth__alert-close"
                        data-alert-close
                        aria-label="Close"
                    >

                        <i class="ph ph-x"></i>

                    </button>

                </div>

            `;


                $('#wm-login-alert')
                    .html(html);

            }


            // =========================================================
            // Clear AJAX Alert
            // =========================================================

            function clearAjaxAlert() {

                $('#wm-login-alert')
                    .empty();

            }


            // =========================================================
            // Loading State
            // =========================================================

            function setLoading(loading) {

                const $button =
                    $('#wm-login-submit');


                $button.prop(
                    'disabled',
                    loading
                );


                $button.toggleClass(
                    'is-loading',
                    loading
                );

            }


            // =========================================================
            // Alert Close
            // =========================================================

            $(document).on(
                'click',
                '[data-alert-close]',
                function () {

                    $(this)
                        .closest('.wm-auth__alert')
                        .fadeOut(
                            180,
                            function () {

                                $(this).remove();

                            }
                        );

                }
            );


            // =========================================================
            // Input Focus
            // =========================================================

            $('.wm-auth__input').on(
                'focus',
                function () {

                    $(this)
                        .closest('.wm-auth__input-wrapper')
                        .addClass('is-focused');

                }
            );


            $('.wm-auth__input').on(
                'blur',
                function () {

                    $(this)
                        .closest('.wm-auth__input-wrapper')
                        .removeClass('is-focused');

                }
            );


            // =========================================================
            // Escape HTML
            // =========================================================

            function escapeHtml(value) {

                return $('<div>')
                    .text(value ?? '')
                    .html();

            }

        });

    </script>

@endpush
