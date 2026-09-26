@extends('layout.auth')

@section('title', 'Verify Your Email')

@section('content')

    <div class="wm-verify-email-page">

        <div class="wm-verify-email-page__container">

            {{-- =====================================================
                Brand Panel
            ====================================================== --}}

            <section class="wm-verify-email-page__brand">

                <div class="wm-verify-email-page__brand-inner">

                    {{-- Logo --}}

                    <a
                        href="{{ route('home') }}"
                        class="wm-verify-email-page__logo"
                    >
                        <span class="wm-verify-email-page__logo-mark">
                            <i class="ph ph-kanban"></i>
                        </span>

                        <span class="wm-verify-email-page__logo-text">
                            WorkManagement
                        </span>
                    </a>

                    {{-- Brand Content --}}

                    <div class="wm-verify-email-page__brand-content">

                        <span class="wm-verify-email-page__brand-eyebrow">
                            <i class="ph ph-seal-check"></i>
                            Secure your workspace
                        </span>

                        <h1 class="wm-verify-email-page__brand-title">
                            One quick step to
                            <span>get started.</span>
                        </h1>

                        <p class="wm-verify-email-page__brand-description">
                            Verify your email address to activate your
                            account and start managing projects,
                            tasks, and collaboration in WorkManagement.
                        </p>

                        <div class="wm-verify-email-page__features">

                            <div class="wm-verify-email-page__feature">
                                <span class="wm-verify-email-page__feature-icon">
                                    <i class="ph ph-check-circle"></i>
                                </span>

                                <span>
                                    Secure account verification
                                </span>
                            </div>

                            <div class="wm-verify-email-page__feature">
                                <span class="wm-verify-email-page__feature-icon">
                                    <i class="ph ph-check-circle"></i>
                                </span>

                                <span>
                                    Protect your workspace and account
                                </span>
                            </div>

                            <div class="wm-verify-email-page__feature">
                                <span class="wm-verify-email-page__feature-icon">
                                    <i class="ph ph-check-circle"></i>
                                </span>

                                <span>
                                    Get access to your team workspace
                                </span>
                            </div>

                        </div>

                    </div>

                    {{-- Security Card --}}

                    <div class="wm-verify-email-page__security-card">

                        <div class="wm-verify-email-page__security-card-icon">
                            <i class="ph ph-shield-check"></i>
                        </div>

                        <div class="wm-verify-email-page__security-card-content">

                            <strong>
                                Your information stays protected
                            </strong>

                            <span>
                                Email verification helps keep your
                                WorkManagement account secure.
                            </span>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =====================================================
                Verification Panel
            ====================================================== --}}

            <section class="wm-verify-email-page__panel">

                <div class="wm-verify-email-page__form-wrapper">

                    {{-- Mobile Logo --}}

                    <a
                        href="{{ route('home') }}"
                        class="wm-verify-email-page__mobile-logo"
                    >

                        <span class="wm-verify-email-page__logo-mark">
                            <i class="ph ph-kanban"></i>
                        </span>

                        <span class="wm-verify-email-page__logo-text">
                            WorkManagement
                        </span>

                    </a>


                    {{-- Verification Icon --}}

                    <div class="wm-verify-email-page__verification-icon">

                        <span class="wm-verify-email-page__verification-icon-inner">
                            <i class="ph ph-envelope-simple"></i>
                        </span>

                        <span class="wm-verify-email-page__verification-icon-check">
                            <i class="ph ph-check"></i>
                        </span>

                    </div>


                    {{-- Form Header --}}

                    <div class="wm-verify-email-page__form-header">

                        <h2 class="wm-verify-email-page__form-title">
                            Verify your email
                        </h2>

                        <p class="wm-verify-email-page__form-description">
                            Thanks for signing up. Before getting started,
                            please verify your email address.
                        </p>

                    </div>


                    {{-- =================================================
                        Status Alert
                    ================================================== --}}

                    @if (session('status'))

                        <div class="wm-verify-email-page__alert wm-verify-email-page__alert--success">

                            <i class="ph ph-check-circle"></i>

                            <div>
                                <strong>
                                    Email sent
                                </strong>

                                <span>
                                    {{ session('status') }}
                                </span>
                            </div>

                            <button
                                type="button"
                                class="wm-verify-email-page__alert-close"
                                data-alert-close
                                aria-label="Close"
                            >
                                <i class="ph ph-x"></i>
                            </button>

                        </div>

                    @endif


                    {{-- =================================================
                        Error Alert
                    ================================================== --}}

                    @if ($errors->any())

                        <div class="wm-verify-email-page__alert wm-verify-email-page__alert--danger">

                            <i class="ph ph-warning-circle"></i>

                            <div>

                                <strong>
                                    Something went wrong.
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
                                class="wm-verify-email-page__alert-close"
                                data-alert-close
                                aria-label="Close"
                            >
                                <i class="ph ph-x"></i>
                            </button>

                        </div>

                    @endif


                    {{-- =================================================
                        AJAX Alert Container
                    ================================================== --}}

                    <div
                        class="wm-verify-email-page__ajax-alert"
                        id="wm-verify-email-alert"
                    ></div>


                    {{-- =================================================
                        Email Preview
                    ================================================== --}}

                    <div class="wm-verify-email-page__email-card">

                        <div class="wm-verify-email-page__email-icon">
                            <i class="ph ph-envelope"></i>
                        </div>

                        <div class="wm-verify-email-page__email-content">

                            <span>
                                Verification email sent to
                            </span>

                            <strong>
                                {{ auth()->user()->email ?? 'you@example.com' }}
                            </strong>

                        </div>

                    </div>


                    {{-- =================================================
                        Instructions
                    ================================================== --}}

                    <div class="wm-verify-email-page__instructions">

                        <div class="wm-verify-email-page__instruction">

                            <span class="wm-verify-email-page__instruction-number">
                                1
                            </span>

                            <div>
                                <strong>
                                    Check your inbox
                                </strong>

                                <span>
                                    Look for an email from WorkManagement.
                                </span>
                            </div>

                        </div>


                        <div class="wm-verify-email-page__instruction">

                            <span class="wm-verify-email-page__instruction-number">
                                2
                            </span>

                            <div>
                                <strong>
                                    Open the verification email
                                </strong>

                                <span>
                                    Click the verification button inside.
                                </span>
                            </div>

                        </div>


                        <div class="wm-verify-email-page__instruction">

                            <span class="wm-verify-email-page__instruction-number">
                                3
                            </span>

                            <div>
                                <strong>
                                    Return to your workspace
                                </strong>

                                <span>
                                    Your account will be ready to use.
                                </span>
                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                        Resend Form
                    ================================================== --}}

                    <form
                        method="POST"
                        action="{{ route('verification.send') }}"
                        class="wm-verify-email-page__form"
                        id="wm-verify-email-form"
                    >

                        @csrf

                        <button
                            type="submit"
                            class="wm-verify-email-page__resend-button"
                            id="wm-verify-email-submit"
                        >

                            <span class="wm-verify-email-page__resend-content">

                                <i class="ph ph-paper-plane-tilt"></i>

                                <span>
                                    Resend verification email
                                </span>

                            </span>

                            <span class="wm-verify-email-page__resend-loading">

                                <span class="wm-verify-email-page__spinner"></span>

                                Sending email...

                            </span>

                        </button>

                    </form>


                    {{-- =================================================
                        Didn't Receive
                    ================================================== --}}

                    <div class="wm-verify-email-page__help">

                        <div class="wm-verify-email-page__help-icon">
                            <i class="ph ph-info"></i>
                        </div>

                        <div>

                            <strong>
                                Didn't receive the email?
                            </strong>

                            <span>
                                Check your spam or junk folder and make sure
                                the email address above is correct.
                            </span>

                        </div>

                    </div>


                    {{-- =================================================
                        Back To Login
                    ================================================== --}}

                    <div class="wm-verify-email-page__back-login">

                        <a href="{{ route('login') }}">

                            <i class="ph ph-arrow-left"></i>

                            <span>
                                Back to sign in
                            </span>

                        </a>

                    </div>


                    {{-- =================================================
                        Footer
                    ================================================== --}}

                    <div class="wm-verify-email-page__footer">

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
            // Resend Verification Email
            // =========================================================

            $('#wm-verify-email-form').on(
                'submit',
                function (event) {

                    event.preventDefault();

                    const $form = $(this);

                    const $button = $('#wm-verify-email-submit');

                    if ($button.hasClass('is-loading')) {
                        return;
                    }

                    setLoading(true);

                    clearAlert();


                    $.ajax({

                        url: $form.attr('action'),

                        method: 'POST',

                        data: $form.serialize(),

                        dataType: 'json',

                        headers: {
                            'Accept': 'application/json'
                        },

                        success: function (response) {

                            setLoading(false);


                            if (response.success) {

                                showSuccess(
                                    response.message ||
                                    'A new verification email has been sent to your inbox.'
                                );

                                startResendCooldown();

                                return;
                            }


                            showError(
                                response.message ||
                                'Unable to send the verification email.'
                            );

                        },


                        error: function (xhr) {

                            setLoading(false);


                            // -------------------------------------------------
                            // Validation / Laravel Error
                            // -------------------------------------------------

                            if (xhr.status === 422) {

                                const response =
                                    xhr.responseJSON;

                                let message =
                                    response?.message ||
                                    'Please check your request and try again.';

                                showError(message);

                                return;
                            }


                            // -------------------------------------------------
                            // Rate Limit
                            // -------------------------------------------------

                            if (xhr.status === 429) {

                                const response =
                                    xhr.responseJSON;

                                showError(
                                    response?.message ||
                                    'Please wait before requesting another verification email.'
                                );

                                return;
                            }


                            // -------------------------------------------------
                            // Unauthorized
                            // -------------------------------------------------

                            if (xhr.status === 401) {

                                showError(
                                    'Your session has expired. Please sign in again.'
                                );

                                return;
                            }


                            // -------------------------------------------------
                            // Generic Error
                            // -------------------------------------------------

                            const response =
                                xhr.responseJSON;

                            showError(
                                response?.message ||
                                'Something went wrong while sending the verification email.'
                            );

                        }

                    });

                }
            );


            // =========================================================
            // Loading State
            // =========================================================

            function setLoading(loading) {

                const $button =
                    $('#wm-verify-email-submit');


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
            // Success Alert
            // =========================================================

            function showSuccess(message) {

                const html = `

                <div class="wm-verify-email-page__alert wm-verify-email-page__alert--success">

                    <i class="ph ph-check-circle"></i>

                    <div>

                        <strong>
                            Email sent
                        </strong>

                        <span>
                            ${escapeHtml(message)}
                        </span>

                    </div>

                    <button
                        type="button"
                        class="wm-verify-email-page__alert-close"
                        data-alert-close
                        aria-label="Close"
                    >

                        <i class="ph ph-x"></i>

                    </button>

                </div>

            `;


                $('#wm-verify-email-alert')
                    .html(html);

            }


            // =========================================================
            // Error Alert
            // =========================================================

            function showError(message) {

                const html = `

                <div class="wm-verify-email-page__alert wm-verify-email-page__alert--danger">

                    <i class="ph ph-warning-circle"></i>

                    <div>

                        <strong>
                            Unable to send email
                        </strong>

                        <span>
                            ${escapeHtml(message)}
                        </span>

                    </div>

                    <button
                        type="button"
                        class="wm-verify-email-page__alert-close"
                        data-alert-close
                        aria-label="Close"
                    >

                        <i class="ph ph-x"></i>

                    </button>

                </div>

            `;


                $('#wm-verify-email-alert')
                    .html(html);

            }


            // =========================================================
            // Clear Alert
            // =========================================================

            function clearAlert() {

                $('#wm-verify-email-alert')
                    .empty();

            }


            // =========================================================
            // Resend Cooldown
            // =========================================================

            let resendTimer = null;


            function startResendCooldown() {

                const $button =
                    $('#wm-verify-email-submit');

                const $text =
                    $button.find(
                        '.wm-verify-email-page__resend-content span'
                    );


                let seconds = 60;


                $button.prop(
                    'disabled',
                    true
                );


                clearInterval(
                    resendTimer
                );


                $text.text(
                    'Resend available in ' +
                    seconds +
                    's'
                );


                resendTimer = setInterval(
                    function () {

                        seconds--;

                        if (seconds <= 0) {

                            clearInterval(
                                resendTimer
                            );


                            $button.prop(
                                'disabled',
                                false
                            );


                            $button.removeClass(
                                'is-loading'
                            );


                            $text.text(
                                'Resend verification email'
                            );


                            return;
                        }


                        $text.text(
                            'Resend available in ' +
                            seconds +
                            's'
                        );

                    },
                    1000
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
                            '.wm-verify-email-page__alert'
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
