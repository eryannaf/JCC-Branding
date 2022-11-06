<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <link href="{{ asset('assets/plugins/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet">

    <!-- Clock Picker  -->
    <link href="{{ asset('assets/plugins/clockpicker/dist/jquery-clockpicker.min.css') }}" rel="stylesheet">
    <!-- Pignose Calender -->
    <link href="{{ asset('assets/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Toaster -->
    <link href="{{ asset('assets/plugins/toastr/css/toastr.min.css') }}" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="{{ asset('assets/plugins/sweetalert/css/sweetalert.css') }}" rel="stylesheet">

@stack('style')
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('layout.navHeaderStart')
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('layout.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                @include('layout.sidebar')
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            @yield('content')
        </div>
            <!--**********************************
            Content body end
        ***********************************-->


            <!--**********************************
            Footer start
        ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright &copy; Designed & Developed by <a
                            href="https://themeforest.net/user/quixlab">Quixlab</a>
                        2018</p>
                </div>
            </div>
            <!--**********************************
            Footer end
        ***********************************-->
        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <!--**********************************
        Scripts
    ***********************************-->
        <script src="{{ asset('assets/plugins/common/common.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom.min.js') }}"></script>
        <script src="{{ asset('assets/js/settings.js') }}"></script>
        <script src="{{ asset('assets/js/gleek.js') }}"></script>
        <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>

        <!-- Chartjs -->
        <script src="{{ asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
        <!-- Circle progress -->
        <script src="{{ asset('assets/plugins/circle-progress/circle-progress.min.js') }}"></script>
        <!-- Datamap -->
        {{-- <script src="{{ asset('assets/plugins/d3v3/index.js') }}"></script>
        <script src="{{ asset('assets/plugins/topojson/topojson.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datamaps/datamaps.world.min.js') }}"></script> --}}
        <!-- Morrisjs -->
        <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
        <!-- Pignose Calender -->
        <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
        <!-- ChartistJS -->
        {{-- <script src="{{ asset('assets/plugins/chartist/js/chartist.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>
        --}}
        <!-- Toastr -->
        <script src="{{ asset('assets/plugins/toastr/js/toastr.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/toastr/js/toastr.init.js') }}"></script>
        <!-- FullCalender -->
        <script src="{{ asset('assets/plugins/sweetalert/js/sweetalert.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/sweetalert/js/sweetalert.init.js') }}"></script>
        <script src="{{ asset('assets/plugins/jqueryui/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins-init/fullcalendar-init.js') }}"></script>
        <!-- Clock Picker -->
        <script src="{{ asset('assets/plugins/clockpicker/dist/jquery-clockpicker.min.js') }}"></script>


        <script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>

        <script>
            (function ($) {
                "use strict"

                new quixSettings({
                    version: "light", //2 options "light" and "dark"
                    layout: "vertical", //2 options, "vertical" and "horizontal"
                    navheaderBg: "color_1", //have 10 options, "color_1" to "color_10"
                    headerBg: "color_1", //have 10 options, "color_1" to "color_10"
                    sidebarStyle: "full", //defines how sidebar should look like, options are: "full", "compact", "mini" and "overlay". If layout is "horizontal", sidebarStyle won't take "overlay" argument anymore, this will turn into "full" automatically!
                    sidebarBg: "color_1", //have 10 options, "color_1" to "color_10"
                    sidebarPosition: "fixed", //have two options, "static" and "fixed"
                    headerPosition: "static", //have two options, "static" and "fixed"
                    containerLayout: "wide", //"boxed" and  "wide". If layout "vertical" and containerLayout "boxed", sidebarStyle will automatically turn into "overlay".
                    direction: "ltr" //"ltr" = Left to Right; "rtl" = Right to Left
                });


            })(jQuery);

        </script>

        @stack('script')

</body>

</html>
