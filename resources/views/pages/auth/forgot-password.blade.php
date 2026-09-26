@extends('layout.auth')

@section('title', 'Forgot Password')

@section('content')

    <div class="wm-forgot-password-page">

        <div class="wm-forgot-password-page__container">


            {{-- =====================================================
                Brand / Introduction
            ====================================================== --}}

            <section class="wm-forgot-password-page__brand">

                <div class="wm-forgot-password-page__brand-inner">


                    {{-- =================================================
                        Logo
                    ================================================== --}}

                    <a
                        href="{{ route('home') }}"
                        class="wm-forgot-password-page__logo"
                    >

                        <span class="wm-forgot-password-page__logo-mark">

                            <i class="ph ph-kanban"></i>

                        </span>

                        <span class="wm-forgot-password-page__logo-text">
                            WorkManagement
                        </span>

                    </a>


                    {{-- =================================================
                        Brand Content
                    ================================================== --}}

                    <div class="wm-forgot-password-page__brand-content">


                        {{-- Eyebrow --}}

                        <span class="wm-forgot-password-page__brand-eyebrow">

                            <i class="ph ph-shield-check"></i>

                            Secure account recovery

                        </span>


                        {{-- Title --}}

                        <h1 class="wm-forgot-password-page__brand-title">

                            Get back to your

                            <span>
                                workspace.
                            </span>

                        </h1>


                        {{-- Description --}}

                        <p class="wm-forgot-password-page__brand-description">

                            Don't worry if you've forgotten your password.
                            We'll help you securely regain access to your
                            WorkManagement workspace.

                        </p>


                        {{-- =================================================
                            Features
                        ================================================== --}}

                        <div class="wm-forgot-password-page__features">


                            <div class="wm-forgot-password-page__feature">

                                <span class="wm-forgot-password-page__feature-icon">

                                    <i class="ph ph-check-circle"></i>

                                </span>

                                <span>
                                    Secure password recovery
                                </span>

                            </div>


                            <div class="wm-forgot-password-page__feature">

                                <span class="wm-forgot-password-page__feature-icon">

                                    <i class="ph ph-check-circle"></i>

                                </span>

                                <span>
                                    Reset link sent directly to your email
                                </span>

                            </div>


                            <div class="wm-forgot-password-page__feature">

                                <span class="wm-forgot-password-page__feature-icon">

                                    <i class="ph ph-check-circle"></i>

                                </span>

                                <span>
                                    Your account remains protected throughout
                                </span>

                            </div>


                        </div>

                    </div>


                    {{-- =================================================
                        Security Card
                    ================================================== --}}

                    <div class="wm-forgot-password-page__security-card">


                        <div class="wm-forgot-password-page__security-card-icon">

                            <i class="ph ph-lock-key-open"></i>

                        </div>


                        <div class="wm-forgot-password-page__security-card-content">

                            <strong>
                                Your account is protected
                            </strong>

                            <span>
                                Reset links are time-limited and can only
                                be used once.
                            </span>

                        </div>


                    </div>


                </div>

            </section>


            {{-- =====================================================
                Form Panel
            ====================================================== --}}

            <section class="wm-forgot-password-page__panel">

                <div class="wm-forgot-password-page__form-wrapper">


                    {{-- =================================================
                        Mobile Logo
                    ================================================== --}}

                    <a
                        href="{{ route('home') }}"
                        class="wm-forgot-password-page__mobile-logo"
                    >

                        <span class="wm-forgot-password-page__logo-mark">

                            <i class="ph ph-kanban"></i>

                        </span>

                        <span class="wm-forgot-password-page__logo-text">
                            WorkManagement
                        </span>

                    </a>


                    {{-- =================================================
                        Recovery Icon
                    ================================================== --}}

                    <div class="wm-forgot-password-page__recovery-icon">

                        <i class="ph ph-envelope-simple"></i>

                    </div>


                    {{-- =================================================
                        Form Header
                    ================================================== --}}

                    <div class="wm-forgot-password-page__form-header">

                        <h2 class="wm-forgot-password-page__form-title">

                            Forgot your password?

                        </h2>


                        <p class="wm-forgot-password-page__form-description">

                            Enter the email address associated with your
                            account and we'll send you a secure reset link.

                        </p>

                    </div>


                    {{-- =================================================
                        Session Status
                    ================================================== --}}

                    @if (session('status'))

                        <div class="wm-forgot-password-page__alert wm-forgot-password-page__alert--success">

                            <i class="ph ph-check-circle"></i>

                            <div>

                                <strong>
                                    Check your inbox
                                </strong>

                                <span>
                                    {{ session('status') }}
                                </span>

                            </div>


                            <button
                                type="button"
                                class="wm-forgot-password-page__alert-close"
                                data-alert-close
                                aria-label="Close"
                            >

                                <i class="ph ph-x"></i>

                            </button>

                        </div>

                    @endif


                    {{-- =================================================
                        Validation Errors
                    ================================================== --}}

                    @if ($errors->any())

                        <div class="wm-forgot-password-page__alert wm-forgot-password-page__alert--danger">

                            <i class="ph ph-warning-circle"></i>


                            <div>

                                <strong>
                                    Please check your email.
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
                                class="wm-forgot-password-page__alert-close"
                                data-alert-close
                                aria-label="Close"
                            >

                                <i class="ph ph-x"></i>

                            </button>

                        </div>

                    @endif


                    {{-- =================================================
                        Forgot Password Form
                    ================================================== --}}

                    <form
                        method="POST"
                        action="{{ route('password.email') }}"
                        class="wm-forgot-password-page__form"
                        id="wm-forgot-password-form"
                        novalidate
                    >

                        @csrf


                        {{-- =================================================
                            Email
                        ================================================== --}}

                        <div class="wm-forgot-password-page__field">

                            <label
                                for="email"
                                class="wm-forgot-password-page__label"
                            >
                                Email address
                            </label>


                            <div class="wm-forgot-password-page__input-wrapper">

                                <i class="ph ph-envelope wm-forgot-password-page__input-icon"></i>


                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="wm-forgot-password-page__input"
                                    placeholder="you@example.com"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    required
                                    autofocus
                                >

                            </div>


                            <span
                                class="wm-forgot-password-page__field-error"
                                data-error-for="email"
                            ></span>

                        </div>


                        {{-- =================================================
                            Submit
                        ================================================== --}}

                        <button
                            type="submit"
                            class="wm-forgot-password-page__submit"
                            id="wm-forgot-password-submit"
                        >

                            <span class="wm-forgot-password-page__submit-content">

                                <span>
                                    Send reset link
                                </span>

                                <i class="ph ph-paper-plane-tilt"></i>

                            </span>


                            <span class="wm-forgot-password-page__submit-loading">

                                <span class="wm-forgot-password-page__spinner"></span>

                                Sending link...

                            </span>

                        </button>


                        {{-- =================================================
                            Back To Login
                        ================================================== --}}

                        <div class="wm-forgot-password-page__back-login">

                            <a href="{{ route('login') }}">

                                <i class="ph ph-arrow-left"></i>

                                <span>
                                    Back to sign in
                                </span>

                            </a>

                        </div>


                    </form>


                    {{-- =================================================
                        Recovery Help
                    ================================================== --}}

                    <div class="wm-forgot-password-page__recovery-help">

                        <div class="wm-forgot-password-page__recovery-help-icon">

                            <i class="ph ph-info"></i>

                        </div>


                        <div class="wm-forgot-password-page__recovery-help-content">

                            <strong>
                                Didn't receive the email?
                            </strong>

                            <span>
                                Check your spam folder or make sure you
                                entered the correct email address.
                            </span>

                        </div>

                    </div>


                    {{-- =================================================
                        Footer
                    ================================================== --}}

                    <div class="wm-forgot-password-page__footer">

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


            // =============================================================
            // Configuration
            // =============================================================

            const $form = $('#wm-forgot-password-form');
            const $email = $('#email');
            const $submit = $('#wm-forgot-password-submit');

            let resetLinkSent = false;


            // =============================================================
            // Forgot Password Form
            // =============================================================

            $form.on('submit', function (event) {

                event.preventDefault();

                if ($submit.hasClass('is-loading')) {
                    return;
                }

                clearValidation();

                const email = $.trim(
                    $email.val()
                );


                // ---------------------------------------------------------
                // Client Validation
                // ---------------------------------------------------------

                if (!email) {

                    showError(
                        $email,
                        'Email address is required.'
                    );

                    return;
                }


                if (!isValidEmail(email)) {

                    showError(
                        $email,
                        'Please enter a valid email address.'
                    );

                    return;
                }


                // ---------------------------------------------------------
                // Submit
                // ---------------------------------------------------------

                sendResetLink();

            });


            // =============================================================
            // Send Reset Link
            // =============================================================

            function sendResetLink() {

                setLoading(true);

                $.ajax({

                    url: $form.attr('action'),

                    method: 'POST',

                    data: $form.serialize(),

                    dataType: 'json',

                    headers: {
                        'Accept': 'application/json'
                    },

                    success: function (response) {

                        if (!response.success) {

                            showServerError(
                                response.message ||
                                'Unable to send the reset link.'
                            );

                            return;
                        }


                        resetLinkSent = true;

                        showSuccessState();

                    },

                    error: function (xhr) {

                        handleServerError(xhr);

                    },

                    complete: function () {

                        setLoading(false);

                    }

                });

            }


            // =============================================================
            // Handle Server Error
            // =============================================================

            function handleServerError(xhr) {

                const response =
                    xhr.responseJSON || {};


                // ---------------------------------------------------------
                // Validation
                // ---------------------------------------------------------

                if (
                    xhr.status === 422 &&
                    response.errors
                ) {

                    $.each(
                        response.errors,
                        function (field, messages) {

                            const $input =
                                $('#' + field);

                            if ($input.length) {

                                showError(
                                    $input,
                                    messages[0]
                                );

                            }

                        }
                    );

                    return;
                }


                // ---------------------------------------------------------
                // Too Many Requests
                // ---------------------------------------------------------

                if (xhr.status === 429) {

                    showAlert(
                        'danger',
                        'Too many requests. Please wait a moment and try again.'
                    );

                    return;
                }


                // ---------------------------------------------------------
                // CSRF / Session Expired
                // ---------------------------------------------------------

                if (xhr.status === 419) {

                    showAlert(
                        'danger',
                        'Your session has expired. Please refresh the page and try again.'
                    );

                    return;
                }


                // ---------------------------------------------------------
                // Unauthorized
                // ---------------------------------------------------------

                if (xhr.status === 401) {

                    showAlert(
                        'danger',
                        'Your session is no longer valid. Please refresh the page and try again.'
                    );

                    return;
                }


                // ---------------------------------------------------------
                // General Error
                // ---------------------------------------------------------

                showAlert(
                    'danger',
                    response.message ||
                    'Something went wrong. Please try again.'
                );

            }


            // =============================================================
            // Show Success State
            // =============================================================

            function showSuccessState() {

                if (
                    $('.wm-forgot-password-page__success').length
                ) {
                    return;
                }


                const email =
                    $.trim(
                        $email.val()
                    );


                const safeEmail =
                    escapeHtml(email);


                const successHtml = `

                <div class="wm-forgot-password-page__success">

                    <div class="wm-forgot-password-page__success-icon">

                        <i class="ph ph-check"></i>

                    </div>


                    <h3>
                        Check your inbox
                    </h3>


                    <p>

                        We've sent a password reset link to

                        <strong>
                            ${safeEmail}
                        </strong>.

                        Please check your email and follow the
                        instructions to reset your password.

                    </p>


                    <button
                        type="button"
                        class="wm-forgot-password-page__resend"
                        id="wm-resend-reset-link"
                    >

                        <i class="ph ph-arrow-clockwise"></i>

                        <span>
                            Send again
                        </span>

                    </button>

                </div>

            `;


                $form
                    .stop(true, true)
                    .fadeOut(180, function () {

                        $(this)
                            .after(successHtml);

                    });


                $('.wm-forgot-password-page__recovery-help')
                    .stop(true, true)
                    .fadeOut(180);

            }


            // =============================================================
            // Resend Reset Link
            // =============================================================

            $(document).on(
                'click',
                '#wm-resend-reset-link',
                function () {

                    const $button = $(this);

                    if ($button.hasClass('is-loading')) {
                        return;
                    }


                    // -----------------------------------------------------
                    // Restore Form
                    // -----------------------------------------------------

                    $('.wm-forgot-password-page__success')
                        .remove();


                    $form
                        .stop(true, true)
                        .fadeIn(180);


                    $('.wm-forgot-password-page__recovery-help')
                        .stop(true, true)
                        .fadeIn(180);


                    // -----------------------------------------------------
                    // Submit Again
                    // -----------------------------------------------------

                    setTimeout(function () {

                        sendResetLink();

                    }, 200);

                }
            );


            // =============================================================
            // Email Validation
            // =============================================================

            function isValidEmail(email) {

                return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(
                    email
                );

            }


            // =============================================================
            // Show Field Error
            // =============================================================

            function showError(
                $input,
                message
            ) {

                const field =
                    $input.attr('id');


                $input.addClass(
                    'is-invalid'
                );


                $input
                    .closest(
                        '.wm-forgot-password-page__input-wrapper'
                    )
                    .addClass(
                        'is-invalid'
                    );


                $('[data-error-for="' + field + '"]')
                    .text(
                        message
                    );


                $input.trigger(
                    'focus'
                );

            }


            // =============================================================
            // Clear Validation
            // =============================================================

            function clearValidation() {

                $email.removeClass(
                    'is-invalid'
                );


                $email
                    .closest(
                        '.wm-forgot-password-page__input-wrapper'
                    )
                    .removeClass(
                        'is-invalid'
                    );


                $('[data-error-for="email"]')
                    .text('');

            }


            // =============================================================
            // Loading State
            // =============================================================

            function setLoading(loading) {

                $submit.prop(
                    'disabled',
                    loading
                );


                $submit.toggleClass(
                    'is-loading',
                    loading
                );

            }


            // =============================================================
            // Show Alert
            // =============================================================

            function showAlert(
                type,
                message
            ) {

                $('.wm-forgot-password-page__ajax-alert')
                    .remove();


                const icon =
                    type === 'success'
                        ? 'ph-check-circle'
                        : 'ph-warning-circle';


                const alertHtml = `

                <div
                    class="wm-forgot-password-page__alert
                    wm-forgot-password-page__alert--${type}
                    wm-forgot-password-page__ajax-alert"
                >

                    <i class="ph ${icon}"></i>

                    <div>

                        <strong>
                            ${type === 'success'
                    ? 'Success'
                    : 'Something went wrong'}
                        </strong>

                        <span>
                            ${escapeHtml(message)}
                        </span>

                    </div>


                    <button
                        type="button"
                        class="wm-forgot-password-page__alert-close"
                        data-alert-close
                        aria-label="Close"
                    >

                        <i class="ph ph-x"></i>

                    </button>

                </div>

            `;


                $('.wm-forgot-password-page__form-header')
                    .after(alertHtml);

            }


            // =============================================================
            // Escape HTML
            // =============================================================

            function escapeHtml(value) {

                return $('<div>')
                    .text(value)
                    .html();

            }


            // =============================================================
            // Alert Close
            // =============================================================

            $(document).on(
                'click',
                '[data-alert-close]',
                function () {

                    $(this)
                        .closest(
                            '.wm-forgot-password-page__alert'
                        )
                        .fadeOut(
                            180,
                            function () {

                                $(this).remove();

                            }
                        );

                }
            );


            // =============================================================
            // Input Focus
            // =============================================================

            $(document).on(
                'focus',
                '.wm-forgot-password-page__input',
                function () {

                    $(this)
                        .closest(
                            '.wm-forgot-password-page__input-wrapper'
                        )
                        .addClass(
                            'is-focused'
                        );

                }
            );


            $(document).on(
                'blur',
                '.wm-forgot-password-page__input',
                function () {

                    $(this)
                        .closest(
                            '.wm-forgot-password-page__input-wrapper'
                        )
                        .removeClass(
                            'is-focused'
                        );

                }
            );


            // =============================================================
            // Clear Error While Typing
            // =============================================================

            $(document).on(
                'input',
                '.wm-forgot-password-page__input',
                function () {

                    const $input =
                        $(this);

                    const field =
                        $input.attr('id');


                    $input.removeClass(
                        'is-invalid'
                    );


                    $input
                        .closest(
                            '.wm-forgot-password-page__input-wrapper'
                        )
                        .removeClass(
                            'is-invalid'
                        );


                    $('[data-error-for="' + field + '"]')
                        .text('');

                }
            );

        });

    </script>

@endpush
