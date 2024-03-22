<!DOCTYPE html>
<html lang="en">
    @include('serviceTemplate/_partials/head')
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            @include('serviceTemplate/_partials/sidebar')
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                @include('serviceTemplate/_partials/navigation')
                <!-- Page content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('serviceTemplate/_partials/footer')
    </body>
</html>