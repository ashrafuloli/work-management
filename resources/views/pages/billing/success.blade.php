@extends('layout.app')

@section('main')

    <div class="wm-payment-success-page">

        {{-- =========================================================
            Success Hero
        ========================================================== --}}
        <section class="wm-payment-success">

            <div class="wm-payment-success__icon">
                <i class="ph ph-check"></i>
            </div>

            <span class="wm-payment-success__eyebrow">
            Payment completed successfully
        </span>

            <h1 class="wm-payment-success__title">
                Welcome to Professional
            </h1>

            <p class="wm-payment-success__description">
                Your subscription is now active. Your workspace has
                been upgraded and your team can start using the
                Professional features immediately.
            </p>

            <div class="wm-payment-success__actions">

                <a
                    href="{{ route('dashboard') }}"
                    class="wm-btn wm-btn--primary"
                >
                    Go to Dashboard
                    <i class="ph ph-arrow-right"></i>
                </a>

                <a
                    href="{{ route('billing.index') }}"
                    class="wm-btn wm-btn--light"
                >
                    View Billing
                </a>

            </div>

        </section>


        {{-- =========================================================
            Payment Details
        ========================================================== --}}
        <section class="wm-payment-success-card">

            <div class="wm-payment-success-card__header">

                <div>

                    <h2>
                        Payment details
                    </h2>

                    <p>
                        A receipt has been generated for this transaction.
                    </p>

                </div>

                <span class="wm-payment-success-card__paid">
                <i class="ph ph-check-circle"></i>
                Paid
            </span>

            </div>


            <div class="wm-payment-success-details">

                <div class="wm-payment-success-details__item">

                <span>
                    Transaction ID
                </span>

                    <strong>
                        TXN-2026-0924-8492
                    </strong>

                </div>


                <div class="wm-payment-success-details__item">

                <span>
                    Invoice
                </span>

                    <strong>
                        INV-2026-010
                    </strong>

                </div>


                <div class="wm-payment-success-details__item">

                <span>
                    Payment date
                </span>

                    <strong>
                        September 24, 2026
                    </strong>

                </div>


                <div class="wm-payment-success-details__item">

                <span>
                    Payment method
                </span>

                    <strong>
                        Visa ending in 4242
                    </strong>

                </div>

            </div>


            <div class="wm-payment-success-card__total">

                <div>

                <span>
                    Total paid
                </span>

                    <small>
                        Professional · Monthly
                    </small>

                </div>

                <strong>
                    $432.00
                </strong>

            </div>


            <div class="wm-payment-success-card__footer">

                <button
                    type="button"
                    class="wm-btn wm-btn--light"
                    data-success-action="download"
                >
                    <i class="ph ph-download-simple"></i>
                    Download Receipt
                </button>

                <button
                    type="button"
                    class="wm-btn wm-btn--light"
                    data-success-action="invoice"
                >
                    <i class="ph ph-file-text"></i>
                    View Invoice
                </button>

            </div>

        </section>


        {{-- =========================================================
            What's Included
        ========================================================== --}}
        <section class="wm-payment-success-features">

            <div class="wm-payment-success-features__header">

            <span>
                Your plan is ready
            </span>

                <h2>
                    What's included in Professional
                </h2>

                <p>
                    Your team now has access to the following
                    Professional features.
                </p>

            </div>


            <div class="wm-payment-success-features__grid">

                <div class="wm-payment-success-feature">

                    <div class="wm-payment-success-feature__icon">
                        <i class="ph ph-folders"></i>
                    </div>

                    <div>

                        <h3>
                            Unlimited Projects
                        </h3>

                        <p>
                            Create and manage as many projects as
                            your organization needs.
                        </p>

                    </div>

                </div>


                <div class="wm-payment-success-feature">

                    <div class="wm-payment-success-feature__icon">
                        <i class="ph ph-chart-line-up"></i>
                    </div>

                    <div>

                        <h3>
                            Advanced Reports
                        </h3>

                        <p>
                            Track progress, productivity and project
                            performance with detailed reports.
                        </p>

                    </div>

                </div>


                <div class="wm-payment-success-feature">

                    <div class="wm-payment-success-feature__icon">
                        <i class="ph ph-chart-bar"></i>
                    </div>

                    <div>

                        <h3>
                            Gantt & Timeline
                        </h3>

                        <p>
                            Plan complex projects using timelines,
                            milestones and dependencies.
                        </p>

                    </div>

                </div>


                <div class="wm-payment-success-feature">

                    <div class="wm-payment-success-feature__icon">
                        <i class="ph ph-robot"></i>
                    </div>

                    <div>

                        <h3>
                            Automations
                        </h3>

                        <p>
                            Reduce repetitive work with automated
                            project and task workflows.
                        </p>

                    </div>

                </div>


                <div class="wm-payment-success-feature">

                    <div class="wm-payment-success-feature__icon">
                        <i class="ph ph-shield-check"></i>
                    </div>

                    <div>

                        <h3>
                            Custom Permissions
                        </h3>

                        <p>
                            Configure roles and permissions around
                            your team's workflow.
                        </p>

                    </div>

                </div>


                <div class="wm-payment-success-feature">

                    <div class="wm-payment-success-feature__icon">
                        <i class="ph ph-cloud"></i>
                    </div>

                    <div>

                        <h3>
                            100 GB Storage
                        </h3>

                        <p>
                            Store project files and documents securely
                            inside your workspace.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
            Next Steps
        ========================================================== --}}
        <section class="wm-payment-success-next">

            <div class="wm-payment-success-next__header">

            <span>
                Next steps
            </span>

                <h2>
                    Get the most from your workspace
                </h2>

            </div>


            <div class="wm-payment-success-next__grid">

                <a
                    href="{{ route('team.index') }}"
                    class="wm-payment-success-next__item"
                >

                <span class="wm-payment-success-next__number">
                    01
                </span>

                    <div>

                        <h3>
                            Invite your team
                        </h3>

                        <p>
                            Bring your researchers and collaborators
                            into the workspace.
                        </p>

                    </div>

                    <i class="ph ph-arrow-right"></i>

                </a>


                <a
                    href="{{ route('projects.create') }}"
                    class="wm-payment-success-next__item"
                >

                <span class="wm-payment-success-next__number">
                    02
                </span>

                    <div>

                        <h3>
                            Create a project
                        </h3>

                        <p>
                            Start organizing your next project,
                            milestones and tasks.
                        </p>

                    </div>

                    <i class="ph ph-arrow-right"></i>

                </a>


                <a
                    href="{{ route('settings.index') }}"
                    class="wm-payment-success-next__item"
                >

                <span class="wm-payment-success-next__number">
                    03
                </span>

                    <div>

                        <h3>
                            Configure workspace
                        </h3>

                        <p>
                            Customize workspace settings, roles,
                            notifications and integrations.
                        </p>

                    </div>

                    <i class="ph ph-arrow-right"></i>

                </a>

            </div>

        </section>


        {{-- =========================================================
            Support
        ========================================================== --}}
        <section class="wm-payment-success-support">

            <div class="wm-payment-success-support__icon">
                <i class="ph ph-headset"></i>
            </div>

            <div>

                <h3>
                    Need help getting started?
                </h3>

                <p>
                    Our team is here to help you configure your
                    workspace and get your team up and running.
                </p>

            </div>

            <button
                type="button"
                class="wm-btn wm-btn--light"
                data-success-action="support"
            >
                Contact Support
                <i class="ph ph-arrow-right"></i>
            </button>

        </section>

    </div>

@endsection


@push('script')
    <script>
        $(document).ready(function () {

            'use strict';


            /* =====================================================
             * Success Actions
             * =================================================== */

            $(document).on(
                'click',
                '[data-success-action]',
                function () {

                    const action =
                        $(this).data('success-action');


                    if (action === 'download') {

                        Swal.fire({

                            icon: 'success',

                            title: 'Receipt ready',

                            text:
                                'Your payment receipt can be connected to the invoice download endpoint.',

                            confirmButtonText: 'Close'

                        });

                        return;
                    }


                    if (action === 'invoice') {

                        Swal.fire({

                            icon: 'info',

                            title: 'Invoice',

                            text:
                                'Connect this action to the invoice detail page.',

                            confirmButtonText: 'Close'

                        });

                        return;
                    }


                    if (action === 'support') {

                        Swal.fire({

                            icon: 'info',

                            title: 'Contact Support',

                            text:
                                'Connect this action to your support or help desk workflow.',

                            confirmButtonText: 'Close'

                        });

                    }

                }
            );


            /* =====================================================
             * Copy Transaction ID
             * =================================================== */

            $(document).on(
                'click',
                '.wm-payment-success-details__item strong',
                function () {

                    const value =
                        $(this).text().trim();


                    if (!value.startsWith('TXN-')) {
                        return;
                    }


                    if (
                        navigator.clipboard &&
                        navigator.clipboard.writeText
                    ) {

                        navigator.clipboard
                            .writeText(value)
                            .then(function () {

                                Swal.fire({

                                    toast: true,

                                    position: 'top-end',

                                    icon: 'success',

                                    title: 'Transaction ID copied',

                                    showConfirmButton: false,

                                    timer: 1600

                                });

                            });

                    }

                }
            );


            /* =====================================================
             * Initial
             * =================================================== */

            $('.wm-payment-success-page')
                .addClass('is-ready');

        });
    </script>
@endpush
