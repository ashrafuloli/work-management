@extends('layout.auth')

@section('title', 'Reset Password')

@section('content')

    <div class="wm-reset-password-page">

        <div class="wm-reset-password-page__container">

            {{-- =====================================================
                Brand / Introduction
            ====================================================== --}}

            <section class="wm-reset-password-page__brand">

                <div class="wm-reset-password-page__brand-inner">

                    {{-- Logo --}}

                    <a
                        href="{{ route('home') }}"
                        class="wm-reset-password-page__logo"
                    >
                        <span class="wm-reset-password-page__logo-mark">
                            <i class="ph ph-kanban"></i>
                        </span>

                        <span class="wm-reset-password-page__logo-text">
                            WorkManagement
                        </span>
                    </a>


                    {{-- Brand Content --}}

                    <div class="wm-reset-password-page__brand-content">

                        <span class="wm-reset-password-page__brand-eyebrow">
                            <i class="ph ph-lock-key"></i>
                            Create a new password
                        </span>


                        <h1 class="wm-reset-password-page__brand-title">
                            Secure your account with a

                            <span>
                                new password.
                            </span>
                        </h1>


                        <p class="wm-reset-password-page__brand-description">
                            Choose a strong password that helps keep your
                            WorkManagement account and workspace secure.
                        </p>


                        {{-- Features --}}

                        <div class="wm-reset-password-page__features">

                            <div class="wm-reset-password-page__feature">

                                <span class="wm-reset-password-page__feature-icon">
                                    <i class="ph ph-check-circle"></i>
                                </span>

                                <span>
                                    Use at least 8 characters
                                </span>

                            </div>


                            <div class="wm-reset-password-page__feature">

                                <span class="wm-reset-password-page__feature-icon">
                                    <i class="ph ph-check-circle"></i>
                                </span>

                                <span>
                                    Include uppercase and lowercase letters
                                </span>

                            </div>


                            <div class="wm-reset-password-page__feature">

                                <span class="wm-reset-password-page__feature-icon">
                                    <i class="ph ph-check-circle"></i>
                                </span>

                                <span>
                                    Include at least one number
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- Security Card --}}

                    <div class="wm-reset-password-page__security-card">

                        <div class="wm-reset-password-page__security-card-icon">
                            <i class="ph ph-shield-check"></i>
                        </div>


                        <div class="wm-reset-password-page__security-card-content">

                            <strong>
                                Keep your account secure
                            </strong>

                            <span>
                                Never share your password with anyone.
                                WorkManagement will never ask for it.
                            </span>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =====================================================
                Reset Password Panel
            ====================================================== --}}

            <section class="wm-reset-password-page__panel">

                <div class="wm-reset-password-page__form-wrapper">

                    {{-- Mobile Logo --}}

                    <a
                        href="{{ route('home') }}"
                        class="wm-reset-password-page__mobile-logo"
                    >

                        <span class="wm-reset-password-page__logo-mark">
                            <i class="ph ph-kanban"></i>
                        </span>

                        <span class="wm-reset-password-page__logo-text">
                            WorkManagement
                        </span>

                    </a>


                    {{-- Reset Icon --}}

                    <div class="wm-reset-password-page__reset-icon">

                        <i class="ph ph-lock-key"></i>

                    </div>


                    {{-- Form Header --}}

                    <div class="wm-reset-password-page__form-header">

                        <h2 class="wm-reset-password-page__form-title">
                            Reset your password
                        </h2>

                        <p class="wm-reset-password-page__form-description">
                            Enter your new password below. Make sure it's
                            strong and easy for you to remember.
                        </p>

                    </div>


                    {{-- =================================================
                        AJAX Alert
                    ================================================== --}}

                    <div
                        class="wm-reset-password-page__alert wm-reset-password-page__ajax-alert"
                        id="wm-reset-password-alert"
                        role="alert"
                        aria-live="polite"
                        style="display: none;"
                    >

                        <i class="ph ph-warning-circle"></i>

                        <div>

                            <strong
                                class="wm-reset-password-page__alert-title"
                            >
                                Something went wrong
                            </strong>

                            <span
                                class="wm-reset-password-page__alert-message"
                            ></span>

                        </div>


                        <button
                            type="button"
                            class="wm-reset-password-page__alert-close"
                            data-alert-close
                            aria-label="Close alert"
                        >
                            <i class="ph ph-x"></i>
                        </button>

                    </div>


                    {{-- =================================================
                        Session Status
                    ================================================== --}}

                    @if (session('status'))

                        <div
                            class="wm-reset-password-page__alert wm-reset-password-page__alert--success"
                            role="status"
                            aria-live="polite"
                        >

                            <i class="ph ph-check-circle"></i>

                            <div>

                                <strong>
                                    Password updated
                                </strong>

                                <span>
                                    {{ session('status') }}
                                </span>

                            </div>


                            <button
                                type="button"
                                class="wm-reset-password-page__alert-close"
                                data-alert-close
                                aria-label="Close alert"
                            >
                                <i class="ph ph-x"></i>
                            </button>

                        </div>

                    @endif


                    {{-- =================================================
                        Server-side Validation Errors
                    ================================================== --}}

                    @if ($errors->any())

                        <div
                            class="wm-reset-password-page__alert wm-reset-password-page__alert--danger"
                            role="alert"
                            aria-live="assertive"
                        >

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
                                class="wm-reset-password-page__alert-close"
                                data-alert-close
                                aria-label="Close alert"
                            >
                                <i class="ph ph-x"></i>
                            </button>

                        </div>

                    @endif


                    {{-- =================================================
                        Reset Password Form
                    ================================================== --}}

                    <form
                        method="POST"
                        action="{{ route('password.update') }}"
                        class="wm-reset-password-page__form"
                        id="wm-reset-password-form"
                        novalidate
                    >

                        @csrf


                        {{-- Reset Token --}}

                        <input
                            type="hidden"
                            name="token"
                            value="{{ $token ?? request()->route('token') }}"
                        >


                        {{-- =================================================
                            Email
                        ================================================== --}}

                        <div class="wm-reset-password-page__field">

                            <label
                                for="email"
                                class="wm-reset-password-page__label"
                            >
                                Email address
                            </label>


                            <div class="wm-reset-password-page__input-wrapper">

                                <i class="ph ph-envelope wm-reset-password-page__input-icon"></i>


                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="wm-reset-password-page__input"
                                    placeholder="you@example.com"
                                    value="{{ old('email', $email ?? request('email')) }}"
                                    autocomplete="email"
                                    maxlength="255"
                                    required
                                >

                            </div>


                            <span
                                class="wm-reset-password-page__field-error"
                                data-error-for="email"
                            ></span>

                        </div>


                        {{-- =================================================
                            New Password
                        ================================================== --}}

                        <div class="wm-reset-password-page__field">

                            <label
                                for="password"
                                class="wm-reset-password-page__label"
                            >
                                New password
                            </label>


                            <div class="wm-reset-password-page__input-wrapper">

                                <i class="ph ph-lock-key wm-reset-password-page__input-icon"></i>


                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="wm-reset-password-page__input"
                                    placeholder="Create a strong password"
                                    autocomplete="new-password"
                                    minlength="8"
                                    required
                                >


                                <button
                                    type="button"
                                    class="wm-reset-password-page__password-toggle"
                                    data-password-toggle="password"
                                    aria-label="Show password"
                                    aria-pressed="false"
                                >
                                    <i class="ph ph-eye"></i>
                                </button>

                            </div>


                            {{-- Password Strength --}}

                            <div
                                class="wm-reset-password-page__password-strength"
                                id="wm-reset-password-strength"
                            >

                                <div class="wm-reset-password-page__password-strength-bars">

                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>

                                </div>


                                <span
                                    class="wm-reset-password-page__password-strength-text"
                                    id="wm-reset-password-strength-text"
                                >
                                    Use 8 or more characters
                                </span>

                            </div>


                            <span
                                class="wm-reset-password-page__field-error"
                                data-error-for="password"
                            ></span>

                        </div>


                        {{-- =================================================
                            Confirm Password
                        ================================================== --}}

                        <div class="wm-reset-password-page__field">

                            <label
                                for="password_confirmation"
                                class="wm-reset-password-page__label"
                            >
                                Confirm new password
                            </label>


                            <div class="wm-reset-password-page__input-wrapper">

                                <i class="ph ph-lock-key-open wm-reset-password-page__input-icon"></i>


                                <input
                                    type="password"
                                    name="password_confirmation"
                                    id="password_confirmation"
                                    class="wm-reset-password-page__input"
                                    placeholder="Confirm your new password"
                                    autocomplete="new-password"
                                    minlength="8"
                                    required
                                >


                                <button
                                    type="button"
                                    class="wm-reset-password-page__password-toggle"
                                    data-password-toggle="password_confirmation"
                                    aria-label="Show password"
                                    aria-pressed="false"
                                >
                                    <i class="ph ph-eye"></i>
                                </button>

                            </div>


                            <span
                                class="wm-reset-password-page__field-error"
                                data-error-for="password_confirmation"
                            ></span>

                        </div>


                        {{-- =================================================
                            Password Requirements
                        ================================================== --}}

                        <div class="wm-reset-password-page__requirements">

                            <div class="wm-reset-password-page__requirements-title">

                                <i class="ph ph-info"></i>

                                <span>
                                    Password requirements
                                </span>

                            </div>


                            <ul>

                                <li data-password-rule="length">

                                    <i class="ph ph-circle"></i>

                                    <span>
                                        At least 8 characters
                                    </span>

                                </li>


                                <li data-password-rule="letters">

                                    <i class="ph ph-circle"></i>

                                    <span>
                                        At least one letter
                                    </span>

                                </li>


                                <li data-password-rule="mixed-case">

                                    <i class="ph ph-circle"></i>

                                    <span>
                                        Uppercase and lowercase letters
                                    </span>

                                </li>


                                <li data-password-rule="number">

                                    <i class="ph ph-circle"></i>

                                    <span>
                                        At least one number
                                    </span>

                                </li>

                            </ul>

                        </div>


                        {{-- =================================================
                            Submit
                        ================================================== --}}

                        <button
                            type="submit"
                            class="wm-reset-password-page__submit"
                            id="wm-reset-password-submit"
                        >

                            <span class="wm-reset-password-page__submit-content">

                                <span>
                                    Reset password
                                </span>

                                <i class="ph ph-check"></i>

                            </span>


                            <span class="wm-reset-password-page__submit-loading">

                                <span class="wm-reset-password-page__spinner"></span>

                                Updating password...

                            </span>

                        </button>


                        {{-- =================================================
                            Back To Login
                        ================================================== --}}

                        <div class="wm-reset-password-page__back-login">

                            <a href="{{ route('login') }}">

                                <i class="ph ph-arrow-left"></i>

                                <span>
                                    Back to sign in
                                </span>

                            </a>

                        </div>

                    </form>


                    {{-- =================================================
                        Footer
                    ================================================== --}}

                    <div class="wm-reset-password-page__footer">

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


            /*
            |--------------------------------------------------------------------------
            | Elements
            |--------------------------------------------------------------------------
            */

            const $form = $('#wm-reset-password-form');
            const $email = $('#email');
            const $password = $('#password');
            const $confirmation = $('#password_confirmation');
            const $submit = $('#wm-reset-password-submit');
            const $alert = $('#wm-reset-password-alert');


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

                    if (!$input.length) {
                        return;
                    }

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


            /*
            |--------------------------------------------------------------------------
            | Password Input
            |--------------------------------------------------------------------------
            */

            $password.on(
                'input',
                function () {

                    const password = $(this).val();

                    updatePasswordStrength(password);
                    updatePasswordRequirements(password);

                    clearFieldError(
                        $password
                    );

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Confirmation Input
            |--------------------------------------------------------------------------
            */

            $confirmation.on(
                'input',
                function () {

                    clearFieldError(
                        $confirmation
                    );

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Email Input
            |--------------------------------------------------------------------------
            */

            $email.on(
                'input',
                function () {

                    clearFieldError(
                        $email
                    );

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Password Strength
            |--------------------------------------------------------------------------
            */

            function updatePasswordStrength(password) {

                const $bars =
                    $('#wm-reset-password-strength')
                        .find(
                            '.wm-reset-password-page__password-strength-bars span'
                        );

                const $text =
                    $('#wm-reset-password-strength-text');


                $bars.removeClass(
                    'is-active is-weak is-medium is-strong'
                );


                if (!password.length) {

                    $text.text(
                        'Use 8 or more characters'
                    );

                    return;
                }


                let score = 0;


                /*
                |--------------------------------------------------------------------------
                | Strength Rules
                |--------------------------------------------------------------------------
                */

                if (password.length >= 8) {
                    score++;
                }

                if (password.length >= 12) {
                    score++;
                }

                if (/[A-Za-z]/.test(password)) {
                    score++;
                }

                if (
                    /[A-Z]/.test(password) &&
                    /[a-z]/.test(password)
                ) {
                    score++;
                }

                if (/[0-9]/.test(password)) {
                    score++;
                }


                let level = 'weak';
                let text = 'Weak password';


                if (score >= 4) {

                    level = 'strong';

                    text = 'Strong password';

                } else if (score >= 2) {

                    level = 'medium';

                    text = 'Good password — add more complexity';

                } else {

                    level = 'weak';

                    text = 'Weak password — add more characters';

                }


                $text.text(text);


                $bars.each(
                    function (index) {

                        if (
                            index <
                            Math.min(score, 4)
                        ) {

                            $(this)
                                .addClass('is-active')
                                .addClass(
                                    'is-' + level
                                );

                        }

                    }
                );

            }


            /*
            |--------------------------------------------------------------------------
            | Password Requirements
            |--------------------------------------------------------------------------
            */

            function updatePasswordRequirements(password) {

                const rules = {

                    length:
                        password.length >= 8,

                    letters:
                        /[A-Za-z]/.test(password),

                    'mixed-case':
                        /[A-Z]/.test(password) &&
                        /[a-z]/.test(password),

                    number:
                        /[0-9]/.test(password)

                };


                $.each(
                    rules,
                    function (
                        rule,
                        passed
                    ) {

                        const $item =
                            $('[data-password-rule="' + rule + '"]');

                        const $icon =
                            $item.find('i');


                        $item.toggleClass(
                            'is-valid',
                            passed
                        );


                        if (passed) {

                            $icon
                                .removeClass('ph-circle')
                                .addClass('ph-check-circle');

                        } else {

                            $icon
                                .removeClass('ph-check-circle')
                                .addClass('ph-circle');

                        }

                    }
                );

            }


            /*
            |--------------------------------------------------------------------------
            | Form Submit
            |--------------------------------------------------------------------------
            */

            $form.on(
                'submit',
                function (event) {

                    event.preventDefault();


                    if (
                        $submit.hasClass('is-loading')
                    ) {
                        return;
                    }


                    clearValidation();
                    hideAlert();


                    const email =
                        $.trim(
                            $email.val()
                        );

                    const password =
                        $password.val();

                    const confirmation =
                        $confirmation.val();


                    let isValid = true;


                    /*
                    |--------------------------------------------------------------------------
                    | Email Validation
                    |--------------------------------------------------------------------------
                    */

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


                    /*
                    |--------------------------------------------------------------------------
                    | Password Validation
                    |--------------------------------------------------------------------------
                    */

                    if (!password) {

                        showError(
                            $password,
                            'New password is required.'
                        );

                        isValid = false;

                    } else if (password.length < 8) {

                        showError(
                            $password,
                            'Password must be at least 8 characters.'
                        );

                        isValid = false;

                    } else if (!/[A-Za-z]/.test(password)) {

                        showError(
                            $password,
                            'Password must contain at least one letter.'
                        );

                        isValid = false;

                    } else if (
                        !/[A-Z]/.test(password) ||
                        !/[a-z]/.test(password)
                    ) {

                        showError(
                            $password,
                            'Password must contain uppercase and lowercase letters.'
                        );

                        isValid = false;

                    } else if (!/[0-9]/.test(password)) {

                        showError(
                            $password,
                            'Password must contain at least one number.'
                        );

                        isValid = false;

                    }


                    /*
                    |--------------------------------------------------------------------------
                    | Password Confirmation
                    |--------------------------------------------------------------------------
                    */

                    if (!confirmation) {

                        showError(
                            $confirmation,
                            'Please confirm your new password.'
                        );

                        isValid = false;

                    } else if (
                        password !== confirmation
                    ) {

                        showError(
                            $confirmation,
                            'Passwords do not match.'
                        );

                        isValid = false;

                    }


                    /*
                    |--------------------------------------------------------------------------
                    | Stop If Invalid
                    |--------------------------------------------------------------------------
                    */

                    if (!isValid) {

                        focusFirstInvalidField();

                        return;

                    }


                    /*
                    |--------------------------------------------------------------------------
                    | AJAX Request
                    |--------------------------------------------------------------------------
                    */

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

                            if (
                                response.success &&
                                response.data &&
                                response.data.redirect
                            ) {

                                showSuccessState(
                                    response.message ||
                                    'Your password has been reset successfully.'
                                );


                                setTimeout(
                                    function () {

                                        window.location.href =
                                            response.data.redirect;

                                    },
                                    1200
                                );

                                return;
                            }


                            showAlert(
                                'danger',
                                response.message ||
                                'Unable to reset your password.'
                            );

                        },

                        error: function (xhr) {

                            handleServerError(
                                xhr
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
            | Server Error Handler
            |--------------------------------------------------------------------------
            */

            function handleServerError(xhr) {

                const response =
                    xhr.responseJSON || {};


                /*
                |--------------------------------------------------------------------------
                | Validation Errors
                |--------------------------------------------------------------------------
                */

                if (
                    xhr.status === 422 &&
                    response.errors
                ) {

                    $.each(
                        response.errors,
                        function (
                            field,
                            messages
                        ) {

                            const $input =
                                $('#' + field);

                            if ($input.length) {

                                showError(
                                    $input,
                                    Array.isArray(messages)
                                        ? messages[0]
                                        : messages
                                );

                            }

                        }
                    );


                    showAlert(
                        'danger',
                        response.message ||
                        'Please check your details.'
                    );


                    focusFirstInvalidField();

                    return;
                }


                /*
                |--------------------------------------------------------------------------
                | Invalid / Expired Token
                |--------------------------------------------------------------------------
                */

                if (
                    xhr.status === 400 ||
                    xhr.status === 410
                ) {

                    showAlert(
                        'danger',
                        response.message ||
                        'This password reset link is invalid or has expired. Please request a new reset link.'
                    );

                    return;
                }


                /*
                |--------------------------------------------------------------------------
                | Unauthorized
                |--------------------------------------------------------------------------
                */

                if (xhr.status === 401) {

                    showAlert(
                        'danger',
                        response.message ||
                        'Your session has expired. Please request a new password reset link.'
                    );

                    return;
                }


                /*
                |--------------------------------------------------------------------------
                | Too Many Requests
                |--------------------------------------------------------------------------
                */

                if (xhr.status === 429) {

                    showAlert(
                        'danger',
                        response.message ||
                        'Too many attempts. Please wait a moment and try again.'
                    );

                    return;
                }


                /*
                |--------------------------------------------------------------------------
                | CSRF
                |--------------------------------------------------------------------------
                */

                if (xhr.status === 419) {

                    showAlert(
                        'danger',
                        'Your session has expired. Please refresh the page and try again.'
                    );

                    return;
                }


                /*
                |--------------------------------------------------------------------------
                | Server Error
                |--------------------------------------------------------------------------
                */

                showAlert(
                    'danger',
                    response.message ||
                    'Something went wrong. Please try again.'
                );

            }


            /*
            |--------------------------------------------------------------------------
            | Success State
            |--------------------------------------------------------------------------
            */

            function showSuccessState(message) {

                clearValidation();


                $form
                    .find('input, button')
                    .prop(
                        'disabled',
                        true
                    );


                showAlert(
                    'success',
                    message ||
                    'Your password has been reset successfully.'
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

                if (!$input.length) {
                    return;
                }


                const field =
                    $input.attr('id');


                $input.addClass(
                    'is-invalid'
                );


                $input
                    .closest(
                        '.wm-reset-password-page__input-wrapper'
                    )
                    .addClass(
                        'is-invalid'
                    );


                $('[data-error-for="' + field + '"]')
                    .text(
                        message
                    );

            }


            /*
            |--------------------------------------------------------------------------
            | Clear Single Field Error
            |--------------------------------------------------------------------------
            */

            function clearFieldError(
                $input
            ) {

                if (!$input.length) {
                    return;
                }


                const field =
                    $input.attr('id');


                $input.removeClass(
                    'is-invalid'
                );


                $input
                    .closest(
                        '.wm-reset-password-page__input-wrapper'
                    )
                    .removeClass(
                        'is-invalid'
                    );


                $('[data-error-for="' + field + '"]')
                    .text('');

            }


            /*
            |--------------------------------------------------------------------------
            | Clear Validation
            |--------------------------------------------------------------------------
            */

            function clearValidation() {

                $('.wm-reset-password-page__input')
                    .removeClass(
                        'is-invalid'
                    );


                $('.wm-reset-password-page__input-wrapper')
                    .removeClass(
                        'is-invalid'
                    );


                $('.wm-reset-password-page__field-error')
                    .text('');

            }


            /*
            |--------------------------------------------------------------------------
            | Focus First Invalid Field
            |--------------------------------------------------------------------------
            */

            function focusFirstInvalidField() {

                const $invalid =
                    $('.wm-reset-password-page__input.is-invalid')
                        .first();


                if ($invalid.length) {

                    $invalid.trigger('focus');

                }

            }


            /*
            |--------------------------------------------------------------------------
            | Loading State
            |--------------------------------------------------------------------------
            */

            function setLoading(
                loading
            ) {

                $submit.prop(
                    'disabled',
                    loading
                );


                $submit.toggleClass(
                    'is-loading',
                    loading
                );

            }


            /*
            |--------------------------------------------------------------------------
            | Show Alert
            |--------------------------------------------------------------------------
            */

            function showAlert(
                type,
                message
            ) {

                const $icon =
                    $alert.find('> i');

                const $title =
                    $alert.find(
                        '.wm-reset-password-page__alert-title'
                    );

                const $message =
                    $alert.find(
                        '.wm-reset-password-page__alert-message'
                    );


                $alert
                    .removeClass(
                        'wm-reset-password-page__alert--success'
                    )
                    .removeClass(
                        'wm-reset-password-page__alert--danger'
                    );


                if (type === 'success') {

                    $alert.addClass(
                        'wm-reset-password-page__alert--success'
                    );


                    $icon
                        .removeClass(
                            'ph-warning-circle'
                        )
                        .addClass(
                            'ph-check-circle'
                        );


                    $title.text(
                        'Password updated'
                    );

                } else {

                    $alert.addClass(
                        'wm-reset-password-page__alert--danger'
                    );


                    $icon
                        .removeClass(
                            'ph-check-circle'
                        )
                        .addClass(
                            'ph-warning-circle'
                        );


                    $title.text(
                        'Something went wrong'
                    );

                }


                $message.text(
                    message
                );


                $alert
                    .stop(true, true)
                    .fadeIn(180);

            }


            /*
            |--------------------------------------------------------------------------
            | Hide Alert
            |--------------------------------------------------------------------------
            */

            function hideAlert() {

                $alert
                    .stop(true, true)
                    .hide();

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
                        .closest(
                            '.wm-reset-password-page__alert'
                        )
                        .fadeOut(180);

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Input Focus
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'focus',
                '.wm-reset-password-page__input',
                function () {

                    $(this)
                        .closest(
                            '.wm-reset-password-page__input-wrapper'
                        )
                        .addClass(
                            'is-focused'
                        );

                }
            );


            $(document).on(
                'blur',
                '.wm-reset-password-page__input',
                function () {

                    $(this)
                        .closest(
                            '.wm-reset-password-page__input-wrapper'
                        )
                        .removeClass(
                            'is-focused'
                        );

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
            | Initial Password State
            |--------------------------------------------------------------------------
            */

            updatePasswordStrength(
                $password.val()
            );

            updatePasswordRequirements(
                $password.val()
            );

        });

    </script>

@endpush
