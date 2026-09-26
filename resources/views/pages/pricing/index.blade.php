@extends('layout.app')

@section('main')

    <div class="wm-pricing-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}
        <div class="wm-pricing-header">

            <div class="wm-pricing-header__content">

                <div class="wm-pricing-header__badge">
                    <i class="ph ph-sparkle"></i>
                    Simple, transparent pricing
                </div>

                <h1 class="wm-pricing-header__title">
                    Choose the right plan for your team
                </h1>

                <p class="wm-pricing-header__description">
                    Start free and scale as your research and project
                    management needs grow. Upgrade or downgrade anytime.
                </p>

            </div>

            {{-- Billing Toggle --}}
            <div class="wm-billing-toggle">

                <button
                    type="button"
                    class="wm-billing-toggle__option is-active"
                    data-billing-period="monthly"
                >
                    Monthly
                </button>

                <button
                    type="button"
                    class="wm-billing-toggle__option"
                    data-billing-period="yearly"
                >
                    Yearly

                    <span class="wm-billing-toggle__save">
                    Save 20%
                </span>
                </button>

            </div>

        </div>


        {{-- =========================================================
            Pricing Cards
        ========================================================== --}}
        <div class="wm-pricing-grid">


            {{-- =====================================================
                Free
            ====================================================== --}}
            <article
                class="wm-pricing-card"
                data-plan="free"
            >

                <div class="wm-pricing-card__header">

                    <div class="wm-pricing-card__icon wm-pricing-card__icon--gray">
                        <i class="ph ph-user"></i>
                    </div>

                    <h2 class="wm-pricing-card__name">
                        Free
                    </h2>

                    <p class="wm-pricing-card__description">
                        For individuals getting started with project
                        management.
                    </p>

                </div>


                <div class="wm-pricing-card__price">

                <span class="wm-pricing-card__currency">
                    $
                </span>

                    <strong
                        data-monthly-price="0"
                        data-yearly-price="0"
                    >
                        0
                    </strong>

                    <span>
                    /month
                </span>

                </div>


                <p class="wm-pricing-card__billing">
                    Free forever
                </p>


                <button
                    type="button"
                    class="wm-pricing-card__button wm-pricing-card__button--outline"
                    data-plan-action="current"
                >
                    Current Plan
                </button>


                <div class="wm-pricing-card__divider"></div>


                <div class="wm-pricing-card__features">

                    <h3>
                        Includes:
                    </h3>

                    <ul>

                        <li>
                            <i class="ph ph-check"></i>
                            Up to 3 projects
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Up to 5 team members
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Task management
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Basic project dashboard
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            1 GB file storage
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Basic notifications
                        </li>

                    </ul>

                </div>

            </article>


            {{-- =====================================================
                Starter
            ====================================================== --}}
            <article
                class="wm-pricing-card"
                data-plan="starter"
            >

                <div class="wm-pricing-card__header">

                    <div class="wm-pricing-card__icon wm-pricing-card__icon--blue">
                        <i class="ph ph-rocket"></i>
                    </div>

                    <h2 class="wm-pricing-card__name">
                        Starter
                    </h2>

                    <p class="wm-pricing-card__description">
                        For small teams that need a structured
                        workspace.
                    </p>

                </div>


                <div class="wm-pricing-card__price">

                <span class="wm-pricing-card__currency">
                    $
                </span>

                    <strong
                        data-monthly-price="12"
                        data-yearly-price="9.60"
                    >
                        12
                    </strong>

                    <span>
                    /user/month
                </span>

                </div>


                <p class="wm-pricing-card__billing">
                    Billed monthly
                </p>


                <button
                    type="button"
                    class="wm-pricing-card__button wm-pricing-card__button--outline"
                    data-plan-action="upgrade"
                    data-plan="Starter"
                >
                    Start Free Trial
                </button>


                <div class="wm-pricing-card__divider"></div>


                <div class="wm-pricing-card__features">

                    <h3>
                        Everything in Free, plus:
                    </h3>

                    <ul>

                        <li>
                            <i class="ph ph-check"></i>
                            Unlimited projects
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Up to 15 team members
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Project timelines
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Calendar view
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            25 GB file storage
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Advanced filters
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Email support
                        </li>

                    </ul>

                </div>

            </article>


            {{-- =====================================================
                Professional
            ====================================================== --}}
            <article
                class="wm-pricing-card wm-pricing-card--featured"
                data-plan="professional"
            >

                <div class="wm-pricing-card__popular">
                    Most Popular
                </div>


                <div class="wm-pricing-card__header">

                    <div class="wm-pricing-card__icon wm-pricing-card__icon--primary">
                        <i class="ph ph-users-three"></i>
                    </div>

                    <h2 class="wm-pricing-card__name">
                        Professional
                    </h2>

                    <p class="wm-pricing-card__description">
                        For growing research teams and organizations.
                    </p>

                </div>


                <div class="wm-pricing-card__price">

                <span class="wm-pricing-card__currency">
                    $
                </span>

                    <strong
                        data-monthly-price="24"
                        data-yearly-price="19.20"
                    >
                        24
                    </strong>

                    <span>
                    /user/month
                </span>

                </div>


                <p class="wm-pricing-card__billing">
                    Billed monthly
                </p>


                <button
                    type="button"
                    class="wm-pricing-card__button wm-pricing-card__button--primary"
                    data-plan-action="upgrade"
                    data-plan="Professional"
                >
                    Start Free Trial
                </button>


                <div class="wm-pricing-card__divider"></div>


                <div class="wm-pricing-card__features">

                    <h3>
                        Everything in Starter, plus:
                    </h3>

                    <ul>

                        <li>
                            <i class="ph ph-check"></i>
                            Unlimited team members
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Gantt & timeline planning
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Advanced reports
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Custom roles & permissions
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            100 GB file storage
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Automations
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Priority support
                        </li>

                    </ul>

                </div>

            </article>


            {{-- =====================================================
                Enterprise
            ====================================================== --}}
            <article
                class="wm-pricing-card"
                data-plan="enterprise"
            >

                <div class="wm-pricing-card__header">

                    <div class="wm-pricing-card__icon wm-pricing-card__icon--purple">
                        <i class="ph ph-buildings"></i>
                    </div>

                    <h2 class="wm-pricing-card__name">
                        Enterprise
                    </h2>

                    <p class="wm-pricing-card__description">
                        For organizations with advanced security and
                        governance needs.
                    </p>

                </div>


                <div class="wm-pricing-card__price wm-pricing-card__price--custom">

                    <strong>
                        Custom
                    </strong>

                </div>


                <p class="wm-pricing-card__billing">
                    Tailored to your organization
                </p>


                <button
                    type="button"
                    class="wm-pricing-card__button wm-pricing-card__button--outline"
                    data-plan-action="contact"
                >
                    Contact Sales
                </button>


                <div class="wm-pricing-card__divider"></div>


                <div class="wm-pricing-card__features">

                    <h3>
                        Everything in Professional, plus:
                    </h3>

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
                            Advanced audit logs
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Dedicated support
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Custom security controls
                        </li>

                        <li>
                            <i class="ph ph-check"></i>
                            Custom onboarding
                        </li>

                    </ul>

                </div>

            </article>

        </div>


        {{-- =========================================================
            Included Features
        ========================================================== --}}
        <section class="wm-pricing-features">

            <div class="wm-pricing-features__header">

            <span class="wm-pricing-features__eyebrow">
                Built for productive teams
            </span>

                <h2>
                    Everything you need to manage your work
                </h2>

                <p>
                    WorkManagement brings projects, tasks, people,
                    files and reporting into one connected workspace.
                </p>

            </div>


            <div class="wm-pricing-features__grid">

                <div class="wm-pricing-feature">

                    <div class="wm-pricing-feature__icon">
                        <i class="ph ph-kanban"></i>
                    </div>

                    <div>
                        <h3>Project Management</h3>

                        <p>
                            Organize projects, milestones, workstreams
                            and tasks from one place.
                        </p>
                    </div>

                </div>


                <div class="wm-pricing-feature">

                    <div class="wm-pricing-feature__icon">
                        <i class="ph ph-users-three"></i>
                    </div>

                    <div>
                        <h3>Team Collaboration</h3>

                        <p>
                            Keep your team aligned with assignments,
                            comments, notifications and activity.
                        </p>
                    </div>

                </div>


                <div class="wm-pricing-feature">

                    <div class="wm-pricing-feature__icon">
                        <i class="ph ph-chart-line-up"></i>
                    </div>

                    <div>
                        <h3>Reports & Analytics</h3>

                        <p>
                            Understand project progress, productivity,
                            milestones and workload.
                        </p>
                    </div>

                </div>


                <div class="wm-pricing-feature">

                    <div class="wm-pricing-feature__icon">
                        <i class="ph ph-files"></i>
                    </div>

                    <div>
                        <h3>Files & Documents</h3>

                        <p>
                            Keep project documents and important files
                            organized and accessible.
                        </p>
                    </div>

                </div>


                <div class="wm-pricing-feature">

                    <div class="wm-pricing-feature__icon">
                        <i class="ph ph-shield-check"></i>
                    </div>

                    <div>
                        <h3>Roles & Permissions</h3>

                        <p>
                            Control workspace access with flexible
                            roles and permission levels.
                        </p>
                    </div>

                </div>


                <div class="wm-pricing-feature">

                    <div class="wm-pricing-feature__icon">
                        <i class="ph ph-plugs-connected"></i>
                    </div>

                    <div>
                        <h3>Integrations</h3>

                        <p>
                            Connect your existing tools and automate
                            repetitive workflows.
                        </p>
                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
            Comparison
        ========================================================== --}}
        <section class="wm-pricing-comparison">

            <div class="wm-pricing-comparison__header">

                <div>
                <span class="wm-pricing-features__eyebrow">
                    Compare plans
                </span>

                    <h2>
                        Find the features that fit your workflow
                    </h2>
                </div>

                <button
                    type="button"
                    class="wm-btn wm-btn--light"
                    id="toggleComparison"
                >
                    <i class="ph ph-arrows-down-up"></i>
                    View comparison
                </button>

            </div>


            <div
                class="wm-pricing-comparison__table-wrapper"
                id="comparisonTable"
            >

                <table class="wm-pricing-comparison__table">

                    <thead>

                    <tr>

                        <th>
                            Features
                        </th>

                        <th>
                            Free
                        </th>

                        <th>
                            Starter
                        </th>

                        <th class="is-highlighted">
                            Professional
                        </th>

                        <th>
                            Enterprise
                        </th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>
                        <td>Projects</td>
                        <td>3</td>
                        <td>Unlimited</td>
                        <td class="is-highlighted">Unlimited</td>
                        <td>Unlimited</td>
                    </tr>

                    <tr>
                        <td>Team Members</td>
                        <td>5</td>
                        <td>15</td>
                        <td class="is-highlighted">Unlimited</td>
                        <td>Unlimited</td>
                    </tr>

                    <tr>
                        <td>Task Management</td>
                        <td><i class="ph ph-check"></i></td>
                        <td><i class="ph ph-check"></i></td>
                        <td class="is-highlighted"><i class="ph ph-check"></i></td>
                        <td><i class="ph ph-check"></i></td>
                    </tr>

                    <tr>
                        <td>Calendar</td>
                        <td><i class="ph ph-minus"></i></td>
                        <td><i class="ph ph-check"></i></td>
                        <td class="is-highlighted"><i class="ph ph-check"></i></td>
                        <td><i class="ph ph-check"></i></td>
                    </tr>

                    <tr>
                        <td>Gantt Timeline</td>
                        <td><i class="ph ph-minus"></i></td>
                        <td><i class="ph ph-minus"></i></td>
                        <td class="is-highlighted"><i class="ph ph-check"></i></td>
                        <td><i class="ph ph-check"></i></td>
                    </tr>

                    <tr>
                        <td>Reports</td>
                        <td>Basic</td>
                        <td>Standard</td>
                        <td class="is-highlighted">Advanced</td>
                        <td>Advanced</td>
                    </tr>

                    <tr>
                        <td>Roles & Permissions</td>
                        <td><i class="ph ph-minus"></i></td>
                        <td>Basic</td>
                        <td class="is-highlighted">Custom</td>
                        <td>Advanced</td>
                    </tr>

                    <tr>
                        <td>Automations</td>
                        <td><i class="ph ph-minus"></i></td>
                        <td><i class="ph ph-minus"></i></td>
                        <td class="is-highlighted"><i class="ph ph-check"></i></td>
                        <td><i class="ph ph-check"></i></td>
                    </tr>

                    <tr>
                        <td>SSO / SAML</td>
                        <td><i class="ph ph-minus"></i></td>
                        <td><i class="ph ph-minus"></i></td>
                        <td class="is-highlighted"><i class="ph ph-minus"></i></td>
                        <td><i class="ph ph-check"></i></td>
                    </tr>

                    <tr>
                        <td>Priority Support</td>
                        <td><i class="ph ph-minus"></i></td>
                        <td><i class="ph ph-minus"></i></td>
                        <td class="is-highlighted"><i class="ph ph-check"></i></td>
                        <td><i class="ph ph-check"></i></td>
                    </tr>

                    </tbody>

                </table>

            </div>

        </section>


        {{-- =========================================================
            FAQ
        ========================================================== --}}
        <section class="wm-pricing-faq">

            <div class="wm-pricing-faq__header">

            <span class="wm-pricing-features__eyebrow">
                FAQ
            </span>

                <h2>
                    Frequently asked questions
                </h2>

                <p>
                    Everything you need to know about plans and billing.
                </p>

            </div>


            <div class="wm-pricing-faq__list">


                <div class="wm-pricing-faq__item is-open">

                    <button
                        type="button"
                        class="wm-pricing-faq__question"
                        data-faq-toggle
                    >
                    <span>
                        Can I try a paid plan before subscribing?
                    </span>

                        <i class="ph ph-plus"></i>
                    </button>

                    <div class="wm-pricing-faq__answer">

                        <p>
                            Yes. Paid plans include a free trial so your
                            team can evaluate the features before committing
                            to a subscription.
                        </p>

                    </div>

                </div>


                <div class="wm-pricing-faq__item">

                    <button
                        type="button"
                        class="wm-pricing-faq__question"
                        data-faq-toggle
                    >
                    <span>
                        Can I change plans later?
                    </span>

                        <i class="ph ph-plus"></i>
                    </button>

                    <div class="wm-pricing-faq__answer">

                        <p>
                            Yes. You can upgrade or downgrade your plan
                            as your team's requirements change.
                        </p>

                    </div>

                </div>


                <div class="wm-pricing-faq__item">

                    <button
                        type="button"
                        class="wm-pricing-faq__question"
                        data-faq-toggle
                    >
                    <span>
                        What happens when I downgrade?
                    </span>

                        <i class="ph ph-plus"></i>
                    </button>

                    <div class="wm-pricing-faq__answer">

                        <p>
                            Your existing workspace remains available.
                            Features that exceed your new plan's limits
                            may become restricted until you adjust your
                            workspace.
                        </p>

                    </div>

                </div>


                <div class="wm-pricing-faq__item">

                    <button
                        type="button"
                        class="wm-pricing-faq__question"
                        data-faq-toggle
                    >
                    <span>
                        Is yearly billing discounted?
                    </span>

                        <i class="ph ph-plus"></i>
                    </button>

                    <div class="wm-pricing-faq__answer">

                        <p>
                            Yes. Yearly billing is displayed at a lower
                            effective monthly rate than monthly billing.
                        </p>

                    </div>

                </div>


                <div class="wm-pricing-faq__item">

                    <button
                        type="button"
                        class="wm-pricing-faq__question"
                        data-faq-toggle
                    >
                    <span>
                        Do you offer custom enterprise plans?
                    </span>

                        <i class="ph ph-plus"></i>
                    </button>

                    <div class="wm-pricing-faq__answer">

                        <p>
                            Yes. Enterprise plans can be tailored around
                            organization size, security requirements,
                            support needs and governance.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
            CTA
        ========================================================== --}}
        <section class="wm-pricing-cta">

            <div class="wm-pricing-cta__content">

                <div class="wm-pricing-cta__icon">
                    <i class="ph ph-rocket-launch"></i>
                </div>

                <h2>
                    Ready to organize your team's work?
                </h2>

                <p>
                    Start with a free workspace and upgrade when
                    your team is ready.
                </p>

                <div class="wm-pricing-cta__actions">

                    <a
                        href="{{ route('dashboard') }}"
                        class="wm-btn wm-btn--primary"
                    >
                        Get Started Free
                        <i class="ph ph-arrow-right"></i>
                    </a>

                    <a
                        href="#"
                        class="wm-btn wm-btn--light"
                        id="contactSalesBtn"
                    >
                        Talk to Sales
                    </a>

                </div>

            </div>

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

            const $billingOptions =
                $('[data-billing-period]');

            const $pricingCards =
                $('[data-plan]');

            const $comparisonTable =
                $('#comparisonTable');

            let billingPeriod = 'monthly';


            /* =====================================================
             * Billing Prices
             * =================================================== */

            function updatePricing(period) {

                billingPeriod = period;


                $('[data-monthly-price]').each(function () {

                    const $price =
                        $(this);

                    const monthlyPrice =
                        $price.attr('data-monthly-price');

                    const yearlyPrice =
                        $price.attr('data-yearly-price');


                    if (period === 'yearly') {

                        $price.text(yearlyPrice);

                    } else {

                        $price.text(monthlyPrice);

                    }

                });


                $('.wm-pricing-card__billing').each(function () {

                    const $billing =
                        $(this);

                    const $card =
                        $billing.closest('.wm-pricing-card');

                    const plan =
                        $card.data('plan');


                    if (plan === 'free') {

                        $billing.text('Free forever');

                        return;
                    }


                    if (plan === 'enterprise') {

                        $billing.text(
                            'Tailored to your organization'
                        );

                        return;
                    }


                    if (period === 'yearly') {

                        $billing.text(
                            'Billed annually · Save 20%'
                        );

                    } else {

                        $billing.text(
                            'Billed monthly'
                        );

                    }

                });


                $billingOptions.removeClass('is-active');

                $billingOptions
                    .filter('[data-billing-period="' + period + '"]')
                    .addClass('is-active');

            }


            /* =====================================================
             * Billing Toggle
             * =================================================== */

            $billingOptions.on('click', function () {

                const period =
                    $(this).data('billing-period');

                updatePricing(period);

            });


            /* =====================================================
             * Plan Action
             * =================================================== */

            $(document).on(
                'click',
                '[data-plan-action]',
                function () {

                    const action =
                        $(this).data('plan-action');

                    const plan =
                        $(this).data('plan');


                    if (action === 'current') {

                        Swal.fire({

                            icon: 'info',

                            title: 'Current plan',

                            text:
                                'You are currently using the Free plan.',

                            confirmButtonText: 'Close'

                        });

                        return;
                    }


                    if (action === 'upgrade') {

                        Swal.fire({

                            icon: 'success',

                            title:
                                'Start your ' + plan + ' trial',

                            text:
                                'Your checkout flow can be connected here.',

                            showCancelButton: true,

                            confirmButtonText: 'Continue',

                            cancelButtonText: 'Not now',

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

                        $('#contactSalesBtn').trigger('click');

                    }

                }
            );


            /* =====================================================
             * Comparison Toggle
             * =================================================== */

            $('#toggleComparison').on('click', function () {

                const $button =
                    $(this);

                $comparisonTable
                    .stop(true, true)
                    .slideToggle(250, function () {

                        const isVisible =
                            $comparisonTable.is(':visible');


                        if (isVisible) {

                            $button.html(
                                '<i class="ph ph-arrows-in"></i> Hide comparison'
                            );

                        } else {

                            $button.html(
                                '<i class="ph ph-arrows-out"></i> View comparison'
                            );

                        }

                    });

            });


            /* =====================================================
             * FAQ
             * =================================================== */

            $(document).on(
                'click',
                '[data-faq-toggle]',
                function () {

                    const $button =
                        $(this);

                    const $item =
                        $button.closest('.wm-pricing-faq__item');

                    const $answer =
                        $item.find('.wm-pricing-faq__answer');


                    $('.wm-pricing-faq__item')
                        .not($item)
                        .removeClass('is-open')
                        .find('.wm-pricing-faq__answer')
                        .stop(true, true)
                        .slideUp(200);


                    $('.wm-pricing-faq__item')
                        .not($item)
                        .find('.wm-pricing-faq__question i')
                        .removeClass('ph-minus')
                        .addClass('ph-plus');


                    if ($item.hasClass('is-open')) {

                        $item.removeClass('is-open');

                        $answer
                            .stop(true, true)
                            .slideUp(200);

                        $button.find('i')
                            .removeClass('ph-minus')
                            .addClass('ph-plus');

                    } else {

                        $item.addClass('is-open');

                        $answer
                            .stop(true, true)
                            .slideDown(200);

                        $button.find('i')
                            .removeClass('ph-plus')
                            .addClass('ph-minus');

                    }

                }
            );


            /* =====================================================
             * Contact Sales
             * =================================================== */

            $('#contactSalesBtn').on('click', function (event) {

                event.preventDefault();

                Swal.fire({

                    title: 'Contact Sales',

                    text:
                        'Connect this action to your sales contact form or CRM workflow.',

                    icon: 'info',

                    confirmButtonText: 'Close'

                });

            });


            /* =====================================================
             * Initial
             * =================================================== */

            $('.wm-pricing-faq__answer')
                .hide();

            $('.wm-pricing-faq__item.is-open')
                .find('.wm-pricing-faq__answer')
                .show();

            updatePricing('monthly');

        });
    </script>
@endpush
