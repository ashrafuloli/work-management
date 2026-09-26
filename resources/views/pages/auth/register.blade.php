@extends('layout.auth')

@section('title', 'Create Account')

@section('content')

    <div class="wm-auth-page wm-auth-page--register">

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
                            Built for productive teams
                        </span>

                        <h1 class="wm-auth__brand-title">
                            Bring your team's
                            <span>work together.</span>
                        </h1>

                        <p class="wm-auth__brand-description">
                            Create a workspace where projects,
                            tasks, conversations, and progress
                            stay organized and connected.
                        </p>

                        {{-- Benefits --}}

                        <div class="wm-auth__features">

                            <div class="wm-auth__feature">
                                <span class="wm-auth__feature-icon">
                                    <i class="ph ph-check-circle"></i>
                                </span>

                                <span>
                                    Organize projects in one workspace
                                </span>
                            </div>

                            <div class="wm-auth__feature">
                                <span class="wm-auth__feature-icon">
                                    <i class="ph ph-check-circle"></i>
                                </span>

                                <span>
                                    Collaborate with your entire team
                                </span>
                            </div>

                            <div class="wm-auth__feature">
                                <span class="wm-auth__feature-icon">
                                    <i class="ph ph-check-circle"></i>
                                </span>

                                <span>
                                    Track work from planning to completion
                                </span>
                            </div>

                            <div class="wm-auth__feature">
                                <span class="wm-auth__feature-icon">
                                    <i class="ph ph-check-circle"></i>
                                </span>

                                <span>
                                    Stay on top of deadlines and progress
                                </span>
                            </div>

                        </div>

                    </div>

                    {{-- Workspace Preview --}}

                    <div class="wm-auth__workspace-preview">

                        <div class="wm-auth__workspace-header">

                            <div>
                                <span class="wm-auth__workspace-label">
                                    Workspace overview
                                </span>

                                <strong>
                                    Research Team
                                </strong>
                            </div>

                            <span class="wm-auth__workspace-status">
                                <i class="ph ph-circle"></i>
                                Active
                            </span>

                        </div>

                        <div class="wm-auth__workspace-stats">

                            <div class="wm-auth__workspace-stat">
                                <strong>24</strong>
                                <span>Projects</span>
                            </div>

                            <div class="wm-auth__workspace-stat">
                                <strong>86</strong>
                                <span>Tasks</span>
                            </div>

                            <div class="wm-auth__workspace-stat">
                                <strong>12</strong>
                                <span>Members</span>
                            </div>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =====================================================
                Register Panel
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
                            Create your account
                        </h2>

                        <p class="wm-auth__form-description">
                            Get started with your workspace in minutes.
                        </p>

                    </div>


                    {{-- AJAX Global Alert --}}

                    <div
                        class="wm-auth__alert wm-auth__alert--success d-none"
                        id="wm-register-success"
                    >
                        <i class="ph ph-check-circle"></i>

                        <span data-alert-message></span>

                        <button
                            type="button"
                            class="wm-auth__alert-close"
                            data-alert-close
                            aria-label="Close"
                        >
                            <i class="ph ph-x"></i>
                        </button>
                    </div>


                    <div
                        class="wm-auth__alert wm-auth__alert--danger d-none"
                        id="wm-register-error"
                    >
                        <i class="ph ph-warning-circle"></i>

                        <div>
                            <strong>
                                Please check your details.
                            </strong>

                            <ul data-alert-errors></ul>
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


                    {{-- =================================================
                        Register Form
                    ================================================== --}}

                    <form
                        method="POST"
                        action="{{ route('register.store') }}"
                        class="wm-auth__form"
                        id="wm-register-form"
                        novalidate
                    >

                        @csrf


                        {{-- =================================================
                            Name
                        ================================================== --}}

                        <div class="row">

                            {{-- First Name --}}

                            <div class="col-md-6">

                                <div class="wm-auth__field">

                                    <label
                                        for="first_name"
                                        class="wm-auth__label"
                                    >
                                        First name
                                    </label>

                                    <div class="wm-auth__input-wrapper">

                                        <i class="ph ph-user wm-auth__input-icon"></i>

                                        <input
                                            type="text"
                                            name="first_name"
                                            id="first_name"
                                            class="form-control wm-auth__input"
                                            placeholder="Alex"
                                            value="{{ old('first_name') }}"
                                            autocomplete="given-name"
                                            required
                                            autofocus
                                        >

                                    </div>

                                    <span
                                        class="wm-auth__field-error"
                                        data-error-for="first_name"
                                    ></span>

                                </div>

                            </div>


                            {{-- Last Name --}}

                            <div class="col-md-6">

                                <div class="wm-auth__field">

                                    <label
                                        for="last_name"
                                        class="wm-auth__label"
                                    >
                                        Last name
                                    </label>

                                    <div class="wm-auth__input-wrapper">

                                        <i class="ph ph-user wm-auth__input-icon"></i>

                                        <input
                                            type="text"
                                            name="last_name"
                                            id="last_name"
                                            class="form-control wm-auth__input"
                                            placeholder="Morgan"
                                            value="{{ old('last_name') }}"
                                            autocomplete="family-name"
                                        >

                                    </div>

                                    <span
                                        class="wm-auth__field-error"
                                        data-error-for="last_name"
                                    ></span>

                                </div>

                            </div>

                        </div>


                        {{-- =================================================
                            Email
                        ================================================== --}}

                        <div class="wm-auth__field">

                            <label
                                for="email"
                                class="wm-auth__label"
                            >
                                Work email
                            </label>

                            <div class="wm-auth__input-wrapper">

                                <i class="ph ph-envelope wm-auth__input-icon"></i>

                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="form-control wm-auth__input"
                                    placeholder="you@company.com"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    required
                                >

                            </div>

                            <span
                                class="wm-auth__field-error"
                                data-error-for="email"
                            ></span>

                        </div>


                        {{-- =================================================
                            Password
                        ================================================== --}}

                        <div class="wm-auth__field">

                            <label
                                for="password"
                                class="wm-auth__label"
                            >
                                Password
                            </label>

                            <div class="wm-auth__input-wrapper">

                                <i class="ph ph-lock-key wm-auth__input-icon"></i>

                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="form-control wm-auth__input"
                                    placeholder="Create a strong password"
                                    autocomplete="new-password"
                                    required
                                >

                                <button
                                    type="button"
                                    class="wm-auth__password-toggle"
                                    data-password-toggle="password"
                                    aria-label="Show password"
                                    aria-pressed="false"
                                >
                                    <i class="ph ph-eye"></i>
                                </button>

                            </div>


                            {{-- Password Strength --}}

                            <div
                                class="wm-auth__password-strength"
                                id="wm-password-strength"
                            >

                                <div class="wm-auth__password-strength-bars">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                                <span
                                    class="wm-auth__password-strength-text"
                                    id="wm-password-strength-text"
                                >
                                    Use 8 or more characters
                                </span>

                            </div>

                            <span
                                class="wm-auth__field-error"
                                data-error-for="password"
                            ></span>

                        </div>


                        {{-- =================================================
                            Confirm Password
                        ================================================== --}}

                        <div class="wm-auth__field">

                            <label
                                for="password_confirmation"
                                class="wm-auth__label"
                            >
                                Confirm password
                            </label>

                            <div class="wm-auth__input-wrapper">

                                <i class="ph ph-lock-key-open wm-auth__input-icon"></i>

                                <input
                                    type="password"
                                    name="password_confirmation"
                                    id="password_confirmation"
                                    class="form-control wm-auth__input"
                                    placeholder="Confirm your password"
                                    autocomplete="new-password"
                                    required
                                >

                                <button
                                    type="button"
                                    class="wm-auth__password-toggle"
                                    data-password-toggle="password_confirmation"
                                    aria-label="Show password"
                                    aria-pressed="false"
                                >
                                    <i class="ph ph-eye"></i>
                                </button>

                            </div>

                            <span
                                class="wm-auth__field-error"
                                data-error-for="password_confirmation"
                            ></span>

                        </div>


                        {{-- =================================================
                            Terms
                        ================================================== --}}

                        <div class="wm-auth__form-options wm-auth__form-options--terms">

                            <label class="wm-auth__checkbox">

                                <input
                                    type="checkbox"
                                    name="terms"
                                    id="terms"
                                    value="1"
                                    required
                                >

                                <span class="wm-auth__checkbox-mark">
                                    <i class="ph ph-check"></i>
                                </span>

                                <span class="wm-auth__checkbox-label">

                                    I agree to the

                                    <a href="#">
                                        Terms of Service
                                    </a>

                                    and

                                    <a href="#">
                                        Privacy Policy
                                    </a>

                                </span>

                            </label>

                            <span
                                class="wm-auth__field-error"
                                data-error-for="terms"
                            ></span>

                        </div>


                        {{-- =================================================
                            Submit
                        ================================================== --}}

                        <button
                            type="submit"
                            class="btn btn-primary wm-auth__submit"
                            id="wm-register-submit"
                        >

                            <span class="wm-auth__submit-content">
                                <span>
                                    Create account
                                </span>

                                <i class="ph ph-arrow-right"></i>
                            </span>

                            <span class="wm-auth__submit-loading">
                                <span class="wm-auth__spinner"></span>
                                Creating account...
                            </span>

                        </button>


                        {{-- =================================================
                            Divider
                        ================================================== --}}

                        <div class="wm-auth__divider">
                            <span>
                                Or sign up with
                            </span>
                        </div>


                        {{-- =================================================
                            Social Registration
                        ================================================== --}}

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


                        {{-- =================================================
                            Login
                        ================================================== --}}

                        <p class="wm-auth__register">

                            Already have an account?

                            <a href="{{ route('login') }}">
                                Sign in
                            </a>

                        </p>

                    </form>


                    {{-- Footer --}}

                    <div class="wm-auth__footer">

                        <span>
                            © {{ date('Y') }} WorkManagement
                        </span>

                        <div>
                            <a href="#">Privacy</a>
                            <a href="#">Terms</a>
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


            /*
            |--------------------------------------------------------------------------
            | Password Visibility
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'click',
                '[data-password-toggle]',
                function () {

                    const $button = $(this);

                    const targetId = $button.attr(
                        'data-password-toggle'
                    );

                    const $input = $('#' + targetId);
                    const $icon = $button.find('i');

                    const isPassword =
                        $input.attr('type') === 'password';


                    if (isPassword) {

                        $input.attr('type', 'text');

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

                        $input.attr('type', 'password');

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


            /*
            |--------------------------------------------------------------------------
            | Clear Field Error
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'input change',
                '.wm-auth__input, #terms',
                function () {

                    const $input = $(this);

                    const field = $input.attr('id');


                    $input.removeClass('is-invalid');

                    $input
                        .closest('.wm-auth__input-wrapper')
                        .removeClass('is-invalid');

                    $('[data-error-for="' + field + '"]')
                        .text('');

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Password Strength
            |--------------------------------------------------------------------------
            */

            $('#password').on(
                'input',
                function () {

                    updatePasswordStrength(
                        $(this).val()
                    );

                }
            );


            function updatePasswordStrength(password) {

                const $strength =
                    $('#wm-password-strength');

                const $bars =
                    $strength.find(
                        '.wm-auth__password-strength-bars span'
                    );

                const $text =
                    $('#wm-password-strength-text');


                $bars.removeClass(
                    'is-active is-strong is-medium is-weak'
                );


                if (!password.length) {

                    $text.text(
                        'Use 8 or more characters'
                    );

                    return;
                }


                let score = 0;


                if (password.length >= 8) {
                    score++;
                }

                if (password.length >= 12) {
                    score++;
                }

                if (/[A-Z]/.test(password)) {
                    score++;
                }

                if (/[0-9]/.test(password)) {
                    score++;
                }

                if (/[^A-Za-z0-9]/.test(password)) {
                    score++;
                }


                let level = 'weak';


                if (score >= 4) {

                    level = 'strong';

                    $text.text(
                        'Strong password'
                    );

                } else if (score >= 2) {

                    level = 'medium';

                    $text.text(
                        'Good password — add more complexity'
                    );

                } else {

                    $text.text(
                        'Weak password — add more characters'
                    );
                }


                $bars.each(
                    function (index) {

                        if (index < Math.min(score, 4)) {

                            $(this)
                                .addClass('is-active')
                                .addClass('is-' + level);
                        }
                    }
                );
            }


            /*
            |--------------------------------------------------------------------------
            | Register Form
            |--------------------------------------------------------------------------
            */

            $('#wm-register-form').on(
                'submit',
                function (event) {

                    event.preventDefault();


                    const $form = $(this);

                    const $firstName =
                        $('#first_name');

                    const $lastName =
                        $('#last_name');

                    const $email =
                        $('#email');

                    const $password =
                        $('#password');

                    const $confirmation =
                        $('#password_confirmation');

                    const $terms =
                        $('#terms');


                    let isValid = true;


                    clearValidationErrors();

                    hideAlerts();


                    /*
                    |--------------------------------------------------------------------------
                    | Frontend Validation
                    |--------------------------------------------------------------------------
                    */

                    const firstName =
                        $.trim($firstName.val());

                    const lastName =
                        $.trim($lastName.val());

                    const email =
                        $.trim($email.val());

                    const password =
                        $password.val();

                    const confirmation =
                        $confirmation.val();


                    // First Name

                    if (!firstName) {

                        showError(
                            $firstName,
                            'First name is required.'
                        );

                        isValid = false;

                    } else if (firstName.length < 2) {

                        showError(
                            $firstName,
                            'First name must be at least 2 characters.'
                        );

                        isValid = false;
                    }


                    // Last Name

                    if (lastName && lastName.length > 100) {

                        showError(
                            $lastName,
                            'Last name is too long.'
                        );

                        isValid = false;
                    }


                    // Email

                    if (!email) {

                        showError(
                            $email,
                            'Email address is required.'
                        );

                        isValid = false;

                    } else if (!isValidEmail(email)) {

                        showError(
                            $email,
                            'Please enter a valid email address.'
                        );

                        isValid = false;
                    }


                    // Password

                    if (!password) {

                        showError(
                            $password,
                            'Password is required.'
                        );

                        isValid = false;

                    } else if (password.length < 8) {

                        showError(
                            $password,
                            'Password must be at least 8 characters.'
                        );

                        isValid = false;
                    }


                    // Confirmation

                    if (!confirmation) {

                        showError(
                            $confirmation,
                            'Please confirm your password.'
                        );

                        isValid = false;

                    } else if (password !== confirmation) {

                        showError(
                            $confirmation,
                            'Passwords do not match.'
                        );

                        isValid = false;
                    }


                    // Terms

                    if (!$terms.is(':checked')) {

                        $('[data-error-for="terms"]')
                            .text(
                                'You must agree to the Terms of Service.'
                            );

                        isValid = false;
                    }


                    if (!isValid) {

                        return;
                    }


                    /*
                    |--------------------------------------------------------------------------
                    | AJAX Registration
                    |--------------------------------------------------------------------------
                    */

                    setLoading(true);


                    $.ajax({

                        url: $form.attr('action'),

                        method: 'POST',

                        data: $form.serialize(),

                        dataType: 'json',

                        success: function (response) {

                            if (!response.success) {

                                showGlobalError(
                                    response.message ||
                                    'Something went wrong.'
                                );

                                return;
                            }


                            showGlobalSuccess(
                                response.message
                            );


                            /*
                             * Registration successful.
                             *
                             * Account has been created and
                             * verification email has been queued.
                             */

                            setTimeout(
                                function () {

                                    window.location.href =
                                        "{{ route('verification.notice') }}";

                                },
                                1000
                            );
                        },

                        error: function (xhr) {

                            const response =
                                xhr.responseJSON;


                            /*
                            |--------------------------------------------------------------------------
                            | Validation Error
                            |--------------------------------------------------------------------------
                            */

                            if (xhr.status === 422) {

                                if (
                                    response &&
                                    response.errors
                                ) {

                                    showValidationErrors(
                                        response.errors
                                    );

                                } else {

                                    showGlobalError(
                                        response?.message ||
                                        'Please check your details.'
                                    );
                                }

                                return;
                            }


                            /*
                            |--------------------------------------------------------------------------
                            | Other Errors
                            |--------------------------------------------------------------------------
                            */

                            showGlobalError(
                                response?.message ||
                                'Something went wrong. Please try again.'
                            );
                        },

                        complete: function () {

                            setLoading(false);
                        }

                    });

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Email Validation
            |--------------------------------------------------------------------------
            */

            function isValidEmail(email) {

                return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(
                    email
                );
            }


            /*
            |--------------------------------------------------------------------------
            | Show Field Error
            |--------------------------------------------------------------------------
            */

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
                    .closest('.wm-auth__input-wrapper')
                    .addClass(
                        'is-invalid'
                    );


                $('[data-error-for="' + field + '"]')
                    .text(message);
            }


            /*
            |--------------------------------------------------------------------------
            | Server Validation Errors
            |--------------------------------------------------------------------------
            */

            function showValidationErrors(errors) {

                $.each(
                    errors,
                    function (field, messages) {

                        const $input =
                            $('#' + field);


                        if ($input.length) {

                            showError(
                                $input,
                                messages[0]
                            );

                        } else if (field === 'terms') {

                            $('[data-error-for="terms"]')
                                .text(messages[0]);
                        }

                    }
                );


                showGlobalError(
                    'Please check your details.'
                );
            }


            /*
            |--------------------------------------------------------------------------
            | Clear Validation Errors
            |--------------------------------------------------------------------------
            */

            function clearValidationErrors() {

                $('.wm-auth__input')
                    .removeClass('is-invalid');

                $('.wm-auth__input-wrapper')
                    .removeClass('is-invalid');

                $('.wm-auth__field-error')
                    .text('');
            }


            /*
            |--------------------------------------------------------------------------
            | Loading
            |--------------------------------------------------------------------------
            */

            function setLoading(loading) {

                const $button =
                    $('#wm-register-submit');


                $button.prop(
                    'disabled',
                    loading
                );


                $button.toggleClass(
                    'is-loading',
                    loading
                );
            }


            /*
            |--------------------------------------------------------------------------
            | Global Success Alert
            |--------------------------------------------------------------------------
            */

            function showGlobalSuccess(message) {

                const $alert =
                    $('#wm-register-success');


                $alert
                    .find('[data-alert-message]')
                    .text(message);


                $alert.removeClass('d-none');
            }


            /*
            |--------------------------------------------------------------------------
            | Global Error Alert
            |--------------------------------------------------------------------------
            */

            function showGlobalError(message) {

                const $alert =
                    $('#wm-register-error');

                const $errors =
                    $alert.find('[data-alert-errors]');


                $errors.empty();


                if (message) {

                    $('<li>')
                        .text(message)
                        .appendTo($errors);
                }


                $alert.removeClass('d-none');
            }


            /*
            |--------------------------------------------------------------------------
            | Hide Alerts
            |--------------------------------------------------------------------------
            */

            function hideAlerts() {

                $('#wm-register-success')
                    .addClass('d-none');

                $('#wm-register-error')
                    .addClass('d-none');
            }


            /*
            |--------------------------------------------------------------------------
            | Alert Close
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'click',
                '[data-alert-close]',
                function () {

                    $(this)
                        .closest('.wm-auth__alert')
                        .addClass('d-none');

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Input Focus
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'focus',
                '.wm-auth__input',
                function () {

                    $(this)
                        .closest('.wm-auth__input-wrapper')
                        .addClass('is-focused');

                }
            );


            $(document).on(
                'blur',
                '.wm-auth__input',
                function () {

                    $(this)
                        .closest('.wm-auth__input-wrapper')
                        .removeClass('is-focused');

                }
            );

        });

    </script>

@endpush
