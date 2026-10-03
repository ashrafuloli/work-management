<aside
    class="wm-sidebar"
    id="wm-sidebar"
>

    <!-- ====================================================
         Sidebar Brand
         ==================================================== -->

    <div class="wm-sidebar__brand">

        <a
            href="{{ route('dashboard') }}"
            class="wm-sidebar__logo"
            aria-label="{{ __('common.dashboard') }}"
        >

            <span class="wm-sidebar__logo-mark">
                <img
                    src="{{ asset('assets/img/logo/favicon.png') }}"
                    alt="WorkManagement"
                >
            </span>

            <span class="wm-sidebar__logo-text">
                <img
                    src="{{ asset('assets/img/logo/logo-text.png') }}"
                    alt="WorkManagement"
                >
            </span>

        </a>


        <button
            type="button"
            class="wm-sidebar__toggle"
            id="wm-sidebar-toggle"
            aria-label="{{ __('sidebar.collapse_sidebar') }}"
            aria-expanded="true"
            title="{{ __('sidebar.collapse_sidebar') }}"
        >

            <i
                class="ph ph-sidebar-simple"
                id="wm-sidebar-toggle-icon"
            ></i>

        </button>

    </div>


    <!-- ====================================================
         Sidebar Navigation
         ==================================================== -->

    <nav
        class="wm-sidebar__nav"
        aria-label="{{ __('sidebar.main_navigation') }}"
    >


        <!-- =================================================
             Overview
             ================================================= -->

        <div class="wm-sidebar__group">

            <div class="wm-sidebar__label">
                {{ __('sidebar.overview') }}
            </div>


            {{-- Dashboard --}}

            <a
                href="{{ route('dashboard') }}"
                class="wm-sidebar__item {{ request()->routeIs('dashboard') ? 'is-active' : '' }}"
            >

                <span class="wm-sidebar__item-icon">
                    <i class="ph ph-squares-four"></i>
                </span>

                <span class="wm-sidebar__item-text">
                    {{ __('common.dashboard') }}
                </span>

            </a>


            {{-- Notifications --}}

            <a
                href="{{ route('notifications') }}"
                class="wm-sidebar__item {{ request()->routeIs('notifications') ? 'is-active' : '' }}"
            >

                <span class="wm-sidebar__item-icon">
                    <i class="ph ph-bell"></i>
                </span>

                <span class="wm-sidebar__item-text">
                    {{ __('common.notifications') }}
                </span>

                <span class="wm-sidebar__badge">
                    4
                </span>

            </a>

        </div>


        <!-- =================================================
             Work Management
             ================================================= -->

        <div class="wm-sidebar__group">

            <div class="wm-sidebar__label">
                {{ __('sidebar.work_management') }}
            </div>


            {{-- Tasks --}}

            <a
                href="{{ route('tasks.index') }}"
                class="wm-sidebar__item {{ request()->routeIs('tasks.*') ? 'is-active' : '' }}"
            >

                <span class="wm-sidebar__item-icon">
                    <i class="ph ph-check-square-offset"></i>
                </span>

                <span class="wm-sidebar__item-text">
                    {{ __('sidebar.tasks') }}
                </span>

                <span class="wm-sidebar__badge">
                    12
                </span>

            </a>


            {{-- Projects Dropdown --}}

            <div
                class="wm-sidebar__dropdown {{ request()->routeIs('projects.*') ? 'is-open' : '' }}"
                data-sidebar-dropdown
            >

                <button
                    type="button"
                    class="wm-sidebar__item wm-sidebar__dropdown-toggle {{ request()->routeIs('projects.*') ? 'is-active' : '' }}"
                    data-sidebar-dropdown-toggle
                    aria-expanded="{{ request()->routeIs('projects.*') ? 'true' : 'false' }}"
                    aria-label="{{ __('sidebar.projects') }}"
                >

                    <span class="wm-sidebar__item-icon">
                        <i class="ph ph-kanban"></i>
                    </span>

                    <span class="wm-sidebar__item-text">
                        {{ __('sidebar.projects') }}
                    </span>

                    <span class="wm-sidebar__item-arrow">
                        <i class="ph ph-caret-down"></i>
                    </span>

                </button>


                <div class="wm-sidebar__submenu">

                    <a
                        href="{{ route('projects.index') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('projects.index') ? 'is-active' : '' }}"
                    >

                        <i class="ph ph-kanban"></i>

                        <span>
                            {{ __('sidebar.all_projects') }}
                        </span>

                    </a>


                    <a
                        href="{{ route('projects.create') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('projects.create') ? 'is-active' : '' }}"
                    >

                        <i class="ph ph-plus-circle"></i>

                        <span>
                            {{ __('sidebar.create_project') }}
                        </span>

                    </a>

                </div>

            </div>


            {{-- Calendar --}}

            <a
                href="{{ route('calendar') }}"
                class="wm-sidebar__item {{ request()->routeIs('calendar') ? 'is-active' : '' }}"
            >

                <span class="wm-sidebar__item-icon">
                    <i class="ph ph-calendar-blank"></i>
                </span>

                <span class="wm-sidebar__item-text">
                    {{ __('sidebar.calendar') }}
                </span>

            </a>


            {{-- Time Tracking --}}

            <a
                href="{{ route('time-tracking') }}"
                class="wm-sidebar__item {{ request()->routeIs('time-tracking') ? 'is-active' : '' }}"
            >

                <span class="wm-sidebar__item-icon">
                    <i class="ph ph-clock-countdown"></i>
                </span>

                <span class="wm-sidebar__item-text">
                    {{ __('sidebar.time_tracking') }}
                </span>

            </a>


            {{-- Workstreams --}}

            <a
                href="{{ route('workstreams') }}"
                class="wm-sidebar__item {{ request()->routeIs('workstreams') ? 'is-active' : '' }}"
            >

                <span class="wm-sidebar__item-icon">
                    <i class="ph ph-git-branch"></i>
                </span>

                <span class="wm-sidebar__item-text">
                    {{ __('sidebar.workstreams') }}
                </span>

            </a>

        </div>


        <!-- =================================================
             Workspace
             ================================================= -->

        <div class="wm-sidebar__group">

            <div class="wm-sidebar__label">
                {{ __('sidebar.workspace') }}
            </div>


            {{-- Team Members --}}

            <a
                href="{{ route('team.index') }}"
                class="wm-sidebar__item {{ request()->routeIs('team.*') ? 'is-active' : '' }}"
            >

                <span class="wm-sidebar__item-icon">
                    <i class="ph ph-users-three"></i>
                </span>

                <span class="wm-sidebar__item-text">
                    {{ __('sidebar.team_members') }}
                </span>

            </a>


            {{-- Documents --}}

            <a
                href="{{ route('documents') }}"
                class="wm-sidebar__item {{ request()->routeIs('documents') ? 'is-active' : '' }}"
            >

                <span class="wm-sidebar__item-icon">
                    <i class="ph ph-folder-open"></i>
                </span>

                <span class="wm-sidebar__item-text">
                    {{ __('sidebar.documents') }}
                </span>

            </a>


            {{-- Files --}}

            <a
                href="{{ route('files') }}"
                class="wm-sidebar__item {{ request()->routeIs('files') ? 'is-active' : '' }}"
            >

                <span class="wm-sidebar__item-icon">
                    <i class="ph ph-files"></i>
                </span>

                <span class="wm-sidebar__item-text">
                    {{ __('sidebar.files') }}
                </span>

            </a>

        </div>


        <!-- =================================================
             Insights
             ================================================= -->

        <div class="wm-sidebar__group">

            <div class="wm-sidebar__label">
                {{ __('sidebar.insights') }}
            </div>


            {{-- Reports --}}

            <a
                href="{{ route('reports.index') }}"
                class="wm-sidebar__item {{ request()->routeIs('reports.*') ? 'is-active' : '' }}"
            >

                <span class="wm-sidebar__item-icon">
                    <i class="ph ph-chart-line-up"></i>
                </span>

                <span class="wm-sidebar__item-text">
                    {{ __('sidebar.reports') }}
                </span>

            </a>


            {{-- Risks & Issues --}}

            <a
                href="{{ route('risks-issues') }}"
                class="wm-sidebar__item {{ request()->routeIs('risks-issues') ? 'is-active' : '' }}"
            >

                <span class="wm-sidebar__item-icon">
                    <i class="ph ph-warning"></i>
                </span>

                <span class="wm-sidebar__item-text">
                    {{ __('sidebar.risks_issues') }}
                </span>

            </a>


            {{-- Activity --}}

            <a
                href="{{ route('activity') }}"
                class="wm-sidebar__item {{ request()->routeIs('activity') ? 'is-active' : '' }}"
            >

                <span class="wm-sidebar__item-icon">
                    <i class="ph ph-activity"></i>
                </span>

                <span class="wm-sidebar__item-text">
                    {{ __('sidebar.activity') }}
                </span>

            </a>

        </div>


        <!-- =================================================
             Administration
             ================================================= -->

        <div class="wm-sidebar__group">

            <div class="wm-sidebar__label">
                {{ __('sidebar.administration') }}
            </div>


            {{-- Settings Dropdown --}}

            <div
                class="wm-sidebar__dropdown {{ request()->routeIs('settings.*') ? 'is-open' : '' }}"
                data-sidebar-dropdown
            >

                <button
                    type="button"
                    class="wm-sidebar__item wm-sidebar__dropdown-toggle {{ request()->routeIs('settings.*') ? 'is-active' : '' }}"
                    data-sidebar-dropdown-toggle
                    aria-expanded="{{ request()->routeIs('settings.*') ? 'true' : 'false' }}"
                    aria-label="{{ __('common.settings') }}"
                >

                    <span class="wm-sidebar__item-icon">
                        <i class="ph ph-gear"></i>
                    </span>

                    <span class="wm-sidebar__item-text">
                        {{ __('common.settings') }}
                    </span>

                    <span class="wm-sidebar__item-arrow">
                        <i class="ph ph-caret-down"></i>
                    </span>

                </button>


                <div class="wm-sidebar__submenu">

                    {{-- General --}}

                    <a
                        href="{{ route('settings.index') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('settings.index') ? 'is-active' : '' }}"
                    >

                        <i class="ph ph-sliders-horizontal"></i>

                        <span>
                            {{ __('sidebar.general') }}
                        </span>

                    </a>


                    {{-- Profile --}}

                    <a
                        href="{{ route('settings.profile') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('settings.profile') ? 'is-active' : '' }}"
                    >

                        <i class="ph ph-user-circle"></i>

                        <span>
                            {{ __('sidebar.profile') }}
                        </span>

                    </a>


                    {{-- Roles & Permissions --}}

                    <a
                        href="{{ route('settings.roles-permissions') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('settings.roles-permissions') ? 'is-active' : '' }}"
                    >

                        <i class="ph ph-shield-check"></i>

                        <span>
                            {{ __('sidebar.roles_permissions') }}
                        </span>

                    </a>


                    {{-- Workspace --}}

                    <a
                        href="{{ route('settings.workspace') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('settings.workspace') ? 'is-active' : '' }}"
                    >

                        <i class="ph ph-buildings"></i>

                        <span>
                            {{ __('sidebar.workspace_settings') }}
                        </span>

                    </a>


                    {{-- Integrations --}}

                    <a
                        href="{{ route('settings.integrations') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('settings.integrations') ? 'is-active' : '' }}"
                    >

                        <i class="ph ph-plugs-connected"></i>

                        <span>
                            {{ __('common.integrations') }}
                        </span>

                    </a>


                    {{-- API / Developer --}}

                    <a
                        href="{{ route('settings.api') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('settings.api') ? 'is-active' : '' }}"
                    >

                        <i class="ph ph-code"></i>

                        <span>
                            {{ __('sidebar.api_developer') }}
                        </span>

                    </a>

                </div>

            </div>


            {{-- Billing Dropdown --}}

            <div
                class="wm-sidebar__dropdown {{ request()->routeIs('billing.*') || request()->routeIs('pricing') ? 'is-open' : '' }}"
                data-sidebar-dropdown
            >

                <button
                    type="button"
                    class="wm-sidebar__item wm-sidebar__dropdown-toggle {{ request()->routeIs('billing.*') || request()->routeIs('pricing') ? 'is-active' : '' }}"
                    data-sidebar-dropdown-toggle
                    aria-expanded="{{ request()->routeIs('billing.*') || request()->routeIs('pricing') ? 'true' : 'false' }}"
                    aria-label="{{ __('sidebar.billing') }}"
                >

                    <span class="wm-sidebar__item-icon">
                        <i class="ph ph-credit-card"></i>
                    </span>

                    <span class="wm-sidebar__item-text">
                        {{ __('sidebar.billing') }}
                    </span>

                    <span class="wm-sidebar__item-arrow">
                        <i class="ph ph-caret-down"></i>
                    </span>

                </button>


                <div class="wm-sidebar__submenu">

                    {{-- Billing Overview --}}

                    <a
                        href="{{ route('billing.index') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('billing.index') ? 'is-active' : '' }}"
                    >

                        <i class="ph ph-credit-card"></i>

                        <span>
                            {{ __('sidebar.billing_overview') }}
                        </span>

                    </a>


                    {{-- Subscription --}}

                    <a
                        href="{{ route('billing.subscription') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('billing.subscription') ? 'is-active' : '' }}"
                    >

                        <i class="ph ph-repeat"></i>

                        <span>
                            {{ __('sidebar.subscription') }}
                        </span>

                    </a>


                    {{-- Pricing --}}

                    <a
                        href="{{ route('pricing') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('pricing') ? 'is-active' : '' }}"
                    >

                        <i class="ph ph-tag"></i>

                        <span>
                            {{ __('sidebar.pricing') }}
                        </span>

                    </a>

                </div>

            </div>

        </div>

    </nav>


    <!-- ====================================================
         Sidebar User
         ==================================================== -->

    <div class="wm-sidebar__user">

        @php
            $profile = auth()->user()->profile;

            $displayName =
                $profile?->display_name
                ?: trim(
                    ($profile?->first_name ?? '') . ' ' .
                    ($profile?->last_name ?? '')
                )
                ?: auth()->user()->email;

            $avatarInitials = collect(
                preg_split(
                    '/\s+/',
                    trim($displayName)
                )
            )
                ->filter()
                ->take(2)
                ->map(
                    fn ($name) => mb_strtoupper(
                        mb_substr($name, 0, 1)
                    )
                )
                ->implode('');
        @endphp


        <div class="wm-sidebar__user-avatar">
            {{ $avatarInitials ?: 'U' }}
        </div>


        <div class="wm-sidebar__user-info">

            <span class="wm-sidebar__user-name">
                {{ $displayName }}
            </span>

            <span class="wm-sidebar__user-email">
                {{ auth()->user()->email }}
            </span>

        </div>


        <div class="wm-sidebar__user-actions">

            {{-- Logout --}}

            <form
                method="POST"
                action="{{ route('logout') }}"
                class="wm-sidebar__logout-form"
                id="wm-logout-form"
            >

                @csrf

                <button
                    type="submit"
                    class="wm-sidebar__logout"
                    id="wm-logout-button"
                    aria-label="{{ __('sidebar.logout') }}"
                    title="{{ __('sidebar.logout') }}"
                >

                    <span class="wm-sidebar__logout-content">

                        <i class="ph ph-sign-out"></i>

                        <span class="wm-sidebar__logout-text">
                            {{ __('sidebar.logout') }}
                        </span>

                    </span>


                    <span class="wm-sidebar__logout-loading">

                        <span class="wm-sidebar__spinner"></span>

                    </span>

                </button>

            </form>

        </div>

    </div>


</aside>


@push('script')

    <script>

        $(document).ready(function () {

            'use strict';


            // =========================================================
            // Sidebar Dropdown
            // =========================================================

            $(document).on(
                'click',
                '[data-sidebar-dropdown-toggle]',
                function (event) {

                    event.preventDefault();
                    event.stopPropagation();

                    const $dropdown =
                        $(this).closest(
                            '[data-sidebar-dropdown]'
                        );

                    const isOpen =
                        $dropdown.hasClass(
                            'is-open'
                        );


                    // Close other dropdowns

                    $('[data-sidebar-dropdown]')
                        .not($dropdown)
                        .removeClass('is-open')
                        .find('[data-sidebar-dropdown-toggle]')
                        .attr(
                            'aria-expanded',
                            'false'
                        );


                    // Toggle current dropdown

                    if (isOpen) {

                        $dropdown.removeClass(
                            'is-open'
                        );

                        $(this).attr(
                            'aria-expanded',
                            'false'
                        );

                    } else {

                        $dropdown.addClass(
                            'is-open'
                        );

                        $(this).attr(
                            'aria-expanded',
                            'true'
                        );

                    }

                }
            );


            // =========================================================
            // Dropdown Outside Click
            // =========================================================

            $(document).on(
                'click',
                function () {

                    $('[data-sidebar-dropdown]')
                        .removeClass('is-open')
                        .find('[data-sidebar-dropdown-toggle]')
                        .attr(
                            'aria-expanded',
                            'false'
                        );

                }
            );


            // =========================================================
            // Prevent Dropdown Close
            // =========================================================

            $(document).on(
                'click',
                '[data-sidebar-dropdown]',
                function (event) {

                    event.stopPropagation();

                }
            );


            // =========================================================
            // Escape
            // =========================================================

            $(document).on(
                'keydown',
                function (event) {

                    if (event.key === 'Escape') {

                        $('[data-sidebar-dropdown]')
                            .removeClass('is-open')
                            .find('[data-sidebar-dropdown-toggle]')
                            .attr(
                                'aria-expanded',
                                'false'
                            );

                    }

                }
            );


            // =========================================================
            // Logout
            // =========================================================

            $('#wm-logout-form').on(
                'submit',
                function (event) {

                    event.preventDefault();


                    const $form = $(this);

                    const $button =
                        $('#wm-logout-button');


                    if ($button.hasClass('is-loading')) {
                        return;
                    }


                    // -------------------------------------------------
                    // Loading
                    // -------------------------------------------------

                    $button
                        .prop('disabled', true)
                        .addClass('is-loading');


                    // -------------------------------------------------
                    // AJAX Logout
                    // -------------------------------------------------

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
                                response.redirect
                            ) {

                                window.location.href =
                                    response.redirect;

                                return;
                            }


                            resetLogoutButton();

                        },


                        error: function (xhr) {

                            resetLogoutButton();


                            // -------------------------------------------------
                            // Session Expired
                            // -------------------------------------------------

                            if (
                                xhr.status === 401 ||
                                xhr.status === 419
                            ) {

                                window.location.href =
                                    '{{ route('login') }}';

                                return;
                            }


                            const response =
                                xhr.responseJSON || {};


                            console.error(
                                response.message ||
                                '{{ __("common.something_went_wrong") }}'
                            );

                        }

                    });


                    // -------------------------------------------------
                    // Reset Button
                    // -------------------------------------------------

                    function resetLogoutButton() {

                        $button
                            .prop(
                                'disabled',
                                false
                            )
                            .removeClass(
                                'is-loading'
                            );

                    }

                }
            );

        });

    </script>

@endpush
