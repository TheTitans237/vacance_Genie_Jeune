<!-- Preloader start here -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	<!-- Preloader end here -->


	<!-- mobile menu start here -->
	<div class="mobile-menu-area">
		<div class="logo-area">
			<a class="logo" href="{{route('acceuil')}}"><img src="{{asset('images/logo.png')}}" alt="logo" class="img-responsive"></a>
			<button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
				data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<div class="mobile-menu">
			<ul class="m-menu">
				<li class="dropdown-menu">
					<a href="{{route('acceuil')}}">Home</a>
				</li>
				<li class="dropdown-submenu">
					<a href="#">About</a>
				</li>
				<li class="dropdown-submenu">
					<a href="{{ url('/event') }}">Event</a>
					<ul class="mobile-submenu">
						<li><a href="{{url('/event-single')}}">Event Single</a></li>
					</ul>
				</li>

				<li class="dropdown-submenu">
					<a href="#">Blog</a>
					<ul class="mobile-submenu">
						<li><a href="{{url('/blog')}}">Blog Page</a></li>
						<li><a href="{{url('/single')}}">Blog Single</a></li>
					</ul>
				</li>
				<li><a href="{{url('/contact')}}">Contact Us</a></li>
			</ul>
		</div>
	</div>
	<!-- mobile menu ending here -->
