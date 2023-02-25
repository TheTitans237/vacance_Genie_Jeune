@extends('menu.app')
@section('content')
    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <h3>About Our KidsAcademy</h3>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>-</li>
                    <li>About us</li>
                </ul>
            </div><!-- container -->
        </div><!-- overlay -->
    </section><!-- page header -->
    <!-- Page Header End here -->


    <!-- facility Start here -->
    <section class="facility padding-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="facility-item">
                        <span class="icon flaticon-symbols"></span>
                        <h4>Active Learning</h4>
                        <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after
                        </p>
                    </div><!-- facility item -->
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="facility-item">
                        <span class="icon flaticon-avatar"></span>
                        <h4>Expert Teachers</h4>
                        <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after
                        </p>
                    </div><!-- facility item -->
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="facility-item">
                        <span class="icon flaticon-world"></span>
                        <h4>Strategi Location</h4>
                        <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after
                        </p>
                    </div><!-- facility item -->
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="facility-item">
                        <span class="icon flaticon-line-chart"></span>
                        <h4>Full Day Programs</h4>
                        <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after
                        </p>
                    </div><!-- facility item -->
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- facility -->
    <!-- facility End here -->


    <!-- About Start here -->
    <section class="about section-notch">
        <div class="overlay padding-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="{{ asset('images/about/about.png') }}" alt="about image" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h3>About Our KidsAcademy</h3>
                            <p>Enthusiasticay diseminate competitive oportunitie through transparent an actions Compelngly
                                seize viral
                                schemas through intermandated creative is adiea sources. Enthusiasticay plagiarize
                                clientcentered
                                relationship for the covalent experiences. Distinctively architect 24/365 service for
                                wireless is
                                ebusiness ahosfluorescently Efficiently comunicate coperative methods of empowerment awesome
                                athrough
                                Monotonectaly myocardinate cross and functional niche markets and an functional.</p>
                            <ul>
                                <li><a href="#" class="button-default">Read More</a></li>
                                <li><a href="#" class="button-default">Buy Now</a></li>
                            </ul>
                        </div><!-- about content -->
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- overlay -->
    </section><!-- about -->
    <!-- About End here -->


    <!-- Features Start here -->
    <section class="features padding-120">
        <div class="container">
            <div class="section-header">
                <h3>Why Choose KidsAcademy</h3>
                <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize
                    pandemic
                    strategic themeplatform.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="features-left">
                        <div class="feature-item">
                            <div class="icon flaticon-people-1"></div>
                            <div class="content">
                                <h4>Expert Teachers</h4>
                                <p>Distinctively enhance empowered and alignments without leveraged architectures
                                    professionly.</p>
                            </div>
                        </div><!-- feature item -->
                        <div class="feature-item">
                            <div class="icon flaticon-symbols"></div>
                            <div class="content">
                                <h4>Multimedia Class</h4>
                                <p>Distinctively enhance empowered and alignments without leveraged architectures
                                    professionly.</p>
                            </div>
                        </div><!-- feature item -->
                        <div class="feature-item">
                            <div class="icon flaticon-microphone"></div>
                            <div class="content">
                                <h4>Music And Art Class</h4>
                                <p>Distinctively enhance empowered and alignments without leveraged architectures
                                    professionly.</p>
                            </div>
                        </div><!-- feature item -->
                    </div><!-- feature left -->
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="feature-image">
                        <img src="{{ asset('images/feature.jpg') }}" alt="feature image" class="img-responsive">
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="features-right">
                        <div class="feature-item">
                            <div class="icon flaticon-home"></div>
                            <div class="content">
                                <h4>Expert Teachers</h4>
                                <p>Distinctively enhance empowered and alignments without leveraged architectures
                                    professionly.</p>
                            </div>
                        </div><!-- feature item -->
                        <div class="feature-item">
                            <div class="icon flaticon-line-chart"></div>
                            <div class="content">
                                <h4>Multimedia Class</h4>
                                <p>Distinctively enhance empowered and alignments without leveraged architectures
                                    professionly.</p>
                            </div>
                        </div><!-- feature item -->
                        <div class="feature-item">
                            <div class="icon flaticon-signs"></div>
                            <div class="content">
                                <h4>Music And Art Class</h4>
                                <p>Distinctively enhance empowered and alignments without leveraged architectures
                                    professionly.</p>
                            </div>
                        </div><!-- feature item -->
                    </div><!-- feature left -->
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- features -->
    <!-- Features End here -->


    <!-- Teachers Start here -->
    <section class="teachers section-notch">
        <div class="overlay padding-120">
            <div class="container">
                <div class="section-header bg">
                    <h3>Meet Our Teachers</h3>
                    <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize
                        pandemic strategic themeplatform.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="teacher-item">
                            <div class="teacher-image">
                                <img src="{{ asset('images/teachers/teacher_01.jpg') }}" alt="teacher image"
                                    class="img-responsive">
                            </div>
                            <div class="teacher-content">
                                <h4>Broklyn Doel <span>Sains Teacher</span></h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                                <p>Distinctively initiate and sustainable synergy vaan tactical opportunities. awesome theme
                                    ollaboratively.</p>
                                <a href="{{ url('/teacher-details') }}">View Portfolio</a>
                            </div>
                        </div><!-- teacher item -->
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="teacher-item">
                            <div class="teacher-image">
                                <img src="{{ asset('images/teachers/teacher_02.jpg') }}" alt="teacher image"
                                    class="img-responsive">
                            </div>
                            <div class="teacher-content">
                                <h4>Alex Jhonson <span>Art Teacher</span></h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                                <p>Distinctively initiate and sustainable synergy vaan tactical opportunities. awesome theme
                                    ollaboratively.</p>
                                <a href="{{ url('/teacher-details') }}">View Portfolio</a>
                            </div>
                        </div><!-- teacher item -->
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="teacher-item">
                            <div class="teacher-image">
                                <img src="{{ asset('images/teachers/teacher_03.jpg') }}" alt="teacher image"
                                    class="img-responsive">
                            </div>
                            <div class="teacher-content">
                                <h4>Robot Jhonson <span>Math Teacher</span></h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                                <p>Distinctively initiate and sustainable synergy vaan tactical opportunities. awesome theme
                                    ollaboratively.</p>
                                <a href="{{ url('/teacher-details') }}">View Portfolio</a>
                            </div>
                        </div><!-- teacher item -->
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="teacher-item">
                            <div class="teacher-image">
                                <img src="{{ asset('images/teachers/teacher_04.jpg') }}" alt="teacher image"
                                    class="img-responsive">
                            </div>
                            <div class="teacher-content">
                                <h4>Janaton Doe <span>English Teacher</span></h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                                <p>Distinctively initiate and sustainable synergy vaan tactical opportunities. awesome theme
                                    ollaboratively.</p>
                                <a href="{{ url('/teacher-details') }}">View Portfolio</a>
                            </div>
                        </div><!-- teacher item -->
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- overlay -->
    </section><!-- teacher -->
    <!-- Teachers End here -->


    <!-- Testimonial Start here -->
    <section class="testimonial padding-120">
        <div class="container">
            <div class="section-header">
                <h3>What Parents Say</h3>
                <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize
                    pandemic
                    strategic themeplatform.</p>
            </div>
            <div class="testimonial-items">
                <div class="testimonial-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="testimonial-item swiper-slide">
                            <div class="testimonial-details">
                                <p>Professionally predominate that timely infrastriuctures tops line methodlogies
                                    Colaboratively seize
                                    scalable achannels before longterm high impact</p>
                                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                                <img src="{{ asset('images/testimonial/testimonial_icon_01.jpg') }}"
                                    alt="testimonial icon" class="img-responsive">
                            </div>
                            <div class="testimonial-image">
                                <img src="{{ asset('images/testimonial/testimonial_01.jpg') }}" alt="client image"
                                    class="img-responsive">
                            </div>
                        </div><!-- testimonial-item -->
                        <div class="testimonial-item swiper-slide">
                            <div class="testimonial-details">
                                <p>Professionally predominate that timely infrastriuctures tops line methodlogies
                                    Colaboratively seize
                                    scalable achannels before longterm high impact</p>
                                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                                <img src="{{ asset('images/testimonial/testimonial_icon_02.jpg') }}"
                                    alt="testimonial icon" class="img-responsive">
                            </div>
                            <div class="testimonial-image">
                                <img src="{{ asset('images/testimonial/testimonial_02.jpg') }}" alt="client image"
                                    class="img-responsive">
                            </div>
                        </div><!-- testimonial-item -->
                        <div class="testimonial-item swiper-slide">
                            <div class="testimonial-details">
                                <p>Professionally predominate that timely infrastriuctures tops line methodlogies
                                    Colaboratively seize
                                    scalable achannels before longterm high impact</p>
                                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                                <img src="{{ asset('images/testimonial/testimonial_icon_03.jpg') }}"
                                    alt="testimonial icon" class="img-responsive">
                            </div>
                            <div class="testimonial-image">
                                <img src="{{ asset('images/testimonial/testimonial_03.jpg') }}" alt="client image"
                                    class="img-responsive">
                            </div>
                        </div><!-- testimonial-item -->
                        <div class="testimonial-item swiper-slide">
                            <div class="testimonial-details">
                                <p>Professionally predominate that timely infrastriuctures tops line methodlogies
                                    Colaboratively seize
                                    scalable achannels before longterm high impact</p>
                                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                                <img src="{{ asset('images/testimonial/testimonial_icon_01.jpg') }}"
                                    alt="testimonial icon" class="img-responsive">
                            </div>
                            <div class="testimonial-image">
                                <img src="{{ asset('images/testimonial/testimonial_01.jpg') }}" alt="client image"
                                    class="img-responsive">
                            </div>
                        </div><!-- testimonial-item -->
                        <div class="testimonial-item swiper-slide">
                            <div class="testimonial-details">
                                <p>Professionally predominate that timely infrastriuctures tops line methodlogies
                                    Colaboratively seize
                                    scalable achannels before longterm high impact</p>
                                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                                <img src="{{ asset('images/testimonial/testimonial_icon_02.jpg') }}"
                                    alt="testimonial icon" class="img-responsive">
                            </div>
                            <div class="testimonial-image">
                                <img src="{{ asset('images/testimonial/testimonial_02.jpg') }}" alt="client image"
                                    class="img-responsive">
                            </div>
                        </div><!-- testimonial-item -->
                        <div class="testimonial-item swiper-slide">
                            <div class="testimonial-details">
                                <p>Professionally predominate that timely infrastriuctures tops line methodlogies
                                    Colaboratively seize
                                    scalable achannels before longterm high impact</p>
                                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                                <img src="{{ asset('images/testimonial/testimonial_icon_03.jpg') }}"
                                    alt="testimonial icon" class="img-responsive">
                            </div>
                            <div class="testimonial-image">
                                <img src="{{ asset('images/testimonial/testimonial_03.jpg') }}" alt="client image"
                                    class="img-responsive">
                            </div>
                        </div><!-- testimonial-item -->

                    </div><!-- swiper-wrapper -->
                </div><!-- swiper-container -->
            </div><!-- testimonial-items -->
        </div><!-- container -->
    </section><!-- testimonial -->
    <!-- Testimonial End here -->
@endsection
