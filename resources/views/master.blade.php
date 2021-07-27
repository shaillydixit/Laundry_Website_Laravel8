<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Torque Laundries</title>

    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/bootstrap.min.css')}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/revolution/css/settings.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/style.css')}}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/colors/color1.css')}}" id="colors">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/responsive.css')}}">

    <link rel="shortcut icon" href="{{asset('img/1.jpeg')}}">
    <link rel="apple-touch-icon" href="{{asset('img/1.jpeg')}}">



</head>

<body>
    <div class="boxed">
        <!-- Preloader -->
        @include('main.page_head')
        @include('main.header')

        <!-- START REVOLUTION SLIDER 5.4.2 auto mode -->

        <!-- END REVOLUTION SLIDER -->
        @yield('content')



        @include('main.footer')

        <!-- /.button-go-top -->

    </div> <!-- /.boxed -->
    <!-- Javascript -->
    <!-- map js -->
    <script type="text/javascript" src="{{asset('frontend/javascript/jquery-validate.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&region=GB"></script>
    <script type="text/javascript" src="{{asset('frontend/javascript/gmap3.min.js')}}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Javascript -->
    <script type="text/javascript" src="{{asset('frontend/javascript/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/javascript/tether.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/javascript/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/javascript/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/javascript/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/javascript/jquery.easing.js')}}"></script>

    <script type="text/javascript" src="{{asset('frontend/javascript/jquery-countTo.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/javascript/jquery.cookie.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/javascript/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/javascript/main.js')}}"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="{{asset('frontend/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/revolution/js/slider_v1.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{asset('frontend/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
</body>

</html>