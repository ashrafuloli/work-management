@extends('layout.app')

@section('main')

    <div class="wm-billing-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}
        <div class="wm-billing-header">

            <div class="wm-billing-header__content">

                <div class="wm-billing-header__breadcrumb">
                    <a href="{{ route('settings.index') }}">
                        Settings
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>
                    Billing
                </span>
                </div>

                <h1 class="wm-billing-header__title">
                    Billing & Subscription
                </h1>

                <p class="wm-billing-header__description">
                    Manage your subscription, payment methods,
                    invoices and workspace usage.
                </p>

            </div>

            <div class="wm-billing-header__actions">

                <a
                    href="{{ route('pricing') }}"
                    class="wm-btn wm-btn--light"
                >
                    <i class="ph ph-tag"></i>
                    View Plans
                </a>

                <a
                    href="{{ route('billing.checkout') }}"
                    class="wm-btn wm-btn--primary"
                >
                    <i class="ph ph-arrow-up"></i>
                    Upgrade Plan
                </a>

            </div>

        </div>


        {{-- =========================================================
            Current Plan Banner
        ========================================================== --}}
        <section class="wm-billing-plan">

            <div class="wm-billing-plan__main">

                <div class="wm-billing-plan__icon">
                    <i class="ph ph-users-three"></i>
                </div>

                <div class="wm-billing-plan__content">

                    <div class="wm-billing-plan__title-row">

                        <h2>
                            Professional
                        </h2>

                        <span class="wm-billing-plan__status">
                        Active
                    </span>

                    </div>

                    <p>
                        Your Professional plan renews on
                        <strong>October 24, 2026</strong>.
                    </p>

                    <div class="wm-billing-plan__meta">

                    <span>
                        <i class="ph ph-users"></i>
                        18 members
                    </span>

                        <span>
                        <i class="ph ph-calendar-blank"></i>
                        Monthly billing
                    </span>

                        <span>
                        <i class="ph ph-credit-card"></i>
                        Visa ending 4242
                    </span>

                    </div>

                </div>

            </div>


            <div class="wm-billing-plan__price">

                <strong>
                    $432
                </strong>

                <span>
                / month
            </span>

                <small>
                    Next invoice Oct 24
                </small>

            </div>

        </section>


        {{-- =========================================================
            Billing Summary
        ========================================================== --}}
        <section class="wm-billing-summary">

            <div class="wm-billing-summary__card">

                <div class="wm-billing-summary__icon wm-billing-summary__icon--blue">
                    <i class="ph ph-receipt"></i>
                </div>

                <div>

                <span>
                    Current invoice
                </span>

                    <strong>
                        $432.00
                    </strong>

                    <small>
                        Due Oct 24, 2026
                    </small>

                </div>

            </div>


            <div class="wm-billing-summary__card">

                <div class="wm-billing-summary__icon wm-billing-summary__icon--green">
                    <i class="ph ph-chart-line-up"></i>
                </div>

                <div>

                <span>
                    Monthly usage
                </span>

                    <strong>
                        72%
                    </strong>

                    <small>
                        Within plan limits
                    </small>

                </div>

            </div>


            <div class="wm-billing-summary__card">

                <div class="wm-billing-summary__icon wm-billing-summary__icon--purple">
                    <i class="ph ph-calendar-check"></i>
                </div>

                <div>

                <span>
                    Billing cycle
                </span>

                    <strong>
                        Monthly
                    </strong>

                    <small>
                        Renews Oct 24
                    </small>

                </div>

            </div>


            <div class="wm-billing-summary__card">

                <div class="wm-billing-summary__icon wm-billing-summary__icon--orange">
                    <i class="ph ph-wallet"></i>
                </div>

                <div>

                <span>
                    Total spent
                </span>

                    <strong>
                        $3,456
                    </strong>

                    <small>
                        This year
                    </small>

                </div>

            </div>

        </section>


        {{-- =========================================================
            Main Billing Grid
        ========================================================== --}}
        <div class="wm-billing-layout">

            <div class="wm-billing-layout__main">


                {{-- =================================================
                    Usage
                ================================================== --}}
                <section class="wm-billing-card">

                    <div class="wm-billing-card__header">

                        <div>

                            <h2>
                                Plan usage
                            </h2>

                            <p>
                                Monitor your workspace usage against
                                your Professional plan limits.
                            </p>

                        </div>

                        <a
                            href="{{ route('pricing') }}"
                            class="wm-billing-card__link"
                        >
                            Manage plan
                            <i class="ph ph-arrow-right"></i>
                        </a>

                    </div>


                    <div class="wm-usage-list">


                        <div class="wm-usage-item">

                            <div class="wm-usage-item__header">

                                <div class="wm-usage-item__label">

                                    <i class="ph ph-users-three"></i>

                                    <span>
                                    Team members
                                </span>

                                </div>

                                <strong>
                                    18 / Unlimited
                                </strong>

                            </div>

                            <div class="wm-usage-item__progress">

                            <span
                                style="width: 18%;"
                            ></span>

                            </div>

                            <p>
                                18 active members in your workspace
                            </p>

                        </div>


                        <div class="wm-usage-item">

                            <div class="wm-usage-item__header">

                                <div class="wm-usage-item__label">

                                    <i class="ph ph-folder-simple"></i>

                                    <span>
                                    Projects
                                </span>

                                </div>

                                <strong>
                                    24 / Unlimited
                                </strong>

                            </div>

                            <div class="wm-usage-item__progress">

                            <span
                                style="width: 34%;"
                            ></span>

                            </div>

                            <p>
                                24 active projects
                            </p>

                        </div>


                        <div class="wm-usage-item">

                            <div class="wm-usage-item__header">

                                <div class="wm-usage-item__label">

                                    <i class="ph ph-cloud"></i>

                                    <span>
                                    Storage
                                </span>

                                </div>

                                <strong>
                                    72 GB / 100 GB
                                </strong>

                            </div>

                            <div class="wm-usage-item__progress wm-usage-item__progress--warning">

                            <span
                                style="width: 72%;"
                            ></span>

                            </div>

                            <p>
                                28 GB remaining
                            </p>

                        </div>


                        <div class="wm-usage-item">

                            <div class="wm-usage-item__header">

                                <div class="wm-usage-item__label">

                                    <i class="ph ph-robot"></i>

                                    <span>
                                    Automation runs
                                </span>

                                </div>

                                <strong>
                                    7,240 / 10,000
                                </strong>

                            </div>

                            <div class="wm-usage-item__progress">

                            <span
                                style="width: 72.4%;"
                            ></span>

                            </div>

                            <p>
                                2,760 automation runs remaining
                            </p>

                        </div>

                    </div>

                </section>


                {{-- =================================================
                    Payment Method
                ================================================== --}}
                <section class="wm-billing-card">

                    <div class="wm-billing-card__header">

                        <div>

                            <h2>
                                Payment method
                            </h2>

                            <p>
                                Your default payment method for
                                subscription invoices.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="wm-btn wm-btn--light wm-btn--sm"
                            data-billing-action="payment"
                        >
                            <i class="ph ph-pencil-simple"></i>
                            Edit
                        </button>

                    </div>


                    <div class="wm-payment-method">

                        <div class="wm-payment-method__brand">
                            <i class="ph ph-credit-card"></i>
                        </div>

                        <div class="wm-payment-method__details">

                            <strong>
                                Visa ending in 4242
                            </strong>

                            <span>
                            Expires 08/2029
                        </span>

                        </div>

                        <span class="wm-payment-method__default">
                        Default
                    </span>

                    </div>

                </section>


                {{-- =================================================
                    Invoice History
                ================================================== --}}
                <section class="wm-billing-card">

                    <div class="wm-billing-card__header">

                        <div>

                            <h2>
                                Invoice history
                            </h2>

                            <p>
                                View and download your previous invoices.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="wm-billing-card__link"
                            data-billing-action="all-invoices"
                        >
                            View all
                            <i class="ph ph-arrow-right"></i>
                        </button>

                    </div>


                    <div class="wm-invoice-table-wrapper">

                        <table class="wm-invoice-table">

                            <thead>

                            <tr>

                                <th>
                                    Invoice
                                </th>

                                <th>
                                    Date
                                </th>

                                <th>
                                    Amount
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Action
                                </th>

                            </tr>

                            </thead>

                            <tbody>

                            <tr>

                                <td>
                                    <div class="wm-invoice-table__name">

                                        <span class="wm-invoice-table__icon">
                                            <i class="ph ph-file-text"></i>
                                        </span>

                                        <div>
                                            <strong>
                                                INV-2026-009
                                            </strong>

                                            <small>
                                                Professional Plan
                                            </small>
                                        </div>

                                    </div>
                                </td>

                                <td>
                                    Sep 24, 2026
                                </td>

                                <td>
                                    $432.00
                                </td>

                                <td>
                                    <span class="wm-invoice-status wm-invoice-status--paid">
                                        Paid
                                    </span>
                                </td>

                                <td>

                                    <button
                                        type="button"
                                        class="wm-icon-btn"
                                        title="Download"
                                        data-billing-action="download"
                                        data-invoice="INV-2026-009"
                                    >
                                        <i class="ph ph-download-simple"></i>
                                    </button>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <div class="wm-invoice-table__name">

                                        <span class="wm-invoice-table__icon">
                                            <i class="ph ph-file-text"></i>
                                        </span>

                                        <div>
                                            <strong>
                                                INV-2026-008
                                            </strong>

                                            <small>
                                                Professional Plan
                                            </small>
                                        </div>

                                    </div>
                                </td>

                                <td>
                                    Aug 24, 2026
                                </td>

                                <td>
                                    $432.00
                                </td>

                                <td>
                                    <span class="wm-invoice-status wm-invoice-status--paid">
                                        Paid
                                    </span>
                                </td>

                                <td>

                                    <button
                                        type="button"
                                        class="wm-icon-btn"
                                        title="Download"
                                        data-billing-action="download"
                                        data-invoice="INV-2026-008"
                                    >
                                        <i class="ph ph-download-simple"></i>
                                    </button>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <div class="wm-invoice-table__name">

                                        <span class="wm-invoice-table__icon">
                                            <i class="ph ph-file-text"></i>
                                        </span>

                                        <div>
                                            <strong>
                                                INV-2026-007
                                            </strong>

                                            <small>
                                                Professional Plan
                                            </small>
                                        </div>

                                    </div>
                                </td>

                                <td>
                                    Jul 24, 2026
                                </td>

                                <td>
                                    $432.00
                                </td>

                                <td>
                                    <span class="wm-invoice-status wm-invoice-status--paid">
                                        Paid
                                    </span>
                                </td>

                                <td>

                                    <button
                                        type="button"
                                        class="wm-icon-btn"
                                        title="Download"
                                        data-billing-action="download"
                                        data-invoice="INV-2026-007"
                                    >
                                        <i class="ph ph-download-simple"></i>
                                    </button>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <div class="wm-invoice-table__name">

                                        <span class="wm-invoice-table__icon">
                                            <i class="ph ph-file-text"></i>
                                        </span>

                                        <div>
                                            <strong>
                                                INV-2026-006
                                            </strong>

                                            <small>
                                                Professional Plan
                                            </small>
                                        </div>

                                    </div>
                                </td>

                                <td>
                                    Jun 24, 2026
                                </td>

                                <td>
                                    $432.00
                                </td>

                                <td>
                                    <span class="wm-invoice-status wm-invoice-status--paid">
                                        Paid
                                    </span>
                                </td>

                                <td>

                                    <button
                                        type="button"
                                        class="wm-icon-btn"
                                        title="Download"
                                        data-billing-action="download"
                                        data-invoice="INV-2026-006"
                                    >
                                        <i class="ph ph-download-simple"></i>
                                    </button>

                                </td>

                            </tr>

                            </tbody>

                        </table>

                    </div>

                </section>

            </div>


            {{-- =====================================================
                Sidebar
            ====================================================== --}}
            <aside class="wm-billing-layout__sidebar">


                {{-- =================================================
                    Billing Cycle
                ================================================== --}}
                <section class="wm-billing-side-card">

                    <div class="wm-billing-side-card__header">

                        <div class="wm-billing-side-card__icon">
                            <i class="ph ph-calendar-blank"></i>
                        </div>

                        <div>

                            <h3>
                                Billing cycle
                            </h3>

                            <span>
                            Current cycle
                        </span>

                        </div>

                    </div>


                    <div class="wm-billing-cycle">

                        <div class="wm-billing-cycle__dates">

                        <span>
                            Sep 24
                        </span>

                            <span>
                            Oct 24
                        </span>

                        </div>

                        <div class="wm-billing-cycle__progress">

                            <span style="width: 8%;"></span>

                        </div>

                        <p>
                            1 day into your current billing cycle
                        </p>

                    </div>


                    <a
                        href="{{ route('billing.subscription') }}"
                        class="wm-billing-side-card__link"
                    >
                        Manage subscription
                        <i class="ph ph-arrow-right"></i>
                    </a>

                </section>


                {{-- =================================================
                    Quick Actions
                ================================================== --}}
                <section class="wm-billing-side-card">

                    <div class="wm-billing-side-card__heading">
                        Quick actions
                    </div>

                    <div class="wm-billing-actions">

                        <button
                            type="button"
                            data-billing-action="payment"
                        >
                            <i class="ph ph-credit-card"></i>
                            Update payment method
                            <i class="ph ph-caret-right"></i>
                        </button>

                        <a href="{{ route('billing.subscription') }}">
                            <i class="ph ph-repeat"></i>
                            Change subscription
                            <i class="ph ph-caret-right"></i>
                        </a>

                        <button
                            type="button"
                            data-billing-action="tax"
                        >
                            <i class="ph ph-receipt"></i>
                            Billing information
                            <i class="ph ph-caret-right"></i>
                        </button>

                        <button
                            type="button"
                            data-billing-action="support"
                        >
                            <i class="ph ph-question"></i>
                            Contact billing support
                            <i class="ph ph-caret-right"></i>
                        </button>

                    </div>

                </section>


                {{-- =================================================
                    Billing Help
                ================================================== --}}
                <section class="wm-billing-help">

                    <div class="wm-billing-help__icon">
                        <i class="ph ph-headset"></i>
                    </div>

                    <h3>
                        Need help with billing?
                    </h3>

                    <p>
                        Our billing team can help with invoices,
                        subscriptions and payment questions.
                    </p>

                    <button
                        type="button"
                        class="wm-btn wm-btn--light"
                        data-billing-action="support"
                    >
                        Contact Support
                    </button>

                </section>


            </aside>

        </div>


        {{-- =========================================================
            Danger Zone
        ========================================================== --}}
        <section class="wm-billing-danger">

            <div>

                <div class="wm-billing-danger__icon">
                    <i class="ph ph-warning"></i>
                </div>

                <div>

                    <h3>
                        Cancel subscription
                    </h3>

                    <p>
                        Your workspace will remain available until
                        the end of your current billing period.
                    </p>

                </div>

            </div>

            <button
                type="button"
                class="wm-btn wm-btn--danger-light"
                data-billing-action="cancel"
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

            const $billingPage =
                $('.wm-billing-page');


            /* =====================================================
             * Billing Actions
             * =================================================== */

            $(document).on(
                'click',
                '[data-billing-action]',
                function () {

                    const action =
                        $(this).data('billing-action');

                    const invoice =
                        $(this).data('invoice');


                    switch (action) {

                        case 'payment':

                            Swal.fire({

                                title: 'Update payment method',

                                text:
                                    'Connect this action to your payment method management flow.',

                                icon: 'info',

                                confirmButtonText: 'Continue',

                                showCancelButton: true,

                                cancelButtonText: 'Cancel',

                                reverseButtons: true

                            });

                            break;


                        case 'download':

                            Swal.fire({

                                title: 'Download invoice',

                                text:
                                    'Preparing ' + invoice + ' for download.',

                                icon: 'success',

                                timer: 1500,

                                showConfirmButton: false

                            });

                            break;


                        case 'all-invoices':

                            Swal.fire({

                                title: 'Invoice history',

                                text:
                                    'Connect this action to the full invoice history page.',

                                icon: 'info',

                                confirmButtonText: 'Close'

                            });

                            break;


                        case 'tax':

                            Swal.fire({

                                title: 'Billing information',

                                text:
                                    'Connect this action to your billing information form.',

                                icon: 'info',

                                confirmButtonText: 'Close'

                            });

                            break;


                        case 'support':

                            Swal.fire({

                                title: 'Billing support',

                                text:
                                    'Connect this action to your support or contact workflow.',

                                icon: 'info',

                                confirmButtonText: 'Close'

                            });

                            break;


                        case 'cancel':

                            Swal.fire({

                                title: 'Cancel subscription?',

                                text:
                                    'Your Professional plan will remain active until the end of the current billing period.',

                                icon: 'warning',

                                showCancelButton: true,

                                confirmButtonText: 'Yes, cancel subscription',

                                cancelButtonText: 'Keep subscription',

                                confirmButtonColor: '#EF4444',

                                reverseButtons: true

                            }).then(function (result) {

                                if (!result.isConfirmed) {
                                    return;
                                }


                                Swal.fire({

                                    title: 'Cancellation requested',

                                    text:
                                        'Your subscription cancellation flow can be connected here.',

                                    icon: 'success',

                                    confirmButtonText: 'Done'

                                });

                            });

                            break;

                    }

                }
            );


            /* =====================================================
             * Usage Hover
             * =================================================== */

            $('.wm-usage-item')
                .on('mouseenter', function () {

                    $(this)
                        .addClass('is-hovered');

                })
                .on('mouseleave', function () {

                    $(this)
                        .removeClass('is-hovered');

                });


            /* =====================================================
             * Initial
             * =================================================== */

            $billingPage.addClass('is-ready');

        });
    </script>
@endpush
