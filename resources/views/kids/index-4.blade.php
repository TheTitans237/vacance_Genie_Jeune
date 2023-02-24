@extends('menu.app')
@section('content')
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
            <img src="{{ asset('images/about/about-3.png') }}" alt="about image" class="img-responsive">
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
@endsection
