@extends('layout.app')

@section('main')

    <div class="wm-subscription-page">

        {{-- =========================================================
            Header
        ========================================================== --}}
        <div class="wm-subscription-header">

            <div class="wm-subscription-header__content">

                <div class="wm-subscription-header__breadcrumb">

                    <a href="{{ route('billing.index') }}">
                        Billing
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>
                    Subscription
                </span>

                </div>

                <h1 class="wm-subscription-header__title">
                    Subscription
                </h1>

                <p class="wm-subscription-header__description">
                    Manage your plan, billing cycle and subscription settings.
                </p>

            </div>

            <a
                href="{{ route('pricing') }}"
                class="wm-btn wm-btn--light"
            >
                <i class="ph ph-tag"></i>
                Compare Plans
            </a>

        </div>


        {{-- =========================================================
            Current Subscription
        ========================================================== --}}
        <section class="wm-subscription-current">

            <div class="wm-subscription-current__main">

                <div class="wm-subscription-current__icon">
                    <i class="ph ph-crown-simple"></i>
                </div>

                <div class="wm-subscription-current__content">

                    <div class="wm-subscription-current__title-row">

                        <h2>
                            Professional
                        </h2>

                        <span class="wm-subscription-current__status">
                        Active
                    </span>

                    </div>

                    <p>
                        Your current subscription includes all
                        Professional features.
                    </p>

                    <div class="wm-subscription-current__meta">

                    <span>
                        <i class="ph ph-calendar-blank"></i>
                        Renews October 24, 2026
                    </span>

                        <span>
                        <i class="ph ph-credit-card"></i>
                        $432 / month
                    </span>

                    </div>

                </div>

            </div>

            <div class="wm-subscription-current__actions">

                <button
                    type="button"
                    class="wm-btn wm-btn--light"
                    data-subscription-action="change"
                >
                    Change Plan
                </button>

                <button
                    type="button"
                    class="wm-btn wm-btn--danger-light"
                    data-subscription-action="cancel"
                >
                    Cancel Plan
                </button>

            </div>

        </section>


        {{-- =========================================================
            Billing Cycle
        ========================================================== --}}
        <section class="wm-subscription-section">

            <div class="wm-subscription-section__header">

                <div>

                    <h2>
                        Billing cycle
                    </h2>

                    <p>
                        Choose how often you want to be billed.
                    </p>

                </div>

            </div>


            <div class="wm-billing-cycle-options">

                <label class="wm-billing-cycle-option is-active">

                    <input
                        type="radio"
                        name="billing_cycle"
                        value="monthly"
                        checked
                    >

                    <span class="wm-billing-cycle-option__radio"></span>

                    <span class="wm-billing-cycle-option__content">

                    <strong>
                        Monthly
                    </strong>

                    <small>
                        Pay every month
                    </small>

                </span>

                    <span class="wm-billing-cycle-option__price">
                    $24
                    <small>/ user / month</small>
                </span>

                </label>


                <label class="wm-billing-cycle-option">

                    <input
                        type="radio"
                        name="billing_cycle"
                        value="yearly"
                    >

                    <span class="wm-billing-cycle-option__radio"></span>

                    <span class="wm-billing-cycle-option__content">

                    <strong>
                        Yearly
                    </strong>

                    <small>
                        Pay annually and save 20%
                    </small>

                </span>

                    <span class="wm-billing-cycle-option__price">
                    $19.20
                    <small>/ user / month</small>

                    <em>
                        Save 20%
                    </em>
                </span>

                </label>

            </div>

        </section>


        {{-- =========================================================
            Available Plans
        ========================================================== --}}
        <section class="wm-subscription-section">

            <div class="wm-subscription-section__header">

                <div>

                    <h2>
                        Available plans
                    </h2>

                    <p>
                        Upgrade or downgrade your workspace plan.
                    </p>

                </div>

            </div>


            <div class="wm-subscription-plans">


                {{-- Free --}}
                <article
                    class="wm-subscription-plan"
                    data-plan="free"
                >

                    <div class="wm-subscription-plan__top">

                        <div class="wm-subscription-plan__icon wm-subscription-plan__icon--gray">
                            <i class="ph ph-user"></i>
                        </div>

                        <span class="wm-subscription-plan__badge">
                        Free
                    </span>

                    </div>

                    <h3>
                        Free
                    </h3>

                    <p>
                        For individuals getting started.
                    </p>

                    <div class="wm-subscription-plan__price">

                        <strong>
                            $0
                        </strong>

                        <span>
                        /month
                    </span>

                    </div>

                    <button
                        type="button"
                        class="wm-subscription-plan__button wm-subscription-plan__button--disabled"
                        disabled
                    >
                        Current Plan History
                    </button>

                    <ul>

                        <li>
                            <i class="ph ph-check"></i>
                            3 projects
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            5 members
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Basic task management
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            1 GB storage
                        </li>

                    </ul>

                </article>


                {{-- Starter --}}
                <article
                    class="wm-subscription-plan"
                    data-plan="starter"
                >

                    <div class="wm-subscription-plan__top">

                        <div class="wm-subscription-plan__icon wm-subscription-plan__icon--blue">
                            <i class="ph ph-rocket"></i>
                        </div>

                        <span class="wm-subscription-plan__badge">
                        Starter
                    </span>

                    </div>

                    <h3>
                        Starter
                    </h3>

                    <p>
                        For small growing teams.
                    </p>

                    <div class="wm-subscription-plan__price">

                        <strong
                            data-monthly="12"
                            data-yearly="9.60"
                        >
                            $12
                        </strong>

                        <span>
                        /user/month
                    </span>

                    </div>

                    <button
                        type="button"
                        class="wm-subscription-plan__button"
                        data-plan-action="change"
                        data-plan="Starter"
                    >
                        Switch to Starter
                    </button>

                    <ul>

                        <li>
                            <i class="ph ph-check"></i>
                            Unlimited projects
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            15 members
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Calendar
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            25 GB storage
                        </li>

                    </ul>

                </article>


                {{-- Professional --}}
                <article
                    class="wm-subscription-plan wm-subscription-plan--current"
                    data-plan="professional"
                >

                    <div class="wm-subscription-plan__popular">
                        Current plan
                    </div>

                    <div class="wm-subscription-plan__top">

                        <div class="wm-subscription-plan__icon wm-subscription-plan__icon--primary">
                            <i class="ph ph-users-three"></i>
                        </div>

                        <span class="wm-subscription-plan__badge">
                        Professional
                    </span>

                    </div>

                    <h3>
                        Professional
                    </h3>

                    <p>
                        For growing research teams.
                    </p>

                    <div class="wm-subscription-plan__price">

                        <strong
                            data-monthly="24"
                            data-yearly="19.20"
                        >
                            $24
                        </strong>

                        <span>
                        /user/month
                    </span>

                    </div>

                    <button
                        type="button"
                        class="wm-subscription-plan__button wm-subscription-plan__button--current"
                        disabled
                    >
                        Current Plan
                    </button>

                    <ul>

                        <li>
                            <i class="ph ph-check"></i>
                            Unlimited members
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Gantt timeline
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Advanced reports
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            100 GB storage
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Automations
                        </li>

                    </ul>

                </article>


                {{-- Enterprise --}}
                <article
                    class="wm-subscription-plan"
                    data-plan="enterprise"
                >

                    <div class="wm-subscription-plan__top">

                        <div class="wm-subscription-plan__icon wm-subscription-plan__icon--purple">
                            <i class="ph ph-buildings"></i>
                        </div>

                        <span class="wm-subscription-plan__badge">
                        Enterprise
                    </span>

                    </div>

                    <h3>
                        Enterprise
                    </h3>

                    <p>
                        For advanced organizations.
                    </p>

                    <div class="wm-subscription-plan__price">

                        <strong>
                            Custom
                        </strong>

                    </div>

                    <button
                        type="button"
                        class="wm-subscription-plan__button"
                        data-plan-action="contact"
                        data-plan="Enterprise"
                    >
                        Contact Sales
                    </button>

                    <ul>

                        <li>
                            <i class="ph ph-check"></i>
                            Unlimited storage
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            SSO & SAML
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Audit logs
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Dedicated support
                        </li>

                    </ul>

                </article>

            </div>

        </section>


        {{-- =========================================================
            Subscription Preview
        ========================================================== --}}
        <section class="wm-subscription-section">

            <div class="wm-subscription-section__header">

                <div>

                    <h2>
                        Subscription summary
                    </h2>

                    <p>
                        Review your current billing configuration.
                    </p>

                </div>

            </div>


            <div class="wm-subscription-summary">

                <div class="wm-subscription-summary__details">

                    <div class="wm-subscription-summary__row">

                    <span>
                        Plan
                    </span>

                        <strong>
                            Professional
                        </strong>

                    </div>

                    <div class="wm-subscription-summary__row">

                    <span>
                        Team members
                    </span>

                        <strong>
                            18 users
                        </strong>

                    </div>

                    <div class="wm-subscription-summary__row">

                    <span>
                        Billing cycle
                    </span>

                        <strong id="summaryBillingCycle">
                            Monthly
                        </strong>

                    </div>

                    <div class="wm-subscription-summary__row">

                    <span>
                        Price per user
                    </span>

                        <strong id="summaryPrice">
                            $24.00
                        </strong>

                    </div>

                </div>


                <div class="wm-subscription-summary__total">

                <span>
                    Estimated recurring total
                </span>

                    <strong id="summaryTotal">
                        $432.00
                    </strong>

                    <small>
                        Before applicable taxes
                    </small>

                    <button
                        type="button"
                        class="wm-btn wm-btn--primary"
                        data-subscription-action="save"
                    >
                        <i class="ph ph-check"></i>
                        Save Changes
                    </button>

                </div>

            </div>

        </section>


        {{-- =========================================================
            Cancellation
        ========================================================== --}}
        <section class="wm-subscription-cancel">

            <div class="wm-subscription-cancel__content">

                <div class="wm-subscription-cancel__icon">
                    <i class="ph ph-warning-circle"></i>
                </div>

                <div>

                    <h3>
                        Cancel your subscription
                    </h3>

                    <p>
                        If you cancel, your workspace will remain active
                        until the end of the current billing period.
                    </p>

                </div>

            </div>

            <button
                type="button"
                class="wm-btn wm-btn--danger-light"
                data-subscription-action="cancel"
            >
                Cancel Subscription
            </button>

        </section>

    </div>

@endsection


@push('script')
    <script>
        $(document).ready(function () {

            'use strict';


            /* =====================================================
             * Elements
             * =================================================== */

            const $cycleOptions =
                $('.wm-billing-cycle-option');

            const $planPrices =
                $('[data-monthly][data-yearly]');

            const teamMembers =
                18;

            let billingCycle =
                'monthly';


            /* =====================================================
             * Update Billing Cycle
             * =================================================== */

            function updateBillingCycle(cycle) {

                billingCycle = cycle;


                $cycleOptions
                    .removeClass('is-active');

                $cycleOptions
                    .has('input[value="' + cycle + '"]')
                    .addClass('is-active');


                $planPrices.each(function () {

                    const $price =
                        $(this);

                    const monthly =
                        $price.attr('data-monthly');

                    const yearly =
                        $price.attr('data-yearly');


                    if (cycle === 'yearly') {

                        $price.text('$' + yearly);

                    } else {

                        $price.text('$' + monthly);

                    }

                });


                const currentPrice =
                    cycle === 'yearly'
                        ? 19.20
                        : 24;


                const total =
                    currentPrice * teamMembers;


                $('#summaryBillingCycle')
                    .text(
                        cycle === 'yearly'
                            ? 'Yearly'
                            : 'Monthly'
                    );


                $('#summaryPrice')
                    .text(
                        '$' + currentPrice.toFixed(2)
                    );


                $('#summaryTotal')
                    .text(
                        '$' + total.toFixed(2)
                    );

            }


            /* =====================================================
             * Billing Cycle Selection
             * =================================================== */

            $(document).on(
                'change',
                'input[name="billing_cycle"]',
                function () {

                    updateBillingCycle(
                        $(this).val()
                    );

                }
            );


            /* =====================================================
             * Plan Actions
             * =================================================== */

            $(document).on(
                'click',
                '[data-plan-action]',
                function () {

                    const action =
                        $(this).data('plan-action');

                    const plan =
                        $(this).data('plan');


                    if (action === 'change') {

                        Swal.fire({

                            title:
                                'Switch to ' + plan + '?',

                            text:
                                'Your subscription change can be connected to the checkout flow.',

                            icon: 'question',

                            showCancelButton: true,

                            confirmButtonText: 'Continue',

                            cancelButtonText: 'Cancel',

                            reverseButtons: true

                        }).then(function (result) {

                            if (!result.isConfirmed) {
                                return;
                            }

                            window.location.href =
                                "{{ route('billing.checkout') }}";

                        });

                        return;
                    }


                    if (action === 'contact') {

                        Swal.fire({

                            title:
                                'Contact Sales',

                            text:
                                'Connect this action to your enterprise sales workflow.',

                            icon: 'info',

                            confirmButtonText: 'Close'

                        });

                    }

                }
            );


            /* =====================================================
             * Subscription Actions
             * =================================================== */

            $(document).on(
                'click',
                '[data-subscription-action]',
                function () {

                    const action =
                        $(this).data('subscription-action');


                    if (action === 'change') {

                        $('html, body')
                            .animate({
                                scrollTop:
                                    $('.wm-subscription-section')
                                        .first()
                                        .offset()
                                        .top - 30
                            }, 350);

                        return;
                    }


                    if (action === 'save') {

                        Swal.fire({

                            title:
                                'Save subscription changes?',

                            text:
                                'Your selected billing configuration will be applied to the subscription.',

                            icon: 'question',

                            showCancelButton: true,

                            confirmButtonText: 'Save Changes',

                            cancelButtonText: 'Cancel',

                            reverseButtons: true

                        }).then(function (result) {

                            if (!result.isConfirmed) {
                                return;
                            }


                            Swal.fire({

                                title:
                                    'Changes saved',

                                text:
                                    'Your subscription settings have been updated.',

                                icon: 'success',

                                confirmButtonText: 'Done'

                            });

                        });

                        return;
                    }


                    if (action === 'cancel') {

                        Swal.fire({

                            title:
                                'Cancel subscription?',

                            text:
                                'Your Professional plan will remain active until the end of your current billing period.',

                            icon: 'warning',

                            showCancelButton: true,

                            confirmButtonText:
                                'Yes, cancel subscription',

                            cancelButtonText:
                                'Keep subscription',

                            confirmButtonColor:
                                '#EF4444',

                            reverseButtons: true

                        }).then(function (result) {

                            if (!result.isConfirmed) {
                                return;
                            }


                            Swal.fire({

                                title:
                                    'Cancellation requested',

                                text:
                                    'The cancellation flow can be connected to your subscription service.',

                                icon: 'success',

                                confirmButtonText:
                                    'Done'

                            });

                        });

                    }

                }
            );


            /* =====================================================
             * Initial
             * =================================================== */

            updateBillingCycle('monthly');

        });
    </script>
@endpush
