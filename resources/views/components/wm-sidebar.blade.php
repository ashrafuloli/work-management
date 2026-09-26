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
        >

            <span class="wm-sidebar__logo-mark">
                <img src="{{asset('assets/img/logo/favicon.png')}}" alt="img">
            </span>

            <span class="wm-sidebar__logo-text">
                <img src="{{asset('assets/img/logo/logo-text.png')}}" alt="img">
            </span>

        </a>


        <button
            type="button"
            class="wm-sidebar__toggle"
            id="wm-sidebar-toggle"
            aria-label="Collapse sidebar"
            aria-expanded="true"
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

    <nav class="wm-sidebar__nav">


        <!-- =================================================
             Overview
             ================================================= -->

        <div class="wm-sidebar__group">

            <div class="wm-sidebar__label">
                Overview
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
                    Dashboard
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
                    Notifications
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
                Work Management
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
                    Tasks
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
                >

                    <span class="wm-sidebar__item-icon">
                        <i class="ph ph-kanban"></i>
                    </span>

                    <span class="wm-sidebar__item-text">
                        Projects
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
                        <span>All Projects</span>
                    </a>


                    <a
                        href="{{ route('projects.create') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('projects.create') ? 'is-active' : '' }}"
                    >
                        <i class="ph ph-plus-circle"></i>
                        <span>Create Project</span>
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
                    Calendar
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
                    Time Tracking
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
                    Workstreams
                </span>

            </a>

        </div>


        <!-- =================================================
             Workspace
             ================================================= -->

        <div class="wm-sidebar__group">

            <div class="wm-sidebar__label">
                Workspace
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
                    Team Members
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
                    Documents
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
                    Files
                </span>

            </a>

        </div>


        <!-- =================================================
             Insights
             ================================================= -->

        <div class="wm-sidebar__group">

            <div class="wm-sidebar__label">
                Insights
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
                    Reports
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
                    Risks & Issues
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
                    Activity
                </span>

            </a>

        </div>


        <!-- =================================================
             Administration
             ================================================= -->

        <div class="wm-sidebar__group">

            <div class="wm-sidebar__label">
                Administration
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
                >

                    <span class="wm-sidebar__item-icon">
                        <i class="ph ph-gear"></i>
                    </span>

                    <span class="wm-sidebar__item-text">
                        Settings
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
                        <span>General</span>
                    </a>


                    {{-- Profile --}}

                    <a
                        href="{{ route('settings.profile') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('settings.profile') ? 'is-active' : '' }}"
                    >
                        <i class="ph ph-user-circle"></i>
                        <span>Profile</span>
                    </a>


                    {{-- Roles & Permissions --}}

                    <a
                        href="{{ route('settings.roles-permissions') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('settings.roles-permissions') ? 'is-active' : '' }}"
                    >
                        <i class="ph ph-shield-check"></i>
                        <span>Roles & Permissions</span>
                    </a>


                    {{-- Workspace --}}

                    <a
                        href="{{ route('settings.workspace') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('settings.workspace') ? 'is-active' : '' }}"
                    >
                        <i class="ph ph-buildings"></i>
                        <span>Workspace</span>
                    </a>


                    {{-- Integrations --}}

                    <a
                        href="{{ route('settings.integrations') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('settings.integrations') ? 'is-active' : '' }}"
                    >
                        <i class="ph ph-plugs-connected"></i>
                        <span>Integrations</span>
                    </a>


                    {{-- API / Developer --}}

                    <a
                        href="{{ route('settings.api') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('settings.api') ? 'is-active' : '' }}"
                    >
                        <i class="ph ph-code"></i>
                        <span>API / Developer</span>
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
                >

                    <span class="wm-sidebar__item-icon">
                        <i class="ph ph-credit-card"></i>
                    </span>

                    <span class="wm-sidebar__item-text">
                        Billing
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
                        <span>Billing Overview</span>
                    </a>


                    {{-- Subscription --}}

                    <a
                        href="{{ route('billing.subscription') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('billing.subscription') ? 'is-active' : '' }}"
                    >
                        <i class="ph ph-repeat"></i>
                        <span>Subscription</span>
                    </a>


                    {{-- Pricing --}}

                    <a
                        href="{{ route('pricing') }}"
                        class="wm-sidebar__submenu-item {{ request()->routeIs('pricing') ? 'is-active' : '' }}"
                    >
                        <i class="ph ph-tag"></i>
                        <span>Pricing</span>
                    </a>

                </div>

            </div>

        </div>


    </nav>


    <!-- ====================================================
         Sidebar User
         ==================================================== -->

    <div class="wm-sidebar__user">

        <div class="wm-sidebar__user-avatar">
            AM
        </div>


        <div class="wm-sidebar__user-info">

        <span class="wm-sidebar__user-name">
            Alex Morgan
        </span>

            <span class="wm-sidebar__user-email">
            alex@workmanagement.com
        </span>

        </div>


        <div class="wm-sidebar__user-actions">

            {{-- Logout --}}

            <form
                method="POST"
                action="{{ route('logout') }}"
                class="wm-sidebar__logout-form"
            >

                @csrf

                <button
                    type="submit"
                    class="wm-sidebar__logout"
                    aria-label="Logout"
                    title="Logout"
                >

                    <i class="ph ph-sign-out"></i>

                    <span class="wm-sidebar__logout-text">
                    Logout
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

                    const $dropdown = $(this).closest(
                        '[data-sidebar-dropdown]'
                    );

                    const isOpen = $dropdown.hasClass(
                        'is-open'
                    );


                    // Close other dropdowns

                    $('[data-sidebar-dropdown]')
                        .not($dropdown)
                        .removeClass('is-open')
                        .find('[data-sidebar-dropdown-toggle]')
                        .attr('aria-expanded', 'false');


                    // Toggle current dropdown

                    if (isOpen) {

                        $dropdown.removeClass('is-open');

                        $(this).attr(
                            'aria-expanded',
                            'false'
                        );

                    } else {

                        $dropdown.addClass('is-open');

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

        });

    </script>
@endpush
