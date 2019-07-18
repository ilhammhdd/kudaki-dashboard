<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/line-icons.css')}}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/slicknav.css')}}">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/owl.theme.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/slick-theme.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/animate.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/main.css')}}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">

</head>
<body>

<!-- Header Area wrapper Starts -->
<header id="header-wrap">
    @yield('navBar')

    @yield('afterNavBar')

</header>
<!-- Header Area wrapper End -->

@yield('bodyContent')

@yield('footer')


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('/js/jquery-min.js')}}"></script>
<script src="{{asset('/js/popper.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/js/slick.min.js')}}"></script>
<script src="{{asset('/js/wow.js')}}"></script>
<script src="{{asset('/js/jquery.nav.js')}}"></script>
<script src="{{asset('/js/scrolling-nav.js')}}"></script>
<script src="{{asset('/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('/js/main.js')}}"></script>
<script src="{{asset('/js/form-validator.min.js')}}"></script>
<script src="{{asset('/js/contact-form-script.min.js')}}"></script>
<script src="{{asset('/js/map.js')}}"></script>
<script type="text/javascript"
        src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
</body>
</html>
