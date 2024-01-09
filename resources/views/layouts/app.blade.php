<!doctype html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if ( Lang::locale() == "ar" ||  Lang::locale() == "") dir="rtl" @else dir="ltr" @endif data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Facturilo | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">

    <!-- plugin css
        <link href="{{asset('/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />
    -->
    <!-- Layout config Js -->
    <script src="{{asset('/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    @if ( Lang::locale() == "ar" ||  Lang::locale() == "")

        <link href="{{asset('/assets/css/bootstrap_rtl.min.css')}}" rel="stylesheet" type="text/css" />
    @else
        <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    @endif

    <!-- Icons Css -->
    <link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    @if ( Lang::locale() == "ar" ||  Lang::locale() == "")
        <link href="{{asset('/assets/css/app_rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/custom_rtl.css')}}" rel="stylesheet" type="text/css" />
    @else
        <link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
    @endif

    <style>
        .vertical-align-flex--space-between.zenkit-form-dialog__footer__buttons
        {
            display: none !important ;
        }
        zenkit-form-progress
        {
            display: none !important ;
        }
    </style>
    @yield('customcss')

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

    @include('partials.header')

        <!-- ========== App Menu ========== -->

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        @yield('content')

        <!-- end main content-->
        @include('partials.footer')

    <!-- END layout-wrapper -->


    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- JAVASCRIPT -->
    <script src="{{asset('/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('/assets/js/plugins.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Vector map
    <script src="{{asset('/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
    <script src="{{asset('/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

    - Dashboard init
    <script src="{{asset('/assets/js/pages/dashboard.init.js')}}"></script>
 -->
    <!-- App js -->
    <script src="{{asset('/assets/js/app.js')}}"></script>
    <script>

        window.onload = function()
        {
            var iframe = document.getElementById("iframe");
            $('iframe').load( function() {
                $('iframe').contents().find("head")
                .append($("<style type='text/css'>  zenkit-powered-by-zenforms{display:none;}  </style>"));
            });

        }
       </script>
    @yield('custom_script')



</body>


</html>
