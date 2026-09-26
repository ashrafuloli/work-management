document.addEventListener('DOMContentLoaded', function () {


    // =====================================================
    // Elements
    // =====================================================

    const sidebar = document.getElementById('wm-sidebar');

    const sidebarToggle = document.getElementById(
        'wm-sidebar-toggle'
    );

    const sidebarToggleIcon = document.getElementById(
        'wm-sidebar-toggle-icon'
    );

    const mobileToggle = document.getElementById(
        'wm-mobile-sidebar-toggle'
    );


    if (!sidebar) {
        return;
    }


    // =====================================================
    // Breakpoint
    // =====================================================

    const mobileBreakpoint = 991;


    // =====================================================
    // Update Desktop Toggle
    // =====================================================

    function updateSidebarToggle() {

        if (!sidebarToggle || !sidebarToggleIcon) {
            return;
        }


        const isCollapsed = sidebar.classList.contains(
            'is-collapsed'
        );


        if (isCollapsed) {

            sidebarToggle.setAttribute(
                'aria-label',
                'Expand sidebar'
            );

            sidebarToggle.setAttribute(
                'title',
                'Expand sidebar'
            );

            sidebarToggle.setAttribute(
                'aria-expanded',
                'false'
            );


            sidebarToggleIcon.classList.remove(
                'ph-sidebar-simple'
            );

            sidebarToggleIcon.classList.add(
                'ph-sidebar'
            );

        } else {

            sidebarToggle.setAttribute(
                'aria-label',
                'Collapse sidebar'
            );

            sidebarToggle.setAttribute(
                'title',
                'Collapse sidebar'
            );

            sidebarToggle.setAttribute(
                'aria-expanded',
                'true'
            );


            sidebarToggleIcon.classList.remove(
                'ph-sidebar'
            );

            sidebarToggleIcon.classList.add(
                'ph-sidebar-simple'
            );

        }

    }


    // =====================================================
    // Desktop Sidebar Toggle
    // =====================================================

    if (sidebarToggle) {

        sidebarToggle.addEventListener(
            'click',
            function () {


                // Mobile

                if (window.innerWidth <= mobileBreakpoint) {

                    sidebar.classList.remove(
                        'is-open'
                    );

                    if (mobileToggle) {

                        mobileToggle.setAttribute(
                            'aria-expanded',
                            'false'
                        );

                    }

                    return;
                }


                // Desktop

                sidebar.classList.toggle(
                    'is-collapsed'
                );


                updateSidebarToggle();

            }
        );

    }


    // =====================================================
    // Mobile Sidebar Toggle
    // =====================================================

    if (mobileToggle) {

        mobileToggle.addEventListener(
            'click',
            function () {

                const isOpen =
                    sidebar.classList.toggle(
                        'is-open'
                    );


                mobileToggle.setAttribute(
                    'aria-expanded',
                    isOpen ? 'true' : 'false'
                );

            }
        );

    }


    // =====================================================
    // Close Mobile Sidebar Outside Click
    // =====================================================

    document.addEventListener(
        'click',
        function (event) {


            if (
                window.innerWidth >
                mobileBreakpoint
            ) {
                return;
            }


            if (
                !sidebar.classList.contains(
                    'is-open'
                )
            ) {
                return;
            }


            if (
                sidebar.contains(event.target)
            ) {
                return;
            }


            if (
                mobileToggle &&
                mobileToggle.contains(event.target)
            ) {
                return;
            }


            sidebar.classList.remove(
                'is-open'
            );


            if (mobileToggle) {

                mobileToggle.setAttribute(
                    'aria-expanded',
                    'false'
                );

            }

        }
    );


    // =====================================================
    // Escape Key
    // =====================================================

    document.addEventListener(
        'keydown',
        function (event) {


            if (event.key !== 'Escape') {
                return;
            }


            if (
                window.innerWidth <=
                mobileBreakpoint
            ) {

                sidebar.classList.remove(
                    'is-open'
                );


                if (mobileToggle) {

                    mobileToggle.setAttribute(
                        'aria-expanded',
                        'false'
                    );

                }

            }

        }
    );


    // =====================================================
    // Resize Handler
    // =====================================================

    window.addEventListener(
        'resize',
        function () {


            if (
                window.innerWidth >
                mobileBreakpoint
            ) {

                sidebar.classList.remove(
                    'is-open'
                );


                if (mobileToggle) {

                    mobileToggle.setAttribute(
                        'aria-expanded',
                        'false'
                    );

                }

            }


            updateSidebarToggle();

        }
    );


    // =====================================================
    // Initial State
    // =====================================================

    updateSidebarToggle();


});
