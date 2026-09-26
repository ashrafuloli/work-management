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


                    {{-- =================================================
                        Logo
                    ================================================== --}}

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


                    {{-- =================================================
                        Brand Content
                    ================================================== --}}

                    <div class="wm-reset-password-page__brand-content">


                        {{-- Eyebrow --}}

                        <span class="wm-reset-password-page__brand-eyebrow">

                            <i class="ph ph-lock-key"></i>

                            Create a new password

                        </span>


                        {{-- Title --}}

                        <h1 class="wm-reset-password-page__brand-title">

                            Secure your account with a

                            <span>
                                new password.
                            </span>

                        </h1>


                        {{-- Description --}}

                        <p class="wm-reset-password-page__brand-description">

                            Choose a strong password that helps keep your
                            WorkManagement account and workspace secure.

                        </p>


                        {{-- =================================================
                            Features
                        ================================================== --}}

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
                                    Combine letters, numbers, and symbols
                                </span>

                            </div>


                            <div class="wm-reset-password-page__feature">

                                <span class="wm-reset-password-page__feature-icon">

                                    <i class="ph ph-check-circle"></i>

                                </span>

                                <span>
                                    Keep your password unique
                                </span>

                            </div>


                        </div>

                    </div>


                    {{-- =================================================
                        Security Card
                    ================================================== --}}

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


                    {{-- =================================================
                        Mobile Logo
                    ================================================== --}}

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


                    {{-- =================================================
                        Recovery Icon
                    ================================================== --}}

                    <div class="wm-reset-password-page__reset-icon">

                        <i class="ph ph-lock-key"></i>

                    </div>


                    {{-- =================================================
                        Form Header
                    ================================================== --}}

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
                        Session Status
                    ================================================== --}}

                    @if (session('status'))

                        <div class="wm-reset-password-page__alert wm-reset-password-page__alert--success">

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

                        <div class="wm-reset-password-page__alert wm-reset-password-page__alert--danger">

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
                                aria-label="Close"
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
                        action="#"
                        class="wm-reset-password-page__form"
                        id="wm-reset-password-form"
                        novalidate
                    >

                        @csrf


                        {{-- =================================================
                            Reset Token
                        ================================================== --}}

                        <input
                            type="hidden"
                            name="token"
                            value="{{ request()->route('token') }}"
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
                                    value="{{ old('email', request('email')) }}"
                                    autocomplete="email"
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


                                <li data-password-rule="uppercase">

                                    <i class="ph ph-circle"></i>

                                    <span>
                                        At least one uppercase letter
                                    </span>

                                </li>


                                <li data-password-rule="number">

                                    <i class="ph ph-circle"></i>

                                    <span>
                                        At least one number
                                    </span>

                                </li>


                                <li data-password-rule="special">

                                    <i class="ph ph-circle"></i>

                                    <span>
                                        At least one special character
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


            // =========================================================
            // Password Visibility
            // =========================================================

            $(document).on(
                'click',
                '[data-password-toggle]',
                function () {

                    const $button = $(this);

                    const targetId =
                        $button.attr(
                            'data-password-toggle'
                        );

                    const $input =
                        $('#' + targetId);

                    const $icon =
                        $button.find('i');

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
            // Password Strength
            // =========================================================

            $('#password').on(
                'input',
                function () {

                    updatePasswordStrength(
                        $(this).val()
                    );

                    updatePasswordRequirements(
                        $(this).val()
                    );

                }
            );


            function updatePasswordStrength(
                password
            ) {

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

                    level = 'weak';

                    $text.text(
                        'Weak password — add more characters'
                    );

                }


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


            // =========================================================
            // Password Requirements
            // =========================================================

            function updatePasswordRequirements(
                password
            ) {

                const rules = {

                    length:
                        password.length >= 8,

                    uppercase:
                        /[A-Z]/.test(password),

                    number:
                        /[0-9]/.test(password),

                    special:
                        /[^A-Za-z0-9]/.test(password)

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


            // =========================================================
            // Form Submit
            // =========================================================

            $('#wm-reset-password-form').on(
                'submit',
                function (event) {

                    event.preventDefault();


                    const $form =
                        $(this);

                    const $email =
                        $('#email');

                    const $password =
                        $('#password');

                    const $confirmation =
                        $('#password_confirmation');


                    let isValid = true;


                    // -----------------------------------------------------
                    // Reset Errors
                    // -----------------------------------------------------

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


                    // -----------------------------------------------------
                    // Email
                    // -----------------------------------------------------

                    const email =
                        $.trim(
                            $email.val()
                        );


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


                    // -----------------------------------------------------
                    // Password
                    // -----------------------------------------------------

                    const password =
                        $password.val();


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

                    } else if (!/[A-Z]/.test(password)) {

                        showError(
                            $password,
                            'Password must contain at least one uppercase letter.'
                        );

                        isValid = false;

                    } else if (!/[0-9]/.test(password)) {

                        showError(
                            $password,
                            'Password must contain at least one number.'
                        );

                        isValid = false;

                    } else if (!/[^A-Za-z0-9]/.test(password)) {

                        showError(
                            $password,
                            'Password must contain at least one special character.'
                        );

                        isValid = false;

                    }


                    // -----------------------------------------------------
                    // Confirm Password
                    // -----------------------------------------------------

                    const confirmation =
                        $confirmation.val();


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


                    if (!isValid) {

                        return;

                    }


                    // -----------------------------------------------------
                    // Loading
                    // -----------------------------------------------------

                    setLoading(
                        true
                    );


                    /*
                     * Laravel AJAX implementation:
                     *
                     * $.ajax({
                     *
                     *     url: "#",
             *     method: "POST",
             *     data: $form.serialize(),
             *
             *     success: function (response) {
             *
             *         window.location.href =
             *             response.redirect;
             *
             *     },
             *
             *     error: function (xhr) {
             *
             *         ...
             *
             *     }
             *
             * });
             */


                    // -----------------------------------------------------
                    // Demo Loading State
                    // -----------------------------------------------------

                    setTimeout(
                        function () {

                            setLoading(
                                false
                            );

                        },
                        1200
                    );

                }
            );


            // =========================================================
            // Email Validation
            // =========================================================

            function isValidEmail(
                email
            ) {

                return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(
                    email
                );

            }


            // =========================================================
            // Show Error
            // =========================================================

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


            // =========================================================
            // Loading
            // =========================================================

            function setLoading(
                loading
            ) {

                const $button =
                    $('#wm-reset-password-submit');


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
                        .closest(
                            '.wm-reset-password-page__alert'
                        )
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


            // =========================================================
            // Clear Errors
            // =========================================================

            $(document).on(
                'input',
                '.wm-reset-password-page__input',
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
                            '.wm-reset-password-page__input-wrapper'
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
