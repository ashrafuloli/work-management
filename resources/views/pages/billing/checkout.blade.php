@extends('layout.app')

@section('main')

    <div class="wm-checkout-page">

        {{-- =========================================================
            Header
        ========================================================== --}}
        <div class="wm-checkout-header">

            <div class="wm-checkout-header__breadcrumb">

                <a href="{{ route('billing.index') }}">
                    Billing
                </a>

                <i class="ph ph-caret-right"></i>

                <a href="{{ route('billing.subscription') }}">
                    Subscription
                </a>

                <i class="ph ph-caret-right"></i>

                <span>
                Checkout
            </span>

            </div>

            <div class="wm-checkout-header__secure">

                <i class="ph ph-lock-key"></i>

                Secure checkout

            </div>

        </div>


        {{-- =========================================================
            Checkout Layout
        ========================================================== --}}
        <div class="wm-checkout-layout">

            <div class="wm-checkout-layout__main">


                {{-- =================================================
                    Step Indicator
                ================================================== --}}
                <div class="wm-checkout-steps">

                    <div class="wm-checkout-step is-active">

                    <span class="wm-checkout-step__number">
                        1
                    </span>

                        <div>
                            <strong>
                                Plan
                            </strong>

                            <small>
                                Choose your plan
                            </small>
                        </div>

                    </div>

                    <span class="wm-checkout-step__line is-active"></span>

                    <div class="wm-checkout-step is-active">

                    <span class="wm-checkout-step__number">
                        2
                    </span>

                        <div>
                            <strong>
                                Payment
                            </strong>

                            <small>
                                Payment details
                            </small>
                        </div>

                    </div>

                    <span class="wm-checkout-step__line"></span>

                    <div class="wm-checkout-step">

                    <span class="wm-checkout-step__number">
                        3
                    </span>

                        <div>
                            <strong>
                                Confirmation
                            </strong>

                            <small>
                                Complete checkout
                            </small>
                        </div>

                    </div>

                </div>


                {{-- =================================================
                    Selected Plan
                ================================================== --}}
                <section class="wm-checkout-card">

                    <div class="wm-checkout-card__header">

                        <div>

                            <h2>
                                Selected plan
                            </h2>

                            <p>
                                Review your subscription before payment.
                            </p>

                        </div>

                        <a
                            href="{{ route('billing.subscription') }}"
                            class="wm-checkout-card__edit"
                        >
                            <i class="ph ph-pencil-simple"></i>
                            Change
                        </a>

                    </div>


                    <div class="wm-checkout-plan">

                        <div class="wm-checkout-plan__icon">
                            <i class="ph ph-users-three"></i>
                        </div>

                        <div class="wm-checkout-plan__content">

                            <div class="wm-checkout-plan__title">

                                <h3>
                                    Professional
                                </h3>

                                <span>
                                20% yearly savings
                            </span>

                            </div>

                            <p>
                                Advanced project management for growing
                                teams.
                            </p>

                            <div class="wm-checkout-plan__features">

                            <span>
                                <i class="ph ph-check"></i>
                                Unlimited projects
                            </span>

                                <span>
                                <i class="ph ph-check"></i>
                                Unlimited members
                            </span>

                                <span>
                                <i class="ph ph-check"></i>
                                Advanced reports
                            </span>

                                <span>
                                <i class="ph ph-check"></i>
                                100 GB storage
                            </span>

                            </div>

                        </div>

                        <div class="wm-checkout-plan__price">

                            <strong>
                                $19.20
                            </strong>

                            <span>
                            / user / month
                        </span>

                        </div>

                    </div>

                </section>


                {{-- =================================================
                    Billing Details
                ================================================== --}}
                <section class="wm-checkout-card">

                    <div class="wm-checkout-card__header">

                        <div>

                            <h2>
                                Billing details
                            </h2>

                            <p>
                                Enter the information associated with
                                your billing account.
                            </p>

                        </div>

                    </div>


                    <div class="wm-checkout-form">

                        <div class="wm-checkout-form__row">

                            <div class="wm-checkout-field">

                                <label for="billingFirstName">
                                    First name
                                    <span>*</span>
                                </label>

                                <input
                                    type="text"
                                    id="billingFirstName"
                                    name="first_name"
                                    placeholder="John"
                                    value="John"
                                >

                            </div>


                            <div class="wm-checkout-field">

                                <label for="billingLastName">
                                    Last name
                                    <span>*</span>
                                </label>

                                <input
                                    type="text"
                                    id="billingLastName"
                                    name="last_name"
                                    placeholder="Doe"
                                    value="Doe"
                                >

                            </div>

                        </div>


                        <div class="wm-checkout-field">

                            <label for="billingEmail">
                                Billing email
                                <span>*</span>
                            </label>

                            <div class="wm-checkout-input-icon">

                                <i class="ph ph-envelope"></i>

                                <input
                                    type="email"
                                    id="billingEmail"
                                    name="email"
                                    placeholder="billing@example.com"
                                    value="billing@example.com"
                                >

                            </div>

                        </div>


                        <div class="wm-checkout-field">

                            <label for="billingCompany">
                                Company / Organization
                            </label>

                            <input
                                type="text"
                                id="billingCompany"
                                name="company"
                                placeholder="Research Organization"
                                value="Research Organization"
                            >

                        </div>


                        <div class="wm-checkout-form__row">

                            <div class="wm-checkout-field">

                                <label for="billingCountry">
                                    Country
                                    <span>*</span>
                                </label>

                                <select id="billingCountry">

                                    <option value="">
                                        Select country
                                    </option>

                                    <option selected>
                                        United States
                                    </option>

                                    <option>
                                        United Kingdom
                                    </option>

                                    <option>
                                        Canada
                                    </option>

                                    <option>
                                        Australia
                                    </option>

                                    <option>
                                        Bangladesh
                                    </option>

                                </select>

                            </div>


                            <div class="wm-checkout-field">

                                <label for="billingPostal">
                                    Postal code
                                    <span>*</span>
                                </label>

                                <input
                                    type="text"
                                    id="billingPostal"
                                    placeholder="10001"
                                    value="10001"
                                >

                            </div>

                        </div>

                    </div>

                </section>


                {{-- =================================================
                    Payment Method
                ================================================== --}}
                <section class="wm-checkout-card">

                    <div class="wm-checkout-card__header">

                        <div>

                            <h2>
                                Payment method
                            </h2>

                            <p>
                                Your payment information is securely
                                processed.
                            </p>

                        </div>

                        <div class="wm-payment-brands">

                            <i class="ph ph-credit-card"></i>

                            <span>
                            Visa
                        </span>

                            <span>
                            Mastercard
                        </span>

                        </div>

                    </div>


                    <div class="wm-payment-tabs">

                        <button
                            type="button"
                            class="wm-payment-tab is-active"
                            data-payment-method="card"
                        >
                            <i class="ph ph-credit-card"></i>
                            Card
                        </button>

                        <button
                            type="button"
                            class="wm-payment-tab"
                            data-payment-method="paypal"
                        >
                            <i class="ph ph-wallet"></i>
                            PayPal
                        </button>

                    </div>


                    <div
                        class="wm-payment-panel"
                        data-payment-panel="card"
                    >

                        <div class="wm-checkout-field">

                            <label for="cardNumber">
                                Card number
                                <span>*</span>
                            </label>

                            <div class="wm-checkout-input-icon">

                                <i class="ph ph-credit-card"></i>

                                <input
                                    type="text"
                                    id="cardNumber"
                                    inputmode="numeric"
                                    maxlength="19"
                                    placeholder="1234 5678 9012 4242"
                                >

                            </div>

                        </div>


                        <div class="wm-checkout-form__row">

                            <div class="wm-checkout-field">

                                <label for="cardExpiry">
                                    Expiration date
                                    <span>*</span>
                                </label>

                                <input
                                    type="text"
                                    id="cardExpiry"
                                    maxlength="5"
                                    placeholder="MM / YY"
                                >

                            </div>


                            <div class="wm-checkout-field">

                                <label for="cardCvc">
                                    CVC
                                    <span>*</span>
                                </label>

                                <div class="wm-checkout-input-icon">

                                    <i class="ph ph-lock"></i>

                                    <input
                                        type="password"
                                        id="cardCvc"
                                        maxlength="4"
                                        placeholder="123"
                                    >

                                </div>

                            </div>

                        </div>


                        <div class="wm-checkout-field">

                            <label for="cardName">
                                Name on card
                                <span>*</span>
                            </label>

                            <input
                                type="text"
                                id="cardName"
                                placeholder="John Doe"
                            >

                        </div>

                    </div>


                    <div
                        class="wm-payment-panel wm-payment-panel--paypal"
                        data-payment-panel="paypal"
                    >

                        <div class="wm-payment-placeholder">

                            <div class="wm-payment-placeholder__icon">
                                <i class="ph ph-wallet"></i>
                            </div>

                            <h3>
                                Continue with PayPal
                            </h3>

                            <p>
                                You will be redirected to PayPal to
                                securely complete your payment.
                            </p>

                            <button
                                type="button"
                                class="wm-btn wm-btn--light"
                                id="paypalContinue"
                            >
                                Continue with PayPal
                                <i class="ph ph-arrow-right"></i>
                            </button>

                        </div>

                    </div>


                    <label class="wm-checkout-checkbox">

                        <input
                            type="checkbox"
                            id="savePaymentMethod"
                            checked
                        >

                        <span class="wm-checkout-checkbox__box">
                        <i class="ph ph-check"></i>
                    </span>

                        <span>
                        Save this payment method for future billing
                    </span>

                    </label>

                </section>


                {{-- =================================================
                    Terms
                ================================================== --}}
                <label class="wm-checkout-checkbox wm-checkout-checkbox--terms">

                    <input
                        type="checkbox"
                        id="checkoutTerms"
                    >

                    <span class="wm-checkout-checkbox__box">
                    <i class="ph ph-check"></i>
                </span>

                    <span>
                    I agree to the
                    <a href="#">
                        Terms of Service
                    </a>
                    and
                    <a href="#">
                        Billing Terms
                    </a>.
                </span>

                </label>


                <div class="wm-checkout-mobile-action">

                    <button
                        type="button"
                        class="wm-btn wm-btn--primary"
                        id="mobilePlaceOrder"
                    >
                        Subscribe for $432.00
                        <i class="ph ph-arrow-right"></i>
                    </button>

                </div>

            </div>


            {{-- =====================================================
                Order Summary
            ====================================================== --}}
            <aside class="wm-checkout-layout__sidebar">

                <div class="wm-checkout-summary">

                    <div class="wm-checkout-summary__header">

                        <h2>
                            Order summary
                        </h2>

                        <span>
                        Monthly
                    </span>

                    </div>


                    <div class="wm-checkout-summary__plan">

                        <div>

                            <strong>
                                Professional
                            </strong>

                            <span>
                            18 team members
                        </span>

                        </div>

                        <strong>
                            $432.00
                        </strong>

                    </div>


                    <div class="wm-checkout-summary__rows">

                        <div>

                        <span>
                            Professional plan
                        </span>

                            <strong>
                                $432.00
                            </strong>

                        </div>

                        <div>

                        <span>
                            Additional seats
                        </span>

                            <strong>
                                $0.00
                            </strong>

                        </div>

                        <div>

                        <span>
                            Discount
                        </span>

                            <strong class="is-discount">
                                -$0.00
                            </strong>

                        </div>

                    </div>


                    <div class="wm-checkout-summary__total">

                    <span>
                        Total today
                    </span>

                        <strong>
                            $432.00
                        </strong>

                    </div>


                    <div class="wm-checkout-summary__renewal">

                        <i class="ph ph-calendar-check"></i>

                        <p>
                            Your subscription will renew automatically
                            on October 24, 2026 for $432.00 unless
                            cancelled.
                        </p>

                    </div>


                    <button
                        type="button"
                        class="wm-btn wm-btn--primary wm-checkout-summary__submit"
                        id="placeOrder"
                    >
                        <i class="ph ph-lock-key"></i>
                        Complete Subscription
                    </button>


                    <div class="wm-checkout-summary__secure">

                        <i class="ph ph-shield-check"></i>

                        Secure payment processing

                    </div>

                </div>


                {{-- Trust Card --}}
                <div class="wm-checkout-trust">

                    <div class="wm-checkout-trust__item">

                        <i class="ph ph-lock-simple"></i>

                        <div>

                            <strong>
                                Secure checkout
                            </strong>

                            <span>
                            Your payment information is encrypted.
                        </span>

                        </div>

                    </div>


                    <div class="wm-checkout-trust__item">

                        <i class="ph ph-arrow-counter-clockwise"></i>

                        <div>

                            <strong>
                                Cancel anytime
                            </strong>

                            <span>
                            Manage your subscription whenever you need.
                        </span>

                        </div>

                    </div>


                    <div class="wm-checkout-trust__item">

                        <i class="ph ph-headset"></i>

                        <div>

                            <strong>
                                Support included
                            </strong>

                            <span>
                            Our team is available when you need help.
                        </span>

                        </div>

                    </div>

                </div>

            </aside>

        </div>

    </div>

@endsection


@push('script')
    <script>
        $(document).ready(function () {

            'use strict';


            /* =====================================================
             * Elements
             * =================================================== */

            const $paymentTabs =
                $('[data-payment-method]');

            const $paymentPanels =
                $('[data-payment-panel]');

            const $placeOrder =
                $('#placeOrder');

            const $terms =
                $('#checkoutTerms');


            /* =====================================================
             * Payment Method
             * =================================================== */

            function switchPaymentMethod(method) {

                $paymentTabs
                    .removeClass('is-active');

                $paymentTabs
                    .filter(
                        '[data-payment-method="' + method + '"]'
                    )
                    .addClass('is-active');


                $paymentPanels
                    .hide();

                $paymentPanels
                    .filter(
                        '[data-payment-panel="' + method + '"]'
                    )
                    .fadeIn(180);

            }


            $(document).on(
                'click',
                '[data-payment-method]',
                function () {

                    const method =
                        $(this).data('payment-method');

                    switchPaymentMethod(method);

                }
            );


            /* =====================================================
             * Card Number Formatting
             * =================================================== */

            $('#cardNumber').on(
                'input',
                function () {

                    let value =
                        $(this)
                            .val()
                            .replace(/\D/g, '')
                            .substring(0, 16);

                    value =
                        value.match(/.{1,4}/g);

                    $(this).val(
                        value
                            ? value.join(' ')
                            : ''
                    );

                }
            );


            /* =====================================================
             * Expiry Formatting
             * =================================================== */

            $('#cardExpiry').on(
                'input',
                function () {

                    let value =
                        $(this)
                            .val()
                            .replace(/\D/g, '')
                            .substring(0, 4);


                    if (value.length >= 3) {

                        value =
                            value.substring(0, 2)
                            + ' / '
                            + value.substring(2);

                    }


                    $(this).val(value);

                }
            );


            /* =====================================================
             * Terms State
             * =================================================== */

            function updateSubmitState() {

                const accepted =
                    $terms.is(':checked');


                $placeOrder
                    .prop('disabled', !accepted);

                $('#mobilePlaceOrder')
                    .prop('disabled', !accepted);

            }


            $terms.on(
                'change',
                updateSubmitState
            );


            /* =====================================================
             * Checkout Validation
             * =================================================== */

            function validateCheckout() {

                const requiredFields = [
                    '#billingFirstName',
                    '#billingLastName',
                    '#billingEmail',
                    '#billingCountry',
                    '#billingPostal'
                ];


                let valid = true;


                $.each(
                    requiredFields,
                    function (_, selector) {

                        const $field =
                            $(selector);

                        if (!$field.val().trim()) {

                            $field.addClass('is-invalid');

                            valid = false;

                        } else {

                            $field.removeClass('is-invalid');

                        }

                    }
                );


                if (!$terms.is(':checked')) {

                    Swal.fire({

                        icon: 'warning',

                        title: 'Accept the terms',

                        text:
                            'Please agree to the Terms of Service and Billing Terms before continuing.',

                        confirmButtonText: 'Close'

                    });

                    return false;
                }


                if (!valid) {

                    Swal.fire({

                        icon: 'warning',

                        title: 'Complete your details',

                        text:
                            'Please complete all required billing fields.',

                        confirmButtonText: 'Close'

                    });

                    return false;
                }


                return true;

            }


            /* =====================================================
             * Complete Subscription
             * =================================================== */

            $(document).on(
                'click',
                '#placeOrder, #mobilePlaceOrder',
                function () {

                    if (!validateCheckout()) {
                        return;
                    }


                    const $button =
                        $(this);

                    const originalHtml =
                        $button.html();


                    $button
                        .prop('disabled', true)
                        .html(
                            '<i class="ph ph-spinner-gap ph-spin"></i> Processing...'
                        );


                    setTimeout(function () {

                        $button
                            .html(originalHtml)
                            .prop('disabled', false);


                        Swal.fire({

                            icon: 'success',

                            title:
                                'Subscription created',

                            text:
                                'Your Professional subscription has been successfully created.',

                            confirmButtonText:
                                'Continue'

                        }).then(function () {

                            window.location.href =
                                "{{ route('billing.success') }}";

                        });

                    }, 1200);

                }
            );


            /* =====================================================
             * PayPal
             * =================================================== */

            $('#paypalContinue').on(
                'click',
                function () {

                    if (!$terms.is(':checked')) {

                        Swal.fire({

                            icon: 'warning',

                            title: 'Accept the terms',

                            text:
                                'Please agree to the Terms of Service before continuing.',

                            confirmButtonText: 'Close'

                        });

                        return;
                    }


                    Swal.fire({

                        icon: 'info',

                        title: 'PayPal checkout',

                        text:
                            'Connect this action to your PayPal payment flow.',

                        confirmButtonText: 'Continue'

                    });

                }
            );


            /* =====================================================
             * Remove Invalid State
             * =================================================== */

            $(document).on(
                'input change',
                '.wm-checkout-field input, .wm-checkout-field select',
                function () {

                    if ($(this).val().trim()) {

                        $(this)
                            .removeClass('is-invalid');

                    }

                }
            );


            /* =====================================================
             * Initial
             * =================================================== */

            switchPaymentMethod('card');

            updateSubmitState();

        });
    </script>
@endpush
