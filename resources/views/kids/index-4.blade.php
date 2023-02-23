<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from labartisan.net/demo/kidsacademy/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 12:38:32 GMT -->
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

<body id="scroll-top" class="home-3">
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
      <a class="logo" href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="logo" class="img-responsive"></a>
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
					<a href="{{url('/')}}">Home</a>
					<!-- <ul class="mobile-submenu">
						<li><a href="{{url('/')}}">home style 1</a></li>
						<li><a href="{{url('/index-3')}}">home style 2</a></li>
						<li><a href="{{url('/index-4')}}">home style 3</a></li>
						<li><a href="{{url('/one-page')}}">home Onepage</a></li>
					</ul> -->
				</li>
        <li class="dropdown-submenu">
          <a href="#">About</a>
          <ul class="mobile-submenu">
            <li><a href="{{url('/about')}}">About Style 1</a></li>
            <li><a href="{{url('/about-2')}}">About Style 2</a></li>
          </ul>
        </li>
        <!-- <li class="dropdown-submenu">
					<a href="#">Classes</a>
					<ul class="mobile-submenu">
						<li><a href="{{url('/classes')}}">Classes</a></li>
						<li><a href="{{url('/class-single')}}">Class Single</a></li>
					</ul>
				</li> -->

        <!-- <li class="dropdown-submenu">
					<a href="#">Teachers</a>
					<ul class="mobile-submenu">
						<li><a href="{{url('/teachers')}}">Teacher</a></li>
						<li><a href="{{url('/teacher-detail')}}">Teacher Details</a></li>
					</ul>
				</li> -->

        <li class="dropdown-submenu">
          <a href="#">Pages</a>
          <ul class="mobile-submenu">
            <li><a href="{{url('/gallery')}}">Gallery</a></li>
            <li><a href="{{url('/gallery-2')}}">Gallery 2</a></li>
            <li><a href="{{url('/event')}}">Event</a></li>
            <li><a href="{{url('/event-single')}}">Event Single</a></li>
            <li><a href="{{url('/404')}}">404</a></li>
          </ul>
        </li>

        <li class="dropdown-submenu">
          <a href="#">Blog</a>
          <ul class="mobile-submenu">
            <li><a href="{{url('/blog')}}">Blog Page</a></li>
            <li><a href="{{url('/single')}}">Blog Single</a></li>
          </ul>
        </li>

        <!-- <li class="dropdown-submenu">
					<a href="#">Shop</a>
					<ul class="mobile-submenu">
						<li><a href="{{url('/product')}}">Product</a></li>
						<li><a href="{{url('/product-details')}}">Product Details</a></li>
						<li><a href="{{url('/shop-cart')}}">Product Cart</a></li>
					</ul>
				</li> -->
        <li><a href="{{url('/contact')}}">Contact Us</a></li>
      </ul>
    </div>
  </div>
  <!-- mobile menu ending here -->


  <header class="header-three">
    <div class="header-top">
      <div class="container">
        <div class="ht-area">
          <ul class="left">
            <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> Phone : 8801 234 567 890</li>
            <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Opening Time : 9:30am-5:30pm</li>
            <li><span><i class="fa fa-home" aria-hidden="true"></i></span> Address : Labartisan 1205 Newyork</li>
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
              <a class="" href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="logo" class="img-responsive"></a>
              <button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <div class="menu-area">
              <ul class="menu-search-cart">
                <li><span class="menu-search"><i class="fa fa-search" aria-hidden="true"></i></span></li>
                <!-- <li class="menu_cart dropdown"><span><i class="fa fa-shopping-bag"
											aria-hidden="true"></i></span>
									<ul class="dropdown-menu first_dropdown shop_feature">
										<li class="feature_item">
											<div class="featured_image">
												<img src="{{asset('images/product/menu_cart_01.jpg')}}" alt="Fratured image"
													class="img-responsive" />
											</div>
											featured image
											<div class="featured_content">
												<h3><a href="#">Product Title</a> </h3>
												<span class="remove"><i class="fa fa-times"
														aria-hidden="true"></i></span>
												<p>quantity: 1</p>
												<span>$85</span>
											</div>
											featured content
										</li>  feature item
										<li class="feature_item">
											<div class="featured_image">
												<img src="{{asset('images/product/menu_cart_02.jpg')}}" alt="Fratured image"
													class="img-responsive" />
											</div>
											featured image
											<div class="featured_content">
												<h3><a href="#">Product Title</a> </h3>
												<span class="remove"><i class="fa fa-times"
														aria-hidden="true"></i></span>
												<p>quantity: 2</p>
												<span>$85</span>
											</div>
											featured content
										</li>  feature item
										<li class="feature_item">
											<div class="featured_image">
												<img src="{{asset('images/product/menu_cart_03.jpg')}}" alt="Fratured image"
													class="img-responsive" />
											</div>
											<featured image
											<div class="featured_content">
												<h3><a href="#">Product Title</a> </h3>
												<span class="remove"><i class="fa fa-times"
														aria-hidden="true"></i></span>
												<p>quantity: 4</p>
												<span>$85</span>
											</div>
											featured content
										</li>  feature item
										<li class="cart_total">total order: <span>$591.00</span></li>
										<li><a href="{{url('/shop-cart')}}" class="button-default check_out">Check Out</a></li>
									</ul>
								</li> -->
              </ul>

              <ul class="menu">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Home <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('/')}}">Home Style 01</a></li>
                    <li><a href="{{url('/index-3')}}">Home Style 02</a></li>
                    <li class="active"><a href="{{url('/index-4')}}">Home Style 03</a></li>
                    <li><a href="{{url('/one-page')}}">One Page</a></li>
                    <li><a href="boxed-layout.html">Boxed Layout</a></li>

                    <li><a href="#">Test Multi Step</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Menu 2</a></li>
                        <li><a href="#">Menu 2</a></li>
                        <li><a href="#">Menu 2</a></li>
                        <li><a href="#">Menu 2</a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Menu 3</a></li>
                            <li><a href="#">Menu 3</a></li>
                            <li><a href="#">Menu 3</a></li>
                            <li><a href="#">Menu 3</a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Menu 4</a></li>
                                <li><a href="#">Menu 4</a></li>
                                <li><a href="#">Menu 4</a></li>
                                <li><a href="#">Menu 4</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">About <span class="caret"></span></a>
                  <!-- <ul class="dropdown-menu">
										<li><a href="{{url('/about')}}">About Style 01</a></li>
										<li><a href="{{url('/about-2')}}">About Style 02</a></li>
									</ul> -->
                </li>
                <!--<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Classes <span
											class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="{{url('/classes')}}">Classes</a></li>
										<li><a href="{{url('/class-single')}}">Classes Details</a></li>
									</ul>
								</li>
								 <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Teachers <span
											class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="{{url('/teachers')}}">Teachers</a></li>
										<li><a href="{{url('/teacher-details')}}">Teacher Details</a></li>
									</ul>
								</li> -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('/gallery')}}">Gallery</a></li>
                    <li><a href="{{url('/gallery-2')}}">Gallery Two</a></li>
                    <li><a href="{{url('/event')}}">Event</a></li>
                    <li><a href="{{url('/event-single')}}">Event Details</a></li>
                    <li><a href="{{url('/404')}}">404 Error</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Blog <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('/blog')}}">Blog Page</a></li>
                    <li><a href="{{url('/single')}}">Blog Single</a></li>
                  </ul>
                </li>
                <!-- <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="{{url('/product')}}">Product Page</a></li>
										<li><a href="{{url('/product-details')}}">Product Details</a></li>
										<li><a href="{{url('/shop-cart')}}">Shop Cart</a></li>
									</ul>
								</li> -->
                <li><a href="{{url('/contact')}}">Contact</a></li>
              </ul>
              <form class="menu-search-form">
                <input type="text" name="search" placeholder="Search here...">
                <span class="menu-search-close"><i class="fa fa-times" aria-hidden="true"></i></span>
              </form>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- header End here -->


  <!-- Banner Start here -->
  <section class="banner banner-three">
    <div class="banner-slider swiper-container">
      <div class="swiper-wrapper">
        <div class="banner-item slide-one swiper-slide">
          <div class="banner-overlay"></div>
          <div class="container">
            <div class="row">
              <div class="offset-lg-5 col-lg-6 col-xs-12">
                <div class="banner-content">
                  <h3>Welcome to KidsAcademy</h3>
                  <h2>Best For Education</h2>
                  <p>Monotonely principle centered ahitectures through and standards magnetic metrics whereas cross
                    functional products.</p>
                  <ul>
                    <li><a href="#" class="button-default">Read More</a></li>
                    <li><a href="#" class="button-default">Buy Now</a></li>
                  </ul>
                </div><!-- banner-content -->
              </div>
            </div>
          </div><!-- container -->
        </div><!-- slide item -->
        <div class="banner-item slide-two swiper-slide">
          <div class="banner-overlay"></div>
          <div class="container">
            <div class="row">
              <div class="offset-lg-5 col-lg-6 col-xs-12">
                <div class="banner-content">
                  <h3>Welcome to KidsAcademy</h3>
                  <h2>Best For Education</h2>
                  <p>Monotonely principle centered ahitectures through and standards magnetic metrics whereas cross
                    functional products.</p>
                  <ul>
                    <li><a href="#" class="button-default">Read More</a></li>
                    <li><a href="#" class="button-default">Buy Now</a></li>
                  </ul>
                </div><!-- banner-content -->
              </div>
            </div>
          </div><!-- container -->
        </div><!-- slide item -->
        <div class="banner-item slide-three swiper-slide">
          <div class="banner-overlay"></div>
          <div class="container">
            <div class="row">
              <div class="offset-lg-5 col-lg-6 col-xs-12">
                <div class="banner-content">
                  <h3>Welcome to KidsAcademy</h3>
                  <h2>Best For Education</h2>
                  <p>Monotonely principle centered ahitectures through and standards magnetic metrics whereas cross
                    functional products.</p>
                  <ul>
                    <li><a href="#" class="button-default">Read More</a></li>
                    <li><a href="#" class="button-default">Buy Now</a></li>
                  </ul>
                </div><!-- banner-content -->
              </div>
            </div>
          </div><!-- container -->
        </div><!-- slide item -->

      </div><!-- swiper-wrapper -->
      <div class="swiper-pagination"></div>
    </div><!-- swiper-container -->
  </section><!-- banner -->
  <!-- Banner End here -->


  <!-- About Start here -->
  <section class="about about-two padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="about-image">
            <img src="images/about/about-3.png" alt="about image" class="img-responsive">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <h3>About Our KidsAcademy</h3>
            <p>Enthusiasticay diseminate competitive oportunitie through transparent an actions Compelngly seize viral
              schemas through intermandated creative is adiea sources. Enthusiasticay plagiarize clientcentered
              relationship for the covalent experiences. Distinctively architect 24/365 service for wireless is
              ebusiness ahosfluorescently Efficiently comunicate coperative methods of empowerment awesome athrough
              Monotonectaly myocardinate cross and functional niche markets and an functional.</p>
            <ul>
              <li><a href="#" class="button-default">Read More</a></li>
              <li><a href="#" class="button-default">Buy Now</a></li>
            </ul>
          </div><!-- about content -->
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- about -->
  <!-- About End here -->


  <!-- facility Start here -->
  <section class="facility facility-three padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Our School Fecilities</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="facility-item">
            <span class="icon flaticon-symbols"></span>
            <h4>Active Learning</h4>
            <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>
          </div><!-- facility item -->
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="facility-item">
            <span class="icon flaticon-avatar"></span>
            <h4>Expert Teachers</h4>
            <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>
          </div><!-- facility item -->
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="facility-item">
            <span class="icon flaticon-world"></span>
            <h4>Strategi Location</h4>
            <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>
          </div><!-- facility item -->
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="facility-item">
            <span class="icon flaticon-line-chart"></span>
            <h4>Full Day Programs</h4>
            <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>
          </div><!-- facility item -->
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- facility -->
  <!-- facility End here -->


  <!-- Classes Start here -->
  <section class="classes padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Our Popular Classes</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="class-item">
            <div class="image">
              <img src="{{asset('/classes/class_01.jpg')}}" alt="class image" class="img-responsive">
            </div>
            <ul class="schedule">
              <li>
                <span>Class Size</span>
                <span>30 - 40</span>
              </li>
              <li>
                <span>Years Old</span>
                <span>5 - 6</span>
              </li>
              <li>
                <span>Tution Fee</span>
                <span>$1500</span>
              </li>
            </ul>
            <div class="content">
              <h4><a href="{{url('/class-single')}}">Imagination Classes</a></h4>
              <p><span>Class Time</span> : 08:00 am - 10:00 am</p>
              <p>Draticaly novate fuly rarched an plications awesome theme education</p>
            </div>
            <div class="address">
              <p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA- 1205</p>
            </div>
          </div><!-- class item -->
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="class-item">
            <div class="image">
              <img src="{{asset('images/classes/class_02.jpg')}}" alt="class image" class="img-responsive">
            </div>
            <ul class="schedule">
              <li>
                <span>Class Size</span>
                <span>30 - 40</span>
              </li>
              <li>
                <span>Years Old</span>
                <span>5 - 6</span>
              </li>
              <li>
                <span>Tution Fee</span>
                <span>$1500</span>
              </li>
            </ul>
            <div class="content">
              <h4><a href="{{url('/class-single')}}">Drawing Classes</a></h4>
              <p><span>Class Time</span> : 08:00 am - 10:00 am</p>
              <p>Draticaly novate fuly rarched an plications awesome theme education</p>
            </div>
            <div class="address">
              <p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA- 1205</p>
            </div>
          </div><!-- class item -->
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="class-item">
            <div class="image">
              <img src="{{asset('images/classes/class_03.jpg')}}" alt="class image" class="img-responsive">
            </div>
            <ul class="schedule">
              <li>
                <span>Class Size</span>
                <span>30 - 40</span>
              </li>
              <li>
                <span>Years Old</span>
                <span>5 - 6</span>
              </li>
              <li>
                <span>Tution Fee</span>
                <span>$1500</span>
              </li>
            </ul>
            <div class="content">
              <h4><a href="{{url('/class-single')}}">Learning Classes</a></h4>
              <p><span>Class Time</span> : 08:00 am - 10:00 am</p>
              <p>Draticaly novate fuly rarched an plications awesome theme education</p>
            </div>
            <div class="address">
              <p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA- 1205</p>
            </div>
          </div><!-- class item -->
        </div>
      </div><!-- row -->
      <div class="class-button">
        <a href="{{url('/classes')}}" class="button-default">See More Classes</a>
      </div>
    </div><!-- container -->
  </section><!-- classes -->
  <!-- Classes End here -->


  <!-- Teachers Start here -->
  <section class="teachers teachers-three padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Meet Our Teachers</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <div class="teacher-items">
        <div class="teacher-slider swiper-container">
          <div class="swiper-wrapper">
            <div class="teacher-item swiper-slide">
              <div class="teacher-image">
                <img src="{{asset('images/teachers/teacher_13.jpg')}}" alt="teacher image" class="img-responsive">
              </div>
              <div class="teacher-content">
                <h4><a href="{{url('/teacher-details')}}">Alex Jhonson</a></h4>
                <span>Sains Teacher</span>
              </div>
            </div><!-- teacher-item -->
            <div class="teacher-item swiper-slide">
              <div class="teacher-image">
                <img src="{{asset('images/teachers/teacher_14.jpg')}}" alt="teacher image" class="img-responsive">
              </div>
              <div class="teacher-content">
                <h4><a href="{{url('/teacher-details')}}">Paul Thomas</a></h4>
                <span>Art Teacher</span>
              </div>
            </div><!-- teacher-item -->
            <div class="teacher-item swiper-slide">
              <div class="teacher-image">
                <img src="{{asset('images/teachers/teacher_15.jpg')}}" alt="teacher image" class="img-responsive">
              </div>
              <div class="teacher-content">
                <h4><a href="{{url('/teacher-details')}}">Henry Jhonson</a></h4>
                <span>English Teacher</span>
              </div>
            </div><!-- teacher-item -->
            <div class="teacher-item swiper-slide">
              <div class="teacher-image">
                <img src="{{asset('images/teachers/teacher_16.jpg')}}" alt="teacher image" class="img-responsive">
              </div>
              <div class="teacher-content">
                <h4><a href="{{url('/teacher-details')}}">Alex kshe</a></h4>
                <span>Math Teacher</span>
              </div>
            </div><!-- teacher-item -->
            <div class="teacher-item swiper-slide">
              <div class="teacher-image">
                <img src="{{asset('images/teachers/teacher_09.jpg')}}" alt="teacher image" class="img-responsive">
              </div>
              <div class="teacher-content">
                <h4><a href="{{url('/teacher-details')}}">Alex Ude</a></h4>
                <span>Sains Teacher</span>
              </div>
            </div><!-- teacher-item -->
            <div class="teacher-item swiper-slide">
              <div class="teacher-image">
                <img src="{{asset('images/teachers/teacher_10.jpg')}}" alt="teacher image" class="img-responsive">
              </div>
              <div class="teacher-content">
                <h4><a href="{{url('/teacher-details')}}">Healex Jhonson</a></h4>
                <span>Art Teacher</span>
              </div>
            </div><!-- teacher-item -->
            <div class="teacher-item swiper-slide">
              <div class="teacher-image">
                <img src="{{asset('images/teachers/teacher_11.jpg')}}" alt="teacher image" class="img-responsive">
              </div>
              <div class="teacher-content">
                <h4><a href="{{url('/teacher-details')}}">Gary Jhonson</a></h4>
                <span>English Teacher</span>
              </div>
            </div><!-- teacher-item -->
            <div class="teacher-item swiper-slide">
              <div class="teacher-image">
                <img src="{{asset('images/teachers/teacher_12.jpg')}}" alt="teacher image" class="img-responsive">
              </div>
              <div class="teacher-content">
                <h4><a href="{{url('/teacher-details')}}">Robarto Jhonson</a></h4>
                <span>Math Teacher</span>
              </div>
            </div><!-- teacher-item -->

          </div><!-- swiper-wrapper -->
        </div><!-- swiper-container -->
      </div><!-- partner-items -->

    </div><!-- container -->
  </section><!-- teacher -->
  <!-- Teachers End here -->


  <!-- Gallery Start here -->
  <section class="gallery padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Our School Gallery</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <ul class="gallery-menu">
        <li class="active" data-filter="*">Show all</li>
        <li data-filter=".branding">Class</li>
        <li data-filter=".development">Event</li>
        <li data-filter=".packing">Playing</li>
        <li data-filter=".photography">Art</li>
      </ul>

      <div class="gallery-items">
        <div class="gallery-item branding packing">
          <div class="gallery-image">
            <img src="{{asset('images/classes/class_04.jpg')}}" alt="gallery image" class="img-responsive">
            <div class="gallery-overlay">
              <div class="bg"></div>
            </div>
            <div class="gallery-content">
              <a href="{{asset('images/gallery/gallery_bg_05.jpg')}}" data-rel="lightcase:myCollection"><i
                  class="icon flaticon-expand"></i></a>
              <h4>Product Name Here</h4>
              <span>By: KidsAcademy Theme</span>
            </div>
          </div>
        </div><!-- gallery item -->
        <div class="gallery-item development photography">
          <div class="gallery-image">
            <img src="{{asset('images/gallery/gallery_12.jpg')}}" alt="gallery image" class="img-responsive">
            <div class="gallery-overlay">
              <div class="bg"></div>
            </div>
            <div class="gallery-content">
              <a href="{{asset('images/gallery/gallery_bg_02.jpg')}}" data-rel="lightcase:myCollection"><i
                  class="icon flaticon-expand"></i></a>
              <h4>Product Name Here</h4>
              <span>By: KidsAcademy Theme</span>
            </div>
          </div>
        </div><!-- gallery item -->
        <div class="gallery-item branding packing">
          <div class="gallery-image">
            <img src="{{asset('images/gallery/gallery_13.jpg')}}" alt="gallery image" class="img-responsive">
            <div class="gallery-overlay">
              <div class="bg"></div>
            </div>
            <div class="gallery-content">
              <a href="{{asset('images/gallery/gallery_bg_13.jpg')}}" data-rel="lightcase:myCollection"><i
                  class="icon flaticon-expand"></i></a>
              <h4>Product Name Here</h4>
              <span>By: KidsAcademy Theme</span>
            </div>
          </div>
        </div><!-- gallery item -->
        <div class="gallery-item development photography">
          <div class="gallery-image">
            <img src="{{asset('images/gallery/gallery_15.jpg')}}" alt="gallery image" class="img-responsive">
            <div class="gallery-overlay">
              <div class="bg"></div>
            </div>
            <div class="gallery-content">
              <a href="{{asset('images/gallery/gallery_bg_15.jpg')}}" data-rel="lightcase:myCollection"><i
                  class="icon flaticon-expand"></i></a>
              <h4>Product Name Here</h4>
              <span>By: KidsAcademy Theme</span>
            </div>
          </div>
        </div><!-- gallery item -->
        <div class="gallery-item branding packing">
          <div class="gallery-image">
            <img src="{{asset('images/gallery/gallery_14.jpg')}}" alt="gallery image" class="img-responsive">
            <div class="gallery-overlay">
              <div class="bg"></div>
            </div>
            <div class="gallery-content">
              <a href="{{asset('images/gallery/gallery_bg_14.jpg')}}" data-rel="lightcase:myCollection"><i
                  class="icon flaticon-expand"></i></a>
              <h4>Product Name Here</h4>
              <span>By: KidsAcademy Theme</span>
            </div>
          </div>
        </div><!-- gallery item -->
        <div class="gallery-item branding packing">
          <div class="gallery-image">
            <img src="{{asset('images/gallery/gallery_16.jpg')}}" alt="gallery image" class="img-responsive">
            <div class="gallery-overlay">
              <div class="bg"></div>
            </div>
            <div class="gallery-content">
              <a href="{{asset('images/gallery/gallery_bg_01.jpg')}}" data-rel="lightcase:myCollection"><i
                  class="icon flaticon-expand"></i></a>
              <h4>Product Name Here</h4>
              <span>By: KidsAcademy Theme</span>
            </div>
          </div>
        </div><!-- gallery item -->
      </div><!-- gallery items -->
      <div class="gallery-button"><a href="{{url('/gallery')}}" class="button-default">View More Gallery</a></div>
    </div><!-- container -->
  </section><!-- gallery -->
  <!-- Gallery End here -->


  <!-- Testimonial Start here -->
  <section class="testimonial testimonial-three padding-120">
    <div class="container">
      <div class="section-header">
        <h3>What Parents Say</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <div class="testimonial-items">
        <div class="testimonial-slider-three swiper-container">
          <div class="swiper-wrapper">
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-image">
                <img src="{{asset('images/testimonial/testimonial_01.jpg')}}" alt="client image" class="img-responsive">
              </div>
              <div class="testimonial-details">
                <h4>Joly Smith </h4>
                <span>Designer</span>
                <i class="icon fa fa-quote-left" aria-hidden="true"></i>
                <p>Infrastructures tops nemethodologies Colaboratively seize scalable Colaboratively seze and an
                  scalable achannels before creative theme after and longterm high awesome and impact Professionally
                  predominate that awesome theme education timely </p>
              </div>
            </div><!-- testimonial-item -->
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-image">
                <img src="{{asset('images/testimonial/testimonial_02.jpg')}}" alt="client image" class="img-responsive">
              </div>
              <div class="testimonial-details">
                <h4>Joly Smith </h4>
                <span>Designer</span>
                <i class="icon fa fa-quote-left" aria-hidden="true"></i>
                <p>Infrastructures tops nemethodologies Colaboratively seize scalable Colaboratively seze and an
                  scalable achannels before creative theme after and longterm high awesome and impact Professionally
                  predominate that awesome theme education timely </p>
              </div>
            </div><!-- testimonial-item -->
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-image">
                <img src="{{asset('images/testimonial/testimonial_03.jpg')}}" alt="client image" class="img-responsive">
              </div>
              <div class="testimonial-details">
                <h4>Joly Smith </h4>
                <span>Designer</span>
                <i class="icon fa fa-quote-left" aria-hidden="true"></i>
                <p>Infrastructures tops nemethodologies Colaboratively seize scalable Colaboratively seze and an
                  scalable achannels before creative theme after and longterm high awesome and impact Professionally
                  predominate that awesome theme education timely </p>
              </div>
            </div><!-- testimonial-item -->

          </div><!-- swiper-wrapper -->
        </div><!-- swiper-container -->
      </div><!-- testimonial-items -->
    </div><!-- container -->
  </section><!-- testimonial -->
  <!-- Testimonial End here -->


  <!-- Event Start here -->
  <section class="event event-two padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Don't Miss Our Event</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <div class="event-items">
        <div class="row">
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="event-item">
              <div class="event-image">
                <img src="{{asset('images/event/event_01.jpg')}}" alt="event image" class="img-responsive">
                <div class="date">
                  <span>24</span>
                  <p>March</p>
                </div>
              </div>
              <div class="event-content">
                <h4>Imagination Classes</h4>
                <ul>
                  <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span>08:00 am - 10:00 am</li>
                  <li><span><i class="fa fa-home" aria-hidden="true"></i></span>218 New Newyork Road Newyork</li>
                </ul>
                <p>Dratcaly novate fuly rarched an plication awesome theme education that plication creative theme
                  education.</p>
                <a href="{{url('/event')}}" class="button-default">Join Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="event-item">
              <div class="event-image">
                <img src="{{asset('images/event/event_02.jpg')}}" alt="event image" class="img-responsive">
                <div class="date">
                  <span>24</span>
                  <p>March</p>
                </div>
              </div>
              <div class="event-content">
                <h4>Imagination Classes</h4>
                <ul>
                  <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span>08:00 am - 10:00 am</li>
                  <li><span><i class="fa fa-home" aria-hidden="true"></i></span>218 New Newyork Road Newyork</li>
                </ul>
                <p>Dratcaly novate fuly rarched an plication awesome theme education that plication creative theme
                  education.</p>
                <a href="{{url('/event')}}" class="button-default">Join Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="event-item">
              <div class="event-image">
                <img src="{{asset('images/event/event_03.jpg')}}" alt="event image" class="img-responsive">
                <div class="date">
                  <span>24</span>
                  <p>March</p>
                </div>
              </div>
              <div class="event-content">
                <h4>Imagination Classes</h4>
                <ul>
                  <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span>08:00 am - 10:00 am</li>
                  <li><span><i class="fa fa-home" aria-hidden="true"></i></span>218 New Newyork Road Newyork</li>
                </ul>
                <p>Dratcaly novate fuly rarched an plication awesome theme education that plication creative theme
                  education.</p>
                <a href="{{url('/event')}}" class="button-default">Join Now</a>
              </div>
            </div>
          </div>
        </div><!-- row -->
      </div><!-- event items -->
    </div><!-- container -->
  </section><!-- event blog -->
  <!-- event End here -->


  <!-- Subscribe Start here -->
  <section class="subscribe subscribe-two">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-xs-12">
          <h3>Join Our Newsletter</h3>
        </div>
        <div class="col-lg-7 col-xs-12">
          <form action="https://labartisan.net/">
            <input type="text" placeholder="Enter your e-mail here">
            <input type="submit" value="Subscribe Now">
          </form>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- subscribe -->
  <!-- Subscribe End here -->


  <!-- Footer Start here -->
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="title"><img src="{{asset('images/logo.png')}}" alt="logo" class="img-responsive"></div>
              <div class="footer-about">
                <p>Distily enable team driven services through extensive is a relatonships platforms with interactive
                  content. Enthusiastically scale effective.</p>
                <ul>
                  <li><span><i class="fa fa-home" aria-hidden="true"></i></span> New Chokoya Road, USA.</li>
                  <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> +8801 923 970 212, 0125897</li>
                  <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span> Contact@admin LabArtisan</li>
                  <li><span><i class="fa fa-globe" aria-hidden="true"></i></span> Email@admin LabArtisan</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <h4 class="title">Latest News</h4>
              <ul class="footer-post">
                <li>
                  <div class="image">
                    <a href="{{url('/single')}}"><img src="{{asset('images/blog/footer_post_01.jpg')}}" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <p><a href="{{url('/single')}}">Corem psum dolor the amectetuer adipiscing...</a></p>
                    <span>04 February 2021</span>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <a href="{{url('/single')}}"><img src="{{asset('images/blog/footer_post_02.jpg')}}" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <p><a href="{{url('/single')}}">Corem psum dolor the amectetuer adipiscing...</a></p>
                    <span>28 January 2021</span>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <a href="{{url('/single')}}"><img src="{{asset('images/blog/footer_post_03.jpg')}}" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <p><a href="{{url('/single')}}">Duis autem iriure dolor in hendrerit esse...</a></p>
                    <span>03 January 2021</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <h4 class="title">Twitter Widget</h4>
              <ul class="twitter-post">
                <li>
                  <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                  <div class="content">
                    <p>Raritas etiam processus them dynamicus sequitur mutatem education theme</p>
                    <span>23 seconds ago</span>
                  </div>
                </li>
                <li>
                  <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                  <div class="content">
                    <p>Duis autem veleum iriu dolor hendrerit in vulputate velit</p>
                    <span>8 seconds ago</span>
                  </div>
                </li>
                <li>
                  <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                  <div class="content">
                    <p>@frankdoe amber tempor cum soluta nobis eleifend</p>
                    <span>2 years ago</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <h4 class="title">Recent Photos</h4>
              <ul class="photos">
                <li><a href="#"><img src="{{asset('images/sidebar/gallery_01.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{asset('images/sidebar/gallery_02.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{asset('images/sidebar/gallery_03.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{asset('images/sidebar/gallery_04.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{asset('images/sidebar/gallery_05.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{asset('images/sidebar/gallery_06.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{asset('images/sidebar/gallery_07.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{asset('images/sidebar/gallery_08.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{asset('images/sidebar/gallery_09.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- footer top -->
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xs-12">
            <p>&copy; 2021. Designed By <a href="https://themeforest.net/user/labartisan">LabArtisan</a></p>
          </div>
          <div class="col-lg-6 col-xs-12">
            <ul class="social-default">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- footer bottom -->
  </footer>
  <a class="page-scroll scroll-top" href="#scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
  <!-- Footer End here -->


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


</body>


<!-- Mirrored from labartisan.net/demo/kidsacademy/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 12:38:37 GMT -->
</html>
