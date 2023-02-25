<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from labartisan.net/demo/kidsacademy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 12:38:28 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>KidsAcademy</title>
	<link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/vnd.microsoft.icon" />

	<!-- Google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
		rel="stylesheet">

	<!-- Bootstrap -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- Font-awesome -->
	<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">

	<!-- Flaticon -->
	<link href="{{asset('assets/flaticon/flaticon.css')}}" rel="stylesheet">

	<!-- lightcase -->
	<link href="{{asset('assets/css/lightcase.css')}}" rel="stylesheet">

	<!-- Swiper -->
	<link href="{{asset('assets/css/swiper.min.css')}}" rel="stylesheet">

	<!-- quick-view -->
	<link href="{{asset('assets/css/quick-view.css')}}" rel="stylesheet">

	<!-- nstSlider -->
	<link href="{{asset('assets/css/jquery.nstSlider.css')}}" rel="stylesheet">

	<!-- flexslider -->
	<link href="{{asset('assets/css/flexslider.css')}}" rel="stylesheet">

	<!-- Style -->
	<link href="{{asset('assets/css/rtl.css')}}" rel="stylesheet">

	<!-- Style -->
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

	<!-- Responsive -->
	<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
</head>


<body id="scroll-top">
    @include('menu.upnavbar')
	@include('menu.upnavbarheader')

    @yield('content')

	 @include('menu.downnavbar')

    <!-- Font-awesome -->
    <script src="https://kit.fontawesome.com/f24da8e7c5.js" crossorigin="anonymous"></script>

    <!-- jquery -->
	<script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>

	<!-- Bootstrap -->
	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

	<!-- Isotope -->
	<script src="{{asset('assets/js/isotope.min.js')}}"></script>

	<!-- lightcase -->
	<script src="{{asset('assets/js/lightcase.js')}}"></script>

	<!-- counterup -->
	<script src="../../../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>

	<!-- Swiper -->
	<script src="{{asset('assets/js/swiper.jquery.min.js')}}"></script>

	<!--progress-->
	<script src="{{asset('assets/js/circle-progress.min.js')}}"></script>

	<!--velocity-->
	<script src="{{asset('assets/js/velocity.min.js')}}"></script>

	<!--quick-view-->
	<script src="{{asset('assets/js/quick-view.js')}}"></script>

	<!--nstSlider-->
	<script src="{{asset('assets/js/jquery.nstSlider.js')}}"></script>

	<!--flexslider-->
	<script src="{{asset('assets/js/flexslider-min.js')}}"></script>

	<!--easing-->
	<script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>

	<!--coundown-->
	<script src="{{asset('assets/js/coundown.js')}}"></script>

	<!-- custom -->
	<script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{ asset('assets/js/bo') }}"
</body>


<!-- Mirrored from labartisan.net/demo/kidsacademy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 12:38:28 GMT -->
</html>
