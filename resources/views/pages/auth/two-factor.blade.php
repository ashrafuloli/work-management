@extends('layout.auth')

@section('title', 'Two-Factor Authentication')

@section('content')

    <div
        class="wm-auth-page wm-auth-page--two-factor"
        data-two-factor-page
    >

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

                            <i class="ph ph-shield-check"></i>

                            Secure your account

                        </span>


                        <h1 class="wm-auth__brand-title">

                            One more step to

                            <span>
                                sign you in.
                            </span>

                        </h1>


                        <p class="wm-auth__brand-description">

                            We use an additional verification step to
                            help keep your WorkManagement account secure.

                        </p>


                        {{-- Features --}}

                        <div class="wm-auth__features">

                            <div class="wm-auth__feature">

                                <span class="wm-auth__feature-icon">

                                    <i class="ph ph-envelope"></i>

                                </span>

                                <span>
                                    Verification code sent to your email
                                </span>

                            </div>


                            <div class="wm-auth__feature">

                                <span class="wm-auth__feature-icon">

                                    <i class="ph ph-lock-key"></i>

                                </span>

                                <span>
                                    Your account stays protected
                                </span>

                            </div>


                            <div class="wm-auth__feature">

                                <span class="wm-auth__feature-icon">

                                    <i class="ph ph-clock"></i>

                                </span>

                                <span>
                                    Codes expire after a short period
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- Security Message --}}

                    <div class="wm-auth__testimonial">

                        <div class="wm-auth__testimonial-stars">

                            <i class="ph-fill ph-shield-check"></i>

                        </div>


                        <blockquote>

                            Your security matters. Never share your
                            verification code with anyone.

                        </blockquote>


                        <div class="wm-auth__testimonial-author">

                            <div class="wm-auth__testimonial-avatar">

                                <i class="ph ph-shield-check"></i>

                            </div>

                            <div>

                                <strong>
                                    Account Security
                                </strong>

                                <span>
                                    Email verification
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =====================================================
                Two-Factor Panel
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

                        <div class="wm-auth__two-factor-icon">

                            <i class="ph ph-envelope-simple"></i>

                        </div>


                        <h2 class="wm-auth__form-title">

                            Verify your identity

                        </h2>


                        <p class="wm-auth__form-description">

                            Enter the 6-digit verification code we sent
                            to your email address.

                        </p>

                    </div>


                    {{-- =================================================
                        AJAX Alert
                    ================================================== --}}

                    <div
                        class="wm-auth__ajax-alert"
                        id="wm-two-factor-alert"
                    ></div>


                    {{-- =================================================
                        Email Information
                    ================================================== --}}

                    <div class="wm-auth__two-factor-email">

                        <span class="wm-auth__two-factor-email-icon">

                            <i class="ph ph-envelope"></i>

                        </span>


                        <div class="wm-auth__two-factor-email-content">

                            <span class="wm-auth__two-factor-email-label">
                                Verification code sent to
                            </span>

                            <strong id="wm-two-factor-email">
                                {{ $email ?? 'your email address' }}
                            </strong>

                        </div>

                    </div>


                    {{-- =================================================
                        Verification Form
                    ================================================== --}}

                    <form
                        method="POST"
                        action="{{ route('login.two-factor.verify') }}"
                        class="wm-auth__form wm-auth__two-factor-form"
                        id="wm-two-factor-form"
                        novalidate
                    >

                        @csrf


                        {{-- OTP Code --}}

                        <div class="wm-auth__field">

                            <label
                                for="two_factor_code"
                                class="wm-auth__label"
                            >
                                Verification code
                            </label>


                            <div class="wm-auth__input-wrapper">

                                <i class="ph ph-shield-check wm-auth__input-icon"></i>

                                <input
                                    type="text"
                                    name="code"
                                    id="two_factor_code"
                                    class="form-control wm-auth__input wm-auth__two-factor-input"
                                    placeholder="000000"
                                    inputmode="numeric"
                                    autocomplete="one-time-code"
                                    maxlength="6"
                                    pattern="[0-9]{6}"
                                    required
                                    autofocus
                                >

                            </div>


                            <span
                                class="wm-auth__field-error"
                                data-error-for="code"
                            ></span>

                        </div>


                        {{-- Expiry Information --}}

                        <div class="wm-auth__two-factor-expiry">

                            <i class="ph ph-clock"></i>

                            <span>
                                Your verification code expires in
                                <strong>10 minutes</strong>.
                            </span>

                        </div>


                        {{-- Submit --}}

                        <button
                            type="submit"
                            class="btn btn-primary wm-auth__submit"
                            id="wm-two-factor-submit"
                        >

                            <span class="wm-auth__submit-content">

                                <span>
                                    Verify and sign in
                                </span>

                                <i class="ph ph-arrow-right"></i>

                            </span>


                            <span class="wm-auth__submit-loading">

                                <span class="wm-auth__spinner"></span>

                                Verifying...

                            </span>

                        </button>


                        {{-- Resend Code --}}

                        <div class="wm-auth__two-factor-resend">

                            <span>
                                Didn't receive the code?
                            </span>


                            <button
                                type="button"
                                class="wm-auth__two-factor-resend-button"
                                id="wm-two-factor-resend"
                            >

                                Resend code

                            </button>

                        </div>


                        {{-- Resend Countdown --}}

                        <div
                            class="wm-auth__two-factor-countdown"
                            id="wm-two-factor-countdown"
                            hidden
                        >

                            <i class="ph ph-clock"></i>

                            <span>
                                You can request another code in
                                <strong id="wm-two-factor-countdown-value">
                                    60
                                </strong>s.
                            </span>

                        </div>


                        {{-- Back to Login --}}

                        <a
                            href="{{ route('login') }}"
                            class="wm-auth__two-factor-back"
                        >

                            <i class="ph ph-arrow-left"></i>

                            <span>
                                Back to sign in
                            </span>

                        </a>

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
            // Configuration
            // =========================================================

            const $page =
                $('[data-two-factor-page]');

            const $form =
                $('#wm-two-factor-form');

            const $code =
                $('#two_factor_code');

            const $submit =
                $('#wm-two-factor-submit');

            const $resend =
                $('#wm-two-factor-resend');

            const $alert =
                $('#wm-two-factor-alert');

            const $countdown =
                $('#wm-two-factor-countdown');

            const $countdownValue =
                $('#wm-two-factor-countdown-value');


            const verifyUrl =
                $form.attr('action');

            const resendUrl =
                @json(route('login.two-factor.email.resend'));


            let countdownTimer = null;

            let isSubmitting = false;


            // =========================================================
            // Code Input
            // =========================================================

            $code.on(
                'input',
                function () {

                    let value =
                        $(this).val();

                    value =
                        value
                            .replace(/\D/g, '')
                            .substring(0, 6);

                    $(this).val(value);


                    clearFieldError();

                    clearAjaxAlert();

                }
            );


            // =========================================================
            // Paste OTP
            // =========================================================

            $code.on(
                'paste',
                function () {

                    const input =
                        this;

                    setTimeout(
                        function () {

                            let value =
                                $(input).val();

                            value =
                                value
                                    .replace(/\D/g, '')
                                    .substring(0, 6);

                            $(input).val(value);

                        },
                        0
                    );

                }
            );


            // =========================================================
            // Verification Submit
            // =========================================================

            $form.on(
                'submit',
                function (event) {

                    event.preventDefault();


                    if (isSubmitting) {
                        return;
                    }


                    clearFieldError();

                    clearAjaxAlert();


                    const code =
                        $.trim(
                            $code.val()
                        );


                    // -------------------------------------------------
                    // Client-side Validation
                    // -------------------------------------------------

                    if (!code) {

                        showFieldError(
                            'Please enter the verification code.'
                        );

                        $code.trigger('focus');

                        return;

                    }


                    if (!/^\d{6}$/.test(code)) {

                        showFieldError(
                            'The verification code must contain exactly 6 digits.'
                        );

                        $code.trigger('focus');

                        return;

                    }


                    // -------------------------------------------------
                    // Loading
                    // -------------------------------------------------

                    setLoading(true);


                    // -------------------------------------------------
                    // AJAX Request
                    // -------------------------------------------------

                    $.ajax({

                        url: verifyUrl,

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

                                showSuccess(
                                    response.message ||
                                    'Verification successful.'
                                );


                                setTimeout(
                                    function () {

                                        window.location.href =
                                            response.data.redirect;

                                    },
                                    350
                                );


                                return;
                            }


                            setLoading(false);


                            showError(
                                response.message ||
                                'Unable to verify the code.'
                            );

                        },


                        error: function (xhr) {

                            setLoading(false);


                            const response =
                                xhr.responseJSON || {};


                            // -------------------------------------------------
                            // Validation Error
                            // -------------------------------------------------

                            if (xhr.status === 422) {

                                if (
                                    response.errors &&
                                    response.errors.code
                                ) {

                                    showFieldError(
                                        response.errors.code[0]
                                    );

                                }


                                showError(
                                    response.message ||
                                    'The verification code is invalid or expired.'
                                );


                                return;
                            }


                            // -------------------------------------------------
                            // Session Expired / Unauthorized
                            // -------------------------------------------------

                            if (
                                xhr.status === 401 ||
                                xhr.status === 403
                            ) {

                                showError(
                                    response.message ||
                                    'Your verification session has expired. Please sign in again.'
                                );


                                return;
                            }


                            // -------------------------------------------------
                            // CSRF
                            // -------------------------------------------------

                            if (xhr.status === 419) {

                                showError(
                                    'Your session has expired. Please refresh the page and try again.'
                                );

                                return;
                            }


                            // -------------------------------------------------
                            // Rate Limit
                            // -------------------------------------------------

                            if (xhr.status === 429) {

                                showError(
                                    response.message ||
                                    'Too many attempts. Please wait a moment and try again.'
                                );


                                return;
                            }


                            // -------------------------------------------------
                            // Server Error
                            // -------------------------------------------------

                            showError(
                                response.message ||
                                'Something went wrong. Please try again.'
                            );

                        }

                    });

                }
            );


            // =========================================================
            // Resend Code
            // =========================================================

            $resend.on(
                'click',
                function () {

                    if (
                        $resend.prop('disabled')
                    ) {
                        return;
                    }


                    clearFieldError();

                    clearAjaxAlert();


                    setResendLoading(true);


                    $.ajax({

                        url: resendUrl,

                        method: 'POST',

                        data: {
                            _token:
                                $('meta[name="csrf-token"]').attr('content')
                        },

                        dataType: 'json',

                        headers: {
                            'Accept': 'application/json'
                        },


                        success: function (response) {

                            setResendLoading(false);


                            if (response.success) {

                                if (
                                    response.data &&
                                    response.data.email
                                ) {

                                    $('#wm-two-factor-email')
                                        .text(
                                            response.data.email
                                        );

                                }


                                showSuccess(
                                    response.message ||
                                    'A new verification code has been sent to your email.'
                                );


                                $code.val('');

                                $code.trigger('focus');


                                startCountdown();

                                return;

                            }


                            showError(
                                response.message ||
                                'Unable to resend the verification code.'
                            );

                        },


                        error: function (xhr) {

                            setResendLoading(false);


                            const response =
                                xhr.responseJSON || {};


                            if (xhr.status === 429) {

                                showError(
                                    response.message ||
                                    'Too many requests. Please wait before requesting another code.'
                                );

                                startCountdown();

                                return;

                            }


                            showError(
                                response.message ||
                                'Unable to resend the verification code. Please try again.'
                            );

                        }

                    });

                }
            );


            // =========================================================
            // Countdown
            // =========================================================

            function startCountdown() {

                clearCountdown();


                let seconds = 60;


                $resend.prop(
                    'disabled',
                    true
                );


                $countdownValue.text(
                    seconds
                );


                $countdown.prop(
                    'hidden',
                    false
                );


                countdownTimer =
                    setInterval(
                        function () {

                            seconds--;


                            $countdownValue.text(
                                seconds
                            );


                            if (seconds <= 0) {

                                clearCountdown();

                            }

                        },
                        1000
                    );

            }


            function clearCountdown() {

                if (countdownTimer !== null) {

                    clearInterval(
                        countdownTimer
                    );

                    countdownTimer = null;

                }


                $countdown.prop(
                    'hidden',
                    true
                );


                $resend.prop(
                    'disabled',
                    false
                );

            }


            // =========================================================
            // Submit Loading
            // =========================================================

            function setLoading(loading) {

                isSubmitting =
                    loading;


                $submit.prop(
                    'disabled',
                    loading
                );


                $submit.toggleClass(
                    'is-loading',
                    loading
                );

            }


            // =========================================================
            // Resend Loading
            // =========================================================

            function setResendLoading(loading) {

                $resend.prop(
                    'disabled',
                    loading
                );


                $resend.toggleClass(
                    'is-loading',
                    loading
                );


                if (loading) {

                    $resend.data(
                        'original-text',
                        $resend.text()
                    );


                    $resend.text(
                        'Sending...'
                    );

                } else {

                    $resend.text(
                        $resend.data(
                            'original-text'
                        ) || 'Resend code'
                    );

                }

            }


            // =========================================================
            // Field Error
            // =========================================================

            function showFieldError(message) {

                $code.addClass(
                    'is-invalid'
                );


                $code
                    .closest('.wm-auth__input-wrapper')
                    .addClass('is-invalid');


                $('[data-error-for="code"]')
                    .text(message);

            }


            function clearFieldError() {

                $code.removeClass(
                    'is-invalid'
                );


                $code
                    .closest('.wm-auth__input-wrapper')
                    .removeClass('is-invalid');


                $('[data-error-for="code"]')
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


                $alert.html(
                    html
                );

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


                $alert.html(
                    html
                );

            }


            // =========================================================
            // Clear Alert
            // =========================================================

            function clearAjaxAlert() {

                $alert.empty();

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

            $code.on(
                'focus',
                function () {

                    $(this)
                        .closest('.wm-auth__input-wrapper')
                        .addClass('is-focused');

                }
            );


            $code.on(
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


            // =========================================================
            // Initial State
            // =========================================================

            $code.trigger('focus');

        });

    </script>

@endpush
