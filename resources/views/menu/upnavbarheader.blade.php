<header>
		<div class="header-top">
			<div class="container">
				<div class="ht-area">
					<ul class="left">
						<li><span><i class="fa fa-phone" aria-hidden="true"></i></span> Phone : 8801 234 567 890</li>
						<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Opening Time : 9:30am-5:30pm
						</li>
						<li><span><i class="fa fa-home" aria-hidden="true"></i></span> Address : Labartisan 1205 Newyork
						</li>
					</ul>
					<ul class="right">
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="main-menu">
			<div class="container">
				<div class="row no-gutters">
					<nav class="main-menu-area w-100">
						<div class="logo-area">
							<a class="" href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="logo"
									class="img-responsive"></a>
							<button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
								data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="menu-area">

								<span class="menu-search-cart menu-search"><i class="fa fa-search" aria-hidden="true"></i></span>



							<ul class="menu">
								<li class="dropdown">
									<a href="{{url('/')}}" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Home </a>
									<ul class="dropdown-menu">
									</ul>
								</li>
								<li class="dropdown">
									<a href="{{url('/about')}}" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">About </a>
								</li>
								<li class="dropdown">
									<a href="{{url('/event')}}" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Event <span class="caret"></span></a>
									<ul class="dropdown-menu">

										<li><a href="{{url('/event')}}">Event</a></li>
										<li><a href="{{url('/event-single')}}">Event Details</a></li>

									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Blog <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="{{url('/blog')}}">Blog Page</a></li>
										<li><a href="{{url('/single')}}">Blog Single</a></li>
									</ul>
								</li>
								<li><a href="{{url('/contact')}}">Contact</a></li>
							</ul>
							<form class="menu-search-form">
								<input type="text" name="search" placeholder="Search here...">
								<span class="menu-search-close"><i class="fa fa-times" aria-hidden="true"></i></span>
							</form>


                            <a href="{{ route('create') }}" class="btn m-1 btn-outline-success btn-l start-100 rounded-pill btn-responsive  ">Inscrivez vous</a>


						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
