<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from labartisan.net/demo/kidsacademy/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 12:38:51 GMT -->
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


  <header>
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
                    <!--<li class="active"><a href="{{url('/')}}">Home Style 01</a></li>
										 <li><a href="{{url('/index-3')}}">Home Style 02</a></li>
										<li><a href="{{url('/index-4')}}">Home Style 03</a></li>
										<li><a href="{{url('/one-page')}}">One Page</a></li>
										<li><a href="boxed-layout.html">Boxed Layout</a></li> -->

										<!-- <li><a href="#">Test Multi Step</a>
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
										</li> -->
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
                    <li class="active"><a href="{{url('/single')}}">Blog Single</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Shop <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="active"><a href="{{url('/product')}}">Product Page</a></li>
                    <li><a href="{{url('/product-details')}}">Product Details</a></li>
                    <li><a href="{{url('/shop-cart')}}">Shop Cart</a></li>
                  </ul>
                </li>
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


  <!-- Page Header Start here -->
  <section class="page-header section-notch">
    <div class="overlay">
      <div class="container">
        <h3>Our Shop Pages</h3>
        <ul>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>-</li>
          <li>Shop</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->



  <!-- Product start here -->
  <section class="product padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-xs-12 post-item-pagination">
          <div class="product-header">
            <p class="pull-left">Showing 01 - 12 of 139 Results</p>
            <div class="icon hidden-xs">
              <span id="grid" class="grid grid-active"><i class="fa fa-th" aria-hidden="true"></i></span>
              <span id="list" class="list"><i class="fa fa-list" aria-hidden="true"></i></span>
            </div>
          </div><!-- product header -->

          <div class="product-items">
            <div class="product-item-grid">
              <div class="pro-item">
                <div class="pro-image cd-item" id="prdct1">
                  <img src="{{asset('images/product/product_01.jpg')}}" alt="product image" class="img-responsive">
                  <div class="pro-overlay"></div>
                  <a href="#" class="icon"><span class="flaticon-like-1"></span></a>
                  <a href="#" class="icon"><span class="flaticon-shopping-cart"></span></a>
                  <a href="#prdct1" class="cd-trigger icon hidden-xs hidden-sm"><span
                      class="flaticon-search"></span></a>
                  <a href="{{url('/product-details')}}" class="visible-xs visible-sm icon"><span
                      class="flaticon-search"></span></a>
                  <div class="quick-view-content">
                    <div class="quick-view-content-wrapper">
                      <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                          <li class="selected"><img src="{{asset('images/product/product_01.jpg')}}" alt="Product 1"></li>
                          <li><img src="{{asset('images/product/product_02.jpg')}}" alt="Product 2"></li>
                          <li><img src="{{asset('images/product/product_03.jpg')}}" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->

                        <ul class="cd-slider-navigation">
                          <li><a class="cd-next" href="#0">Prev</a></li>
                          <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                      </div> <!-- cd-slider-wrapper -->

                      <div class="cd-item-info">
                        <h4>Product Text Here</h4>
                        <span class="pro-price">$150.00</span>
                        <div class="pro-rating">
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                        </div>
                        <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target
                          just in time schemas without synergistic and human capital. Globally scale flexible
                          experiences through ubiquitous.</p>
                        <ul class="cd-item-action pro-button">
                          <li><button>Add to cart</button></li>
                          <li><a href="#0">Read more</a></li>
                        </ul> <!-- cd-item-action -->
                      </div> <!-- cd-item-info -->
                    </div>
                  </div>
                </div>
                <div class="pro-content">
                  <h4><a href="{{url('/product-details')}}">Product Text Here</a></h4>
                  <span>$150.00</span>
                  <div class="pro-rating">
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                  </div>
                  <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target just in
                    time schemas without synergistic and human capital. Globally scale flexible experiences through
                    ubiquitous.</p>
                  <ul class="pro-button">
                    <li><button>Add to cart</button></li>
                    <li><a href="{{url('/product-details')}}">Read more</a></li>
                  </ul> <!-- cd-item-action -->
                </div><!-- pro-content -->
              </div> <!-- pro item -->
            </div><!-- product-item -->

            <div class="product-item-grid">
              <div class="pro-item">
                <div class="pro-image cd-item" id="prdct2">
                  <img src="{{asset('images/product/product_02.jpg')}}" alt="product image" class="img-responsive">
                  <div class="pro-overlay"></div>
                  <a href="#" class="icon"><span class="flaticon-like-1"></span></a>
                  <a href="#" class="icon"><span class="flaticon-shopping-cart"></span></a>
                  <a href="#prdct2" class="cd-trigger icon hidden-xs hidden-sm"><span
                      class="flaticon-search"></span></a>
                  <a href="{{url('/product-details')}}" class="visible-xs visible-sm icon"><span
                      class="flaticon-search"></span></a>
                  <div class="quick-view-content">
                    <div class="quick-view-content-wrapper">
                      <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                          <li class="selected"><img src="{{asset('images/product/product_02.jpg')}}" alt="Product 1"></li>
                          <li><img src="{{asset('images/product/product_03.jpg')}}" alt="Product 2"></li>
                          <li><img src="{{asset('images/product/product_04.jpg')}}" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->

                        <ul class="cd-slider-navigation">
                          <li><a class="cd-next" href="#0">Prev</a></li>
                          <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                      </div> <!-- cd-slider-wrapper -->

                      <div class="cd-item-info">
                        <h4>Product Text Here</h4>
                        <span class="pro-price">$150.00</span>
                        <div class="pro-rating">
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                        </div>
                        <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target
                          just in time schemas without synergistic and human capital. Globally scale flexible
                          experiences through ubiquitous.</p>
                        <ul class="cd-item-action pro-button">
                          <li><button>Add to cart</button></li>
                          <li><a href="#0">Read more</a></li>
                        </ul> <!-- cd-item-action -->
                      </div> <!-- cd-item-info -->
                    </div>
                  </div>
                </div>
                <div class="pro-content">
                  <h4><a href="{{url('/product-details')}}">Product Text Here</a></h4>
                  <span>$150.00</span>
                  <div class="pro-rating">
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                  </div>
                  <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target just in
                    time schemas without synergistic and human capital. Globally scale flexible experiences through
                    ubiquitous.</p>
                  <ul class="pro-button">
                    <li><button>Add to cart</button></li>
                    <li><a href="{{url('/product-details')}}">Read more</a></li>
                  </ul> <!-- cd-item-action -->
                </div><!-- pro-content -->
              </div> <!-- pro item -->
            </div><!-- product-item -->

            <div class="product-item-grid">
              <div class="pro-item">
                <div class="pro-image cd-item" id="prdct3">
                  <img src="{{asset('images/product/product_03.jpg')}}" alt="product image" class="img-responsive">
                  <div class="pro-overlay"></div>
                  <a href="#" class="icon"><span class="flaticon-like-1"></span></a>
                  <a href="#" class="icon"><span class="flaticon-shopping-cart"></span></a>
                  <a href="#prdct3" class="cd-trigger icon hidden-xs hidden-sm"><span
                      class="flaticon-search"></span></a>
                  <a href="{{url('/product-details')}}" class="visible-xs visible-sm icon"><span
                      class="flaticon-search"></span></a>
                  <div class="quick-view-content">
                    <div class="quick-view-content-wrapper">
                      <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                          <li class="selected"><img src="{{asset('images/product/product_03.jpg')}}" alt="Product 1"></li>
                          <li><img src="{{asset('images/product/product_03.jpg')}}" alt="Product 2"></li>
                          <li><img src="{{asset('images/product/product_04.jpg')}}" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->

                        <ul class="cd-slider-navigation">
                          <li><a class="cd-next" href="#0">Prev</a></li>
                          <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                      </div> <!-- cd-slider-wrapper -->

                      <div class="cd-item-info">
                        <h4>Product Text Here</h4>
                        <span class="pro-price">$150.00</span>
                        <div class="pro-rating">
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                        </div>
                        <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target
                          just in time schemas without synergistic and human capital. Globally scale flexible
                          experiences through ubiquitous.</p>
                        <ul class="cd-item-action pro-button">
                          <li><button>Add to cart</button></li>
                          <li><a href="#0">Read more</a></li>
                        </ul> <!-- cd-item-action -->
                      </div> <!-- cd-item-info -->
                    </div>
                  </div>
                </div>
                <div class="pro-content">
                  <h4><a href="{{url('/product-details')}}">Product Text Here</a></h4>
                  <span>$150.00</span>
                  <div class="pro-rating">
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                  </div>
                  <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target just in
                    time schemas without synergistic and human capital. Globally scale flexible experiences through
                    ubiquitous.</p>
                  <ul class="pro-button">
                    <li><button>Add to cart</button></li>
                    <li><a href="{{url('/product-details')}}">Read more</a></li>
                  </ul> <!-- cd-item-action -->
                </div><!-- pro-content -->
              </div> <!-- pro item -->
            </div><!-- product-item -->

            <div class="product-item-grid">
              <div class="pro-item">
                <div class="pro-image cd-item" id="prdct4">
                  <img src="{{asset('images/product/product_04.jpg')}}" alt="product image" class="img-responsive">
                  <div class="pro-overlay"></div>
                  <a href="#" class="icon"><span class="flaticon-like-1"></span></a>
                  <a href="#" class="icon"><span class="flaticon-shopping-cart"></span></a>
                  <a href="#prdct4" class="cd-trigger icon hidden-xs hidden-sm"><span
                      class="flaticon-search"></span></a>
                  <a href="{{url('/product-details')}}" class="visible-xs visible-sm icon"><span
                      class="flaticon-search"></span></a>
                  <div class="quick-view-content">
                    <div class="quick-view-content-wrapper">
                      <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                          <li class="selected"><img src="{{asset('images/product/product_04.jpg')}}" alt="Product 1"></li>
                          <li><img src="{{asset('images/product/product_02.jpg')}}" alt="Product 2"></li>
                          <li><img src="{{asset('images/product/product_03.jpg')}}" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->

                        <ul class="cd-slider-navigation">
                          <li><a class="cd-next" href="#0">Prev</a></li>
                          <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                      </div> <!-- cd-slider-wrapper -->

                      <div class="cd-item-info">
                        <h4>Product Text Here</h4>
                        <span class="pro-price">$150.00</span>
                        <div class="pro-rating">
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                        </div>
                        <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target
                          just in time schemas without synergistic and human capital. Globally scale flexible
                          experiences through ubiquitous.</p>
                        <ul class="cd-item-action pro-button">
                          <li><button>Add to cart</button></li>
                          <li><a href="#0">Read more</a></li>
                        </ul> <!-- cd-item-action -->
                      </div> <!-- cd-item-info -->
                    </div>
                  </div>
                </div>
                <div class="pro-content">
                  <h4><a href="{{url('/product-details')}}">Product Text Here</a></h4>
                  <span>$150.00</span>
                  <div class="pro-rating">
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                  </div>
                  <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target just in
                    time schemas without synergistic and human capital. Globally scale flexible experiences through
                    ubiquitous.</p>
                  <ul class="pro-button">
                    <li><button>Add to cart</button></li>
                    <li><a href="{{url('/product-details')}}">Read more</a></li>
                  </ul> <!-- cd-item-action -->
                </div><!-- pro-content -->
              </div> <!-- pro item -->
            </div><!-- product-item -->

            <div class="product-item-grid">
              <div class="pro-item">
                <div class="pro-image cd-item" id="prdct5">
                  <img src="{{asset('images/product/product_05.jpg')}}" alt="product image" class="img-responsive">
                  <div class="pro-overlay"></div>
                  <a href="#" class="icon"><span class="flaticon-like-1"></span></a>
                  <a href="#" class="icon"><span class="flaticon-shopping-cart"></span></a>
                  <a href="#prdct5" class="cd-trigger icon hidden-xs hidden-sm"><span
                      class="flaticon-search"></span></a>
                  <a href="{{url('/product-details')}}" class="visible-xs visible-sm icon"><span
                      class="flaticon-search"></span></a>
                  <div class="quick-view-content">
                    <div class="quick-view-content-wrapper">
                      <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                          <li class="selected"><img src="{{asset('images/product/product_05.jpg')}}" alt="Product 1"></li>
                          <li><img src="{{asset('images/product/product_03.jpg')}}" alt="Product 2"></li>
                          <li><img src="{{asset('images/product/product_04.jpg')}}" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->

                        <ul class="cd-slider-navigation">
                          <li><a class="cd-next" href="#0">Prev</a></li>
                          <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                      </div> <!-- cd-slider-wrapper -->

                      <div class="cd-item-info">
                        <h4>Product Text Here</h4>
                        <span class="pro-price">$150.00</span>
                        <div class="pro-rating">
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                        </div>
                        <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target
                          just in time schemas without synergistic and human capital. Globally scale flexible
                          experiences through ubiquitous.</p>
                        <ul class="cd-item-action pro-button">
                          <li><button>Add to cart</button></li>
                          <li><a href="#0">Read more</a></li>
                        </ul> <!-- cd-item-action -->
                      </div> <!-- cd-item-info -->
                    </div>
                  </div>
                </div>
                <div class="pro-content">
                  <h4><a href="{{url('/product-details')}}">Product Text Here</a></h4>
                  <span>$150.00</span>
                  <div class="pro-rating">
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                  </div>
                  <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target just in
                    time schemas without synergistic and human capital. Globally scale flexible experiences through
                    ubiquitous.</p>
                  <ul class="pro-button">
                    <li><button>Add to cart</button></li>
                    <li><a href="{{url('/product-details')}}">Read more</a></li>
                  </ul> <!-- cd-item-action -->
                </div><!-- pro-content -->
              </div> <!-- pro item -->
            </div><!-- product-item -->

            <div class="product-item-grid">
              <div class="pro-item">
                <div class="pro-image cd-item" id="prdct6">
                  <img src="{{asset('images/product/product_06.jpg')}}" alt="product image" class="img-responsive">
                  <div class="pro-overlay"></div>
                  <a href="#" class="icon"><span class="flaticon-like-1"></span></a>
                  <a href="#" class="icon"><span class="flaticon-shopping-cart"></span></a>
                  <a href="#prdct6" class="cd-trigger icon hidden-xs hidden-sm"><span
                      class="flaticon-search"></span></a>
                  <a href="{{url('/product-details')}}" class="visible-xs visible-sm icon"><span
                      class="flaticon-search"></span></a>
                  <div class="quick-view-content">
                    <div class="quick-view-content-wrapper">
                      <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                          <li class="selected"><img src="{{asset('images/product/product_06.jpg')}}" alt="Product 1"></li>
                          <li><img src="{{asset('images/product/product_03.jpg')}}" alt="Product 2"></li>
                          <li><img src="{{asset('images/product/product_04.jpg')}}" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->

                        <ul class="cd-slider-navigation">
                          <li><a class="cd-next" href="#0">Prev</a></li>
                          <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                      </div> <!-- cd-slider-wrapper -->

                      <div class="cd-item-info">
                        <h4>Product Text Here</h4>
                        <span class="pro-price">$150.00</span>
                        <div class="pro-rating">
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                        </div>
                        <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target
                          just in time schemas without synergistic and human capital. Globally scale flexible
                          experiences through ubiquitous.</p>
                        <ul class="cd-item-action pro-button">
                          <li><button>Add to cart</button></li>
                          <li><a href="#0">Read more</a></li>
                        </ul> <!-- cd-item-action -->
                      </div> <!-- cd-item-info -->
                    </div>
                  </div>
                </div>
                <div class="pro-content">
                  <h4><a href="{{url('/product-details')}}">Product Text Here</a></h4>
                  <span>$150.00</span>
                  <div class="pro-rating">
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                  </div>
                  <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target just in
                    time schemas without synergistic and human capital. Globally scale flexible experiences through
                    ubiquitous.</p>
                  <ul class="pro-button">
                    <li><button>Add to cart</button></li>
                    <li><a href="{{url('/product-details')}}">Read more</a></li>
                  </ul> <!-- cd-item-action -->
                </div><!-- pro-content -->
              </div> <!-- pro item -->
            </div><!-- product-item -->

            <div class="product-item-grid">
              <div class="pro-item">
                <div class="pro-image cd-item" id="prdct7">
                  <img src="{{asset('images/product/product_07.jpg')}}" alt="product image" class="img-responsive">
                  <div class="pro-overlay"></div>
                  <a href="#" class="icon"><span class="flaticon-like-1"></span></a>
                  <a href="#" class="icon"><span class="flaticon-shopping-cart"></span></a>
                  <a href="#prdct7" class="cd-trigger icon hidden-xs hidden-sm"><span
                      class="flaticon-search"></span></a>
                  <a href="{{url('/product-details')}}" class="visible-xs visible-sm icon"><span
                      class="flaticon-search"></span></a>
                  <div class="quick-view-content">
                    <div class="quick-view-content-wrapper">
                      <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                          <li class="selected"><img src="{{asset('images/product/product_07.jpg')}}" alt="Product 1"></li>
                          <li><img src="{{asset('images/product/product_02.jpg')}}" alt="Product 2"></li>
                          <li><img src="{{asset('images/product/product_03.jpg')}}" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->

                        <ul class="cd-slider-navigation">
                          <li><a class="cd-next" href="#0">Prev</a></li>
                          <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                      </div> <!-- cd-slider-wrapper -->

                      <div class="cd-item-info">
                        <h4>Product Text Here</h4>
                        <span class="pro-price">$150.00</span>
                        <div class="pro-rating">
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                        </div>
                        <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target
                          just in time schemas without synergistic and human capital. Globally scale flexible
                          experiences through ubiquitous.</p>
                        <ul class="cd-item-action pro-button">
                          <li><button>Add to cart</button></li>
                          <li><a href="#0">Read more</a></li>
                        </ul> <!-- cd-item-action -->
                      </div> <!-- cd-item-info -->
                    </div>
                  </div>
                </div>
                <div class="pro-content">
                  <h4><a href="{{url('/product-details')}}">Product Text Here</a></h4>
                  <span>$150.00</span>
                  <div class="pro-rating">
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                  </div>
                  <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target just in
                    time schemas without synergistic and human capital. Globally scale flexible experiences through
                    ubiquitous.</p>
                  <ul class="pro-button">
                    <li><button>Add to cart</button></li>
                    <li><a href="{{url('/product-details')}}">Read more</a></li>
                  </ul> <!-- cd-item-action -->
                </div><!-- pro-content -->
              </div> <!-- pro item -->
            </div><!-- product-item -->

            <div class="product-item-grid">
              <div class="pro-item">
                <div class="pro-image cd-item" id="prdct8">
                  <img src="{{asset('images/product/product_08.jpg')}}" alt="product image" class="img-responsive">
                  <div class="pro-overlay"></div>
                  <a href="#" class="icon"><span class="flaticon-like-1"></span></a>
                  <a href="#" class="icon"><span class="flaticon-shopping-cart"></span></a>
                  <a href="#prdct8" class="cd-trigger icon hidden-xs hidden-sm"><span
                      class="flaticon-search"></span></a>
                  <a href="{{url('/product-details')}}" class="visible-xs visible-sm icon"><span
                      class="flaticon-search"></span></a>
                  <div class="quick-view-content">
                    <div class="quick-view-content-wrapper">
                      <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                          <li class="selected"><img src="{{asset('images/product/product_08.jpg')}}" alt="Product 1"></li>
                          <li><img src="{{asset('images/product/product_03.jpg')}}" alt="Product 2"></li>
                          <li><img src="{{asset('images/product/product_04.jpg')}}" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->

                        <ul class="cd-slider-navigation">
                          <li><a class="cd-next" href="#0">Prev</a></li>
                          <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                      </div> <!-- cd-slider-wrapper -->

                      <div class="cd-item-info">
                        <h4>Product Text Here</h4>
                        <span class="pro-price">$150.00</span>
                        <div class="pro-rating">
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                        </div>
                        <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target
                          just in time schemas without synergistic and human capital. Globally scale flexible
                          experiences through ubiquitous.</p>
                        <ul class="cd-item-action pro-button">
                          <li><button>Add to cart</button></li>
                          <li><a href="#0">Read more</a></li>
                        </ul> <!-- cd-item-action -->
                      </div> <!-- cd-item-info -->
                    </div>
                  </div>
                </div>
                <div class="pro-content">
                  <h4><a href="{{url('/product-details')}}">Product Text Here</a></h4>
                  <span>$150.00</span>
                  <div class="pro-rating">
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                  </div>
                  <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target just in
                    time schemas without synergistic and human capital. Globally scale flexible experiences through
                    ubiquitous.</p>
                  <ul class="pro-button">
                    <li><button>Add to cart</button></li>
                    <li><a href="{{url('/product-details')}}">Read more</a></li>
                  </ul> <!-- cd-item-action -->
                </div><!-- pro-content -->
              </div> <!-- pro item -->
            </div><!-- product-item -->

            <div class="product-item-grid">
              <div class="pro-item">
                <div class="pro-image cd-item" id="prdct9">
                  <img src="{{asset('images/product/product_09.jpg')}}" alt="product image" class="img-responsive">
                  <div class="pro-overlay"></div>
                  <a href="#" class="icon"><span class="flaticon-like-1"></span></a>
                  <a href="#" class="icon"><span class="flaticon-shopping-cart"></span></a>
                  <a href="#prdct9" class="cd-trigger icon hidden-xs hidden-sm"><span
                      class="flaticon-search"></span></a>
                  <a href="{{url('/product-details')}}" class="visible-xs visible-sm icon"><span
                      class="flaticon-search"></span></a>
                  <div class="quick-view-content">
                    <div class="quick-view-content-wrapper">
                      <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                          <li class="selected"><img src="{{asset('images/product/product_09.jpg')}}" alt="Product 1"></li>
                          <li><img src="{{asset('images/product/product_03.jpg')}}" alt="Product 2"></li>
                          <li><img src="{{asset('images/product/product_04.jpg')}}" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->

                        <ul class="cd-slider-navigation">
                          <li><a class="cd-next" href="#0">Prev</a></li>
                          <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                      </div> <!-- cd-slider-wrapper -->

                      <div class="cd-item-info">
                        <h4>Product Text Here</h4>
                        <span class="pro-price">$150.00</span>
                        <div class="pro-rating">
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                        </div>
                        <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target
                          just in time schemas without synergistic and human capital. Globally scale flexible
                          experiences through ubiquitous.</p>
                        <ul class="cd-item-action pro-button">
                          <li><button>Add to cart</button></li>
                          <li><a href="#0">Read more</a></li>
                        </ul> <!-- cd-item-action -->
                      </div> <!-- cd-item-info -->
                    </div>
                  </div>
                </div>
                <div class="pro-content">
                  <h4><a href="{{url('/product-details')}}">Product Text Here</a></h4>
                  <span>$150.00</span>
                  <div class="pro-rating">
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                  </div>
                  <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target just in
                    time schemas without synergistic and human capital. Globally scale flexible experiences through
                    ubiquitous.</p>
                  <ul class="pro-button">
                    <li><button>Add to cart</button></li>
                    <li><a href="{{url('/product-details')}}">Read more</a></li>
                  </ul> <!-- cd-item-action -->
                </div><!-- pro-content -->
              </div> <!-- pro item -->
            </div><!-- product-item -->

            <div class="product-item-grid">
              <div class="pro-item">
                <div class="pro-image cd-item" id="prdct10">
                  <img src="{{asset('images/product/product_10.jpg')}}" alt="product image" class="img-responsive">
                  <div class="pro-overlay"></div>
                  <a href="#" class="icon"><span class="flaticon-like-1"></span></a>
                  <a href="#" class="icon"><span class="flaticon-shopping-cart"></span></a>
                  <a href="#prdct10" class="cd-trigger icon hidden-xs hidden-sm"><span
                      class="flaticon-search"></span></a>
                  <a href="{{url('/product-details')}}" class="visible-xs visible-sm icon"><span
                      class="flaticon-search"></span></a>
                  <div class="quick-view-content">
                    <div class="quick-view-content-wrapper">
                      <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                          <li class="selected"><img src="{{asset('images/product/product_10.jpg')}}" alt="Product 1"></li>
                          <li><img src="{{asset('images/product/product_02.jpg')}}" alt="Product 2"></li>
                          <li><img src="{{asset('images/product/product_03.jpg')}}" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->

                        <ul class="cd-slider-navigation">
                          <li><a class="cd-next" href="#0">Prev</a></li>
                          <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                      </div> <!-- cd-slider-wrapper -->

                      <div class="cd-item-info">
                        <h4>Product Text Here</h4>
                        <span class="pro-price">$150.00</span>
                        <div class="pro-rating">
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                        </div>
                        <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target
                          just in time schemas without synergistic and human capital. Globally scale flexible
                          experiences through ubiquitous.</p>
                        <ul class="cd-item-action pro-button">
                          <li><button>Add to cart</button></li>
                          <li><a href="#0">Read more</a></li>
                        </ul> <!-- cd-item-action -->
                      </div> <!-- cd-item-info -->
                    </div>
                  </div>
                </div>
                <div class="pro-content">
                  <h4><a href="{{url('/product-details')}}">Product Text Here</a></h4>
                  <span>$150.00</span>
                  <div class="pro-rating">
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                  </div>
                  <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target just in
                    time schemas without synergistic and human capital. Globally scale flexible experiences through
                    ubiquitous.</p>
                  <ul class="pro-button">
                    <li><button>Add to cart</button></li>
                    <li><a href="{{url('/product-details')}}">Read more</a></li>
                  </ul> <!-- cd-item-action -->
                </div><!-- pro-content -->
              </div> <!-- pro item -->
            </div><!-- product-item -->

            <div class="product-item-grid">
              <div class="pro-item">
                <div class="pro-image cd-item" id="prdct11">
                  <img src="{{asset('images/product/product_11.jpg')}}" alt="product image" class="img-responsive">
                  <div class="pro-overlay"></div>
                  <a href="#" class="icon"><span class="flaticon-like-1"></span></a>
                  <a href="#" class="icon"><span class="flaticon-shopping-cart"></span></a>
                  <a href="#prdct11" class="cd-trigger icon hidden-xs hidden-sm"><span
                      class="flaticon-search"></span></a>
                  <a href="{{url('/product-details')}}" class="visible-xs visible-sm icon"><span
                      class="flaticon-search"></span></a>
                  <div class="quick-view-content">
                    <div class="quick-view-content-wrapper">
                      <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                          <li class="selected"><img src="{{asset('images/product/product_11.jpg')}}" alt="Product 1"></li>
                          <li><img src="{{asset('images/product/product_03.jpg')}}" alt="Product 2"></li>
                          <li><img src="{{asset('images/product/product_04.jpg')}}" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->

                        <ul class="cd-slider-navigation">
                          <li><a class="cd-next" href="#0">Prev</a></li>
                          <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                      </div> <!-- cd-slider-wrapper -->

                      <div class="cd-item-info">
                        <h4>Product Text Here</h4>
                        <span class="pro-price">$150.00</span>
                        <div class="pro-rating">
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                        </div>
                        <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target
                          just in time schemas without synergistic and human capital. Globally scale flexible
                          experiences through ubiquitous.</p>
                        <ul class="cd-item-action pro-button">
                          <li><button>Add to cart</button></li>
                          <li><a href="#0">Read more</a></li>
                        </ul> <!-- cd-item-action -->
                      </div> <!-- cd-item-info -->
                    </div>
                  </div>
                </div>
                <div class="pro-content">
                  <h4><a href="{{url('/product-details')}}">Product Text Here</a></h4>
                  <span>$150.00</span>
                  <div class="pro-rating">
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                  </div>
                  <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target just in
                    time schemas without synergistic and human capital. Globally scale flexible experiences through
                    ubiquitous.</p>
                  <ul class="pro-button">
                    <li><button>Add to cart</button></li>
                    <li><a href="{{url('/product-details')}}">Read more</a></li>
                  </ul> <!-- cd-item-action -->
                </div><!-- pro-content -->
              </div> <!-- pro item -->
            </div><!-- product-item -->

            <div class="product-item-grid">
              <div class="pro-item">
                <div class="pro-image cd-item" id="prdct12">
                  <img src="{{asset('images/product/product_12.jpg')}}" alt="product image" class="img-responsive">
                  <div class="pro-overlay"></div>
                  <a href="#" class="icon"><span class="flaticon-like-1"></span></a>
                  <a href="#" class="icon"><span class="flaticon-shopping-cart"></span></a>
                  <a href="#prdct12" class="cd-trigger icon hidden-xs hidden-sm"><span
                      class="flaticon-search"></span></a>
                  <a href="{{url('/product-details')}}" class="visible-xs visible-sm icon"><span
                      class="flaticon-search"></span></a>
                  <div class="quick-view-content">
                    <div class="quick-view-content-wrapper">
                      <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                          <li class="selected"><img src="{{asset('images/product/product_12.jpg')}}" alt="Product 1"></li>
                          <li><img src="{{asset('images/product/product_03.jpg')}}" alt="Product 2"></li>
                          <li><img src="{{asset('images/product/product_04.jpg')}}" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->

                        <ul class="cd-slider-navigation">
                          <li><a class="cd-next" href="#0">Prev</a></li>
                          <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                      </div> <!-- cd-slider-wrapper -->

                      <div class="cd-item-info">
                        <h4>Product Text Here</h4>
                        <span class="pro-price">$150.00</span>
                        <div class="pro-rating">
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                        </div>
                        <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target
                          just in time schemas without synergistic and human capital. Globally scale flexible
                          experiences through ubiquitous.</p>
                        <ul class="cd-item-action pro-button">
                          <li><button>Add to cart</button></li>
                          <li><a href="#0">Read more</a></li>
                        </ul> <!-- cd-item-action -->
                      </div> <!-- cd-item-info -->
                    </div>
                  </div>
                </div>
                <div class="pro-content">
                  <h4><a href="{{url('/product-details')}}">Product Text Here</a></h4>
                  <span>$150.00</span>
                  <div class="pro-rating">
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                  </div>
                  <p>Globally network customer directed data and future-proof and synerlgy Energistcaly target just in
                    time schemas without synergistic and human capital. Globally scale flexible experiences through
                    ubiquitous.</p>
                  <ul class="pro-button">
                    <li><button>Add to cart</button></li>
                    <li><a href="{{url('/product-details')}}">Read more</a></li>
                  </ul> <!-- cd-item-action -->
                </div><!-- pro-content -->
              </div> <!-- pro item -->
            </div><!-- product-item -->

            <div id="cd-quick-view" class="cd-quick-view">
              <a href="javascript:void(0);" class="cd-close"><i class="fa fa-times" aria-hidden="true"></i></a>
            </div> <!-- cd-quick-view -->
            <div id="cd-quick-view-coverlay"></div>
          </div><!-- product items -->

          <ul class="pagination product-pagination">
            <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-xs-12">
          <div class="product-sidebar">
            <div class="por-sidebar-item">
              <form>
                <input type="text" name="search" placeholder="Type Your Search...">
                <button><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div>
            <div class="widget widget-category px-2">
              <div class="widget-header">
                <h5>All Categories</h5>
              </div>
              <div class="widget-wrapper">
                <ul class="lab-ul shop-menu">
                  <li>
                    <a href="#0">Apple</a>
                    <ul class="lab-ul shop-submenu">
                      <li><a href="#">Apple 1</a></li>
                      <li><a href="#">Apple 2</a></li>
                      <li><a href="#">Apple 3</a></li>
                    </ul>
                  </li>
                  <li><a href="#0">Orange</a>
                    <ul class="lab-ul shop-submenu">
                      <li><a href="#">Orange 1</a></li>
                    </ul>
                  </li>
                  <li><a href="#0">Tomato</a>
                    <ul class="lab-ul shop-submenu">
                      <li><a href="#">Tomato 1</a></li>
                      <li><a href="#">Tomato 2</a></li>
                    </ul>
                  </li>
                  <li><a href="#0">Honey</a>
                    <ul class="lab-ul shop-submenu">
                      <li><a href="#">Honey 1</a></li>
                      <li><a href="#">Honey 2</a></li>
                      <li><a href="#">Honey 3</a></li>
                      <li><a href="#">Honey 4</a></li>
                      <li><a href="#">Honey 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#0">Banana</a>
                    <ul class="lab-ul shop-submenu">
                      <li><a href="#">Banana 1</a></li>
                      <li><a href="#">Banana 2</a></li>
                    </ul>
                  </li>
                  <li><a href="#0">Blueberry</a>
                    <ul class="lab-ul shop-submenu">
                      <li><a href="#">Blueberry 1</a></li>
                      <li><a href="#">Blueberry 2</a></li>
                      <li><a href="#">Blueberry 3</a></li>
                    </ul>
                  </li>
                  <li><a href="#0">Lettuce</a>
                    <ul class="lab-ul shop-submenu">
                      <li><a href="#">Lettuce 1</a></li>
                      <li><a href="#">Lettuce 2</a></li>
                      <li><a href="#">Lettuce 3</a></li>
                      <li><a href="#">Lettuce 4</a></li>
                      <li><a href="#">Lettuce 5</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="por-sidebar-item">
              <h4>Letest Product</h4>

              <ul class="rel-product">
                <li>
                  <div class="image">
                    <img src="{{asset('images/product/recent_product_01.jpg')}}" alt="product image" class="img-responsive">
                  </div>
                  <div class="content">
                    <h5><a href="{{url('/product-details')}}">Product Text Here</a></h5>
                    <span>$ 250.00</span>
                    <div class="pro-rating">
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <img src="{{asset('images/product/recent_product_02.jpg')}}" alt="product image" class="img-responsive">
                  </div>
                  <div class="content">
                    <h5><a href="{{url('/product-details')}}">Product Text Here</a></h5>
                    <span>$ 250.00</span>
                    <div class="pro-rating">
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <img src="{{asset('images/product/recent_product_03.jpg')}}" alt="product image" class="img-responsive">
                  </div>
                  <div class="content">
                    <h5><a href="{{url('/product-details')}}">Product Text Here</a></h5>
                    <span>$ 250.00</span>
                    <div class="pro-rating">
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <img src="{{asset('images/product/recent_product_04.jpg')}}" alt="product image" class="img-responsive">
                  </div>
                  <div class="content">
                    <h5><a href="{{url('/product-details')}}">Product Text Here</a></h5>
                    <span>$ 250.00</span>
                    <div class="pro-rating">
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </li>
              </ul>
            </div><!-- por-sidebar-item -->
            <div class="por-sidebar-item">
              <h4>Filter by Price</h4>

              <div class="pro-filter">
                <div class="nstSlider" data-range_min="0" data-range_max="100000" data-cur_min="20000"
                  data-cur_max="80000">
                  <div class="bar"></div>
                  <div class="leftGrip"></div>
                  <div class="rightGrip"></div>
                </div>
                <p><span>Price: </span> $<span class="leftLabel"></span> - $<span class="rightLabel"></span></p>
                <input type="submit" name="submit" value="Filter Now">
              </div><!-- pro-filter -->
            </div><!-- por-sidebar-item -->
            <div class="por-sidebar-item">
              <h4>Related Product</h4>

              <ul class="rel-product">
                <li>
                  <div class="image">
                    <img src="{{asset('images/product/rel_product_01.jpg')}}" alt="product image" class="img-responsive">
                  </div>
                  <div class="content">
                    <h5><a href="{{url('/product-details')}}">Product Text Here</a></h5>
                    <span>$ 250.00</span>
                    <div class="pro-rating">
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <img src="{{asset('images/product/rel_product_02.jpg')}}" alt="product image" class="img-responsive">
                  </div>
                  <div class="content">
                    <h5><a href="{{url('/product-details')}}">Product Text Here</a></h5>
                    <span>$ 250.00</span>
                    <div class="pro-rating">
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <img src="{{asset('images/product/rel_product_03.jpg')}}" alt="product image" class="img-responsive">
                  </div>
                  <div class="content">
                    <h5><a href="{{url('/product-details')}}">Product Text Here</a></h5>
                    <span>$ 250.00</span>
                    <div class="pro-rating">
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <img src="{{asset('images/product/rel_product_04.jpg')}}" alt="product image" class="img-responsive">
                  </div>
                  <div class="content">
                    <h5><a href="{{url('/product-details')}}">Product Text Here</a></h5>
                    <span>$ 250.00</span>
                    <div class="pro-rating">
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </li>
              </ul>
            </div><!-- por-sidebar-item -->
          </div><!-- product-sidebar -->
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section>
  <!-- Product end here -->


  <!-- Subscribe Start here -->
  <section class="subscribe">
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


<!-- Mirrored from labartisan.net/demo/kidsacademy/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 12:38:58 GMT -->
</html>
