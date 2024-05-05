<!DOCTYPE html>
<html lang="en">

@include('dashboard.layouts.head')

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        @include('dashboard.layouts.nav')

        @include('dashboard.layouts.sidenav')

        <div class="content-wrapper">

            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        @include('dashboard.layouts.footer')

    </div>

    @include('dashboard.layouts.scripts')
</body>

</html>
