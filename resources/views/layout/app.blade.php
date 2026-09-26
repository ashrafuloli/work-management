@include('components.header')

<div class="wm-app">
    <!-- SIDEBAR -->
    @include('components.wm-sidebar')

    <!-- MAIN -->
    <div class="wm-main">
        <!-- HEADER -->
        @include('components.wm-header')

        <!-- CONTENT -->
        <main class="wm-content">
            @yield('main')
        </main>

        <!-- FOOTER -->
        @include('components.wm-footer')
    </div>
</div>

@include('components.footer')


