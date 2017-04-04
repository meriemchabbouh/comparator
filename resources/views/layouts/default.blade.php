<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<head>
@section('head')
    @include('includes.head')
@show
</head>

<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
    @include('includes.header')
    <!-- End Header -->
    
    <!-- main content -->
    @yield('content')
    <!-- End content -->

    <!--footer -->
    @include('includes.footer')
    <!-- End footer -->

    <div id="toTop"></div><!-- Back to top button -->

    <!-- Common scripts -->

    @section('js')
        @include('layouts.scripts')
    @show



</body>
</html>