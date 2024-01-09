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


.tecnoponto-whatsapp-icone{
    position:fixed  ;
    bottom:10px;
    left:10px;
     z-index:999999;
}
.tecnoponto-whatsapp-icone{
 animation: animationFrames linear 2s;
 animation-iteration-count: infinite;
 transform-origin: 50% 50%;
 -webkit-animation: animationFrames linear 2s;
 -webkit-animation-iteration-count: infinite;
 -webkit-transform-origin: 50% 50%;
 -moz-animation: animationFrames linear 2s;
 -moz-animation-iteration-count: infinite;
 -moz-transform-origin: 50% 50%;
 -o-animation: animationFrames linear 2s;
 -o-animation-iteration-count: infinite;
 -o-transform-origin: 50% 50%;
 -ms-animation: animationFrames linear 2s;
 -ms-animation-iteration-count: infinite;
 -ms-transform-origin: 50% 50%;
}

@keyframes animationFrames{
 0% {
   transform:  translate(0px,0px)  ;
 }
 5% {
   transform:  translate(-5px,0px)  ;
 }
 10% {
   transform:  translate(5px,0px)  ;
 }
 15% {
   transform:  translate(-10px,0px)  ;
 }
 20% {
   transform:  translate(10px,0px)  ;
 }
 25% {
   transform:  translate(-10px,0px)  ;
 }
 30% {
   transform:  translate(0px,0px)  ;
 }
 35% {
   transform:  translate(0px,0px)  ;
 }
 40% {
   transform:  translate(0px,0px)  ;
 }
 45% {
   transform:  translate(0px,0px)  ;
 }
 100% {
   transform:  translate(0px,0px)  ;
 }
}

@-moz-keyframes animationFrames{
 0% {
   -moz-transform:  translate(0px,0px)  ;
 }
 5% {
   -moz-transform:  translate(-5px,0px)  ;
 }
 10% {
   -moz-transform:  translate(5px,0px)  ;
 }
 15% {
   -moz-transform:  translate(-10px,0px)  ;
 }
 20% {
   -moz-transform:  translate(10px,0px)  ;
 }
 25% {
   -moz-transform:  translate(-10px,0px)  ;
 }
 30% {
   -moz-transform:  translate(0px,0px)  ;
 }
 35% {
   -moz-transform:  translate(0px,0px)  ;
 }
 40% {
   -moz-transform:  translate(0px,0px)  ;
 }
 45% {
   -moz-transform:  translate(0px,0px)  ;
 }
 100% {
   -moz-transform:  translate(0px,0px)  ;
 }
}

@-webkit-keyframes animationFrames {
 0% {
   -webkit-transform:  translate(0px,0px)  ;
 }
 5% {
   -webkit-transform:  translate(-5px,0px)  ;
 }
 10% {
   -webkit-transform:  translate(5px,0px)  ;
 }
 15% {
   -webkit-transform:  translate(-10px,0px)  ;
 }
 20% {
   -webkit-transform:  translate(10px,0px)  ;
 }
 25% {
   -webkit-transform:  translate(-10px,0px)  ;
 }
 30% {
   -webkit-transform:  translate(0px,0px)  ;
 }
 35% {
   -webkit-transform:  translate(0px,0px)  ;
 }
 40% {
   -webkit-transform:  translate(0px,0px)  ;
 }
 45% {
   -webkit-transform:  translate(0px,0px)  ;
 }
 100% {
   -webkit-transform:  translate(0px,0px)  ;
 }
}

@-o-keyframes animationFrames {
 0% {
   -o-transform:  translate(0px,0px)  ;
 }
 5% {
   -o-transform:  translate(-5px,0px)  ;
 }
 10% {
   -o-transform:  translate(5px,0px)  ;
 }
 15% {
   -o-transform:  translate(-10px,0px)  ;
 }
 20% {
   -o-transform:  translate(10px,0px)  ;
 }
 25% {
   -o-transform:  translate(-10px,0px)  ;
 }
 30% {
   -o-transform:  translate(0px,0px)  ;
 }
 35% {
   -o-transform:  translate(0px,0px)  ;
 }
 40% {
   -o-transform:  translate(0px,0px)  ;
 }
 45% {
   -o-transform:  translate(0px,0px)  ;
 }
 100% {
   -o-transform:  translate(0px,0px)  ;
 }
}

@-ms-keyframes animationFrames {
 0% {
   -ms-transform:  translate(0px,0px)  ;
 }
 5% {
   -ms-transform:  translate(-5px,0px)  ;
 }
 10% {
   -ms-transform:  translate(5px,0px)  ;
 }
 15% {
   -ms-transform:  translate(-10px,0px)  ;
 }
 20% {
   -ms-transform:  translate(10px,0px)  ;
 }
 25% {
   -ms-transform:  translate(-10px,0px)  ;
 }
 30% {
   -ms-transform:  translate(0px,0px)  ;
 }
 35% {
   -ms-transform:  translate(0px,0px)  ;
 }
 40% {
   -ms-transform:  translate(0px,0px)  ;
 }
 45% {
   -ms-transform:  translate(0px,0px)  ;
 }
 100% {
   -ms-transform:  translate(0px,0px)  ;
 }
}
    </style>
    @yield('customcss')

</head>

<body style="background: url('{{asset('/assets/js/plugins.js')}}')">

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

    @yield('custom_script')



</body>


</html>
