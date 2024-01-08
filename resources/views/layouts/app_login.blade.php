<!doctype html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Facturilo | @yield('title')  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">

    <!-- plugin css
    <link href="{{asset('/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />-->

    <!-- Layout config Js -->
    <script src="{{asset('/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
    @yield('customcss')
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">



        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="account-pages">
            <div class="container">
               @yield('content')
            </div>
            <!-- end container -->
        </div>



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

    @yield('custom_script')

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YY3DNNCHRN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YY3DNNCHRN');
</script>
</body>


</html>
