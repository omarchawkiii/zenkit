<!doctype html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if ( Lang::locale() == "ar" ||  Lang::locale() == "") dir="rtl" @else dir="ltr" @endif data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Boolster Group </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Boolster Group" name="description" />
    <meta content="Boolster" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">

    <!-- plugin css
    <link href="{{asset('/assets/admin/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />-->

    <!-- Layout config Js -->
    <script src="{{asset('/assets/admin/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->

        <link href="{{asset('/assets/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />




    <!-- Icons Css -->
    <link href="{{asset('/assets/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->

        <link href="{{asset('/assets/admin/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/admin/css/custom.css')}}" rel="stylesheet" type="text/css" />


    @yield('customcss')
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

    @include('admin.partials.header')

        <!-- ========== App Menu ========== -->
        @include('admin.partials.sidebar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        @yield('content')

        <!-- end main content-->
        @include('admin.partials.footer')

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
    <script src="{{asset('/assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/assets/admin/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('/assets/admin/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('/assets/admin/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('/assets/admin/js/plugins.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('/assets/admin/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Vector map
    <script src="{{asset('/assets/admin/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
    <script src="{{asset('/assets/admin/libs/jsvectormap/maps/world-merc.js')}}"></script>

    - Dashboard init
    <script src="{{asset('/assets/admin/js/pages/dashboard.init.js')}}"></script>
 -->
    <!-- App js -->


    @yield('custom_script')
    <script src="{{asset('/assets/admin/js/app.js')}}"></script>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YY3DNNCHRN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YY3DNNCHRN');
</script>
@include('partials.payment')

</body>


</html>
