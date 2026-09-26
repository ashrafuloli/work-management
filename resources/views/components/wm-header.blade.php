<header class="wm-header">


    <!-- ====================================================
         Header Left
         ==================================================== -->

    <div class="wm-header__left">


        {{-- Mobile Sidebar Toggle --}}

        <button
            type="button"
            class="wm-header__mobile-toggle"
            id="wm-mobile-sidebar-toggle"
            aria-label="Open sidebar"
            aria-expanded="false"
        >

            <i class="ph ph-list"></i>

        </button>


        {{-- Mobile Logo --}}

        <div class="wm-header__mobile-logo">

            <a
                href="{{ route('dashboard') }}"
                class="wm-header__mobile-logo-link"
                aria-label="WorkManagement Dashboard"
            >

                <span class="wm-header__mobile-logo-mark">

                    <img
                        src="{{ asset('assets/img/logo/favicon.png') }}"
                        alt="WorkManagement"
                    >

                </span>

            </a>

        </div>

    </div>


    <!-- ====================================================
         Header Right
         ==================================================== -->

    <div class="wm-header__right">


        <!-- =================================================
             Global Search
             ================================================= -->

        <a
            href="{{ route('search') }}"
            class="wm-header__search"
            aria-label="Global Search"
        >

            <span class="wm-header__search-icon">
                <i class="ph ph-magnifying-glass"></i>
            </span>

            <span class="wm-header__search-placeholder">
                Search anything...
            </span>

            <span class="wm-header__search-shortcut">
                ⌘ K
            </span>

        </a>


        <!-- =================================================
             Calendar
             ================================================= -->

        <a
            href="{{ route('calendar') }}"
            class="wm-header__action"
            aria-label="Calendar"
            title="Calendar"
        >

            <i class="ph ph-calendar-blank"></i>

        </a>


        <!-- =================================================
             Notifications
             ================================================= -->

        <a
            href="{{ route('notifications') }}"
            class="wm-header__action wm-header__action--notification"
            aria-label="Notifications"
            title="Notifications"
        >

            <i class="ph ph-bell"></i>

            <span class="wm-header__notification-dot"></span>

        </a>


        <!-- =================================================
             Theme Toggle
             ================================================= -->

        <button
            type="button"
            class="wm-header__action"
            id="wm-theme-toggle"
            aria-label="Toggle theme"
            title="Toggle theme"
        >

            <i
                class="ph ph-moon"
                id="wm-theme-icon"
            ></i>

        </button>


        <!-- =================================================
             Profile
             ================================================= -->

        <div
            class="wm-header__profile"
            data-header-profile
        >

            <button
                type="button"
                class="wm-header__profile-toggle"
                data-header-profile-toggle
                aria-expanded="false"
                aria-label="Open profile menu"
            >

                <span class="wm-header__profile-avatar">
                    AM
                </span>

                <span class="wm-header__profile-info">

                    <span class="wm-header__profile-name">
                        Alex Morgan
                    </span>

                    <span class="wm-header__profile-role">
                        Administrator
                    </span>

                </span>

                <i class="ph ph-caret-down wm-header__profile-arrow"></i>

            </button>


            <!-- Profile Dropdown -->

            <div
                class="wm-header__profile-dropdown"
                data-header-profile-menu
            >


                <!-- User -->

                <div class="wm-header__profile-dropdown-user">

                    <span class="wm-header__profile-dropdown-avatar">
                        AM
                    </span>

                    <div class="wm-header__profile-dropdown-info">

                        <strong>
                            Alex Morgan
                        </strong>

                        <span>
                            alex@workmanagement.com
                        </span>

                    </div>

                </div>


                <div class="wm-header__profile-dropdown-divider"></div>


                <!-- Profile -->

                <a
                    href="{{ route('settings.profile') }}"
                    class="wm-header__profile-dropdown-item"
                >

                    <i class="ph ph-user-circle"></i>

                    <span>
                        My Profile
                    </span>

                </a>


                <!-- Settings -->

                <a
                    href="{{ route('settings.index') }}"
                    class="wm-header__profile-dropdown-item"
                >

                    <i class="ph ph-gear"></i>

                    <span>
                        Settings
                    </span>

                </a>


                <!-- Billing -->

                <a
                    href="{{ route('billing.index') }}"
                    class="wm-header__profile-dropdown-item"
                >

                    <i class="ph ph-credit-card"></i>

                    <span>
                        Billing
                    </span>

                </a>


                <div class="wm-header__profile-dropdown-divider"></div>


                <!-- Logout -->

                <form
                    method="POST"
                    action="{{ route('logout') }}"
                    class="wm-header__logout-form"
                >

                    @csrf

                    <button
                        type="submit"
                        class="wm-header__profile-dropdown-item wm-header__profile-dropdown-item--danger"
                    >

                        <i class="ph ph-sign-out"></i>

                        <span>
                            Logout
                        </span>

                    </button>

                </form>

            </div>

        </div>


    </div>

</header>


@push('script')
    <script>

        $(document).ready(function () {

            'use strict';


            // =========================================================
            // Header Profile Dropdown
            // =========================================================

            $(document).on(
                'click',
                '[data-header-profile-toggle]',
                function (event) {

                    event.preventDefault();
                    event.stopPropagation();

                    const $profile =
                        $(this).closest(
                            '[data-header-profile]'
                        );

                    const $menu =
                        $profile.find(
                            '[data-header-profile-menu]'
                        );

                    const isOpen =
                        $profile.hasClass(
                            'is-open'
                        );


                    // Close all profile menus

                    $('[data-header-profile]')
                        .not($profile)
                        .removeClass('is-open')
                        .find('[data-header-profile-toggle]')
                        .attr(
                            'aria-expanded',
                            'false'
                        );


                    // Toggle current menu

                    if (isOpen) {

                        $profile.removeClass(
                            'is-open'
                        );

                        $(this).attr(
                            'aria-expanded',
                            'false'
                        );

                    } else {

                        $profile.addClass(
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
            // Profile Dropdown Outside Click
            // =========================================================

            $(document).on(
                'click',
                function () {

                    $('[data-header-profile]')
                        .removeClass('is-open')
                        .find('[data-header-profile-toggle]')
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
                '[data-header-profile]',
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

                        $('[data-header-profile]')
                            .removeClass('is-open')
                            .find('[data-header-profile-toggle]')
                            .attr(
                                'aria-expanded',
                                'false'
                            );

                    }

                }
            );


            // =========================================================
            // Theme Toggle
            // =========================================================

            $(document).on(
                'click',
                '#wm-theme-toggle',
                function () {

                    const $html =
                        $('html');

                    const currentTheme =
                        $html.attr('data-theme');

                    const $icon =
                        $('#wm-theme-icon');


                    if (currentTheme === 'dark') {

                        $html.attr(
                            'data-theme',
                            'light'
                        );

                        $icon
                            .removeClass('ph-sun')
                            .addClass('ph-moon');

                        localStorage.setItem(
                            'wm-theme',
                            'light'
                        );

                    } else {

                        $html.attr(
                            'data-theme',
                            'dark'
                        );

                        $icon
                            .removeClass('ph-moon')
                            .addClass('ph-sun');

                        localStorage.setItem(
                            'wm-theme',
                            'dark'
                        );

                    }

                }
            );


            // =========================================================
            // Restore Theme
            // =========================================================

            const savedTheme =
                localStorage.getItem(
                    'wm-theme'
                );


            if (savedTheme) {

                $('html').attr(
                    'data-theme',
                    savedTheme
                );


                if (savedTheme === 'dark') {

                    $('#wm-theme-icon')
                        .removeClass('ph-moon')
                        .addClass('ph-sun');

                }

            }

        });

    </script>
@endpush
