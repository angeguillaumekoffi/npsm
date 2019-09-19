<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=400, maximum-scale=0.3">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{ asset('img/site/logo-vert.png') }}">
		<!-- Author Meta -->
		<meta name="Astech" content="Astech">
		<!-- Meta Description -->
		<meta name="description" content="Site web de la jeune chambre internationale">
		<!-- Meta Keyword -->
		<meta name="keywords" content="jci cote d'ivoire">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Pharmacie Ste Marie : @yield('titre')</title>
		<!--CSS============================================= -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/site/linearicons.css') }} ">
		<link rel="stylesheet" href="{{ asset('css/site/font-awesome.min.css') }} ">
		<link rel="stylesheet" href="{{ asset('css/site/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('css/site/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('css/site/nice-select.css') }}">
		<link rel="stylesheet" href="{{ asset( 'css/site/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/site/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('css/site/jquery-ui.css') }}">
		<link rel="stylesheet" href="{{ asset('css/site/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/w3/w3.css') }}">
        <!-- Pour le slider-->
        <link rel="stylesheet" href="{{asset('css/site/styles.css')}}" />
        <link rel="stylesheet" href="{{asset('css/site/iview.css')}}" />
        <link rel="stylesheet" href="{{asset('css/site/skin 1/style.css')}}" />
    <style>
    </style>
    </head>
	<body style="background-color: #2b2b2b; font-size: 14px">
    <header>
        @include('base.header-top')

    </header>
    <div class="site-main-container" style="background-color: #2b2b2b;">
            @yield('contenu')
    </div>
		<!-- start footer Area -->
            @include('base.footer')
		<!-- End footer Area -->
		<script src="{{ asset('js/site/vendor/jquery-2.2.4.min.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="{{ asset('js/site/vendor/bootstrap.min.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="{{ asset('js/site/easing.min.js') }}"></script>
		<script src="{{ asset('js/site/hoverIntent.js') }}"></script>
		<script src="{{ asset('js/site/superfish.min.js') }}"></script>
		<script src="{{ asset('js/site/jquery.ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('js/site/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('js/site/mn-accordion.js') }}"></script>
		<script src="{{ asset('js/site/jquery-ui.js') }}"></script>
		<script src="{{ asset('js/site/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('js/site/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('js/site/mail-script.js') }}"></script>
		<script src="{{ asset('js/site/main.js' ) }}"></script>
    <!--Pour le slder-->
    <script src="{{asset('js/site/jquery-1.7.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/site/raphael-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/site/jquery.easing.js')}}"></script>
    <script src="{{asset('js/site/iview.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('#iview').iView({
                pauseTime: 5000,
                directionNav: false,
                controlNav: true,
                tooltipY: -15
            });
        });
    </script>
    <script>
        window.onscroll = function() {stickFunction()};
        var logo = document.getElementById("log-text");
        var rech1 = document.getElementById("rech");
        var heada = document.getElementById("heada");
        var navbar = document.getElementById("main-menu");
        var actv = document.getElementById("bout");
        var sticky = navbar.offsetTop;
        function stickFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky");
                actv.classList.remove("w3-hide");
                logo.classList.remove("w3-hide");
                heada.classList.add("w3-padding-16");
                heada.style.backgroundImage = "linear-gradient(-90deg, darkblue, deepskyblue)";
                rech1.style.width = "500px";
                rech1.style.marginLeft = "10%";
            } else {
                navbar.classList.remove("sticky");
                actv.classList.add("w3-hide");
                logo.classList.add("w3-hide");
                heada.classList.remove("w3-padding-16");
                heada.style.backgroundImage = "linear-gradient(-90deg, rgba(31,119,0,0.99), rgba(31,119,0,0.99))";
                rech1.style.width = "350px";
                rech1.style.marginLeft = "0";

            }
        }
    </script>

	</body>
</html>
