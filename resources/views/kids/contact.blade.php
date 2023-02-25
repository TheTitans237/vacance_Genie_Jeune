@extends('menu.app')
@section('content')
    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <h3>Our Contact Info</h3>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>-</li>
                    <li>Contact us</li>
                </ul>
            </div><!-- container -->
        </div><!-- overlay -->
    </section><!-- page header -->
    <!-- Page Header End here -->


    <!-- Contact Start here -->
    <section class="contact contact-page">
        <div class="contact-details padding-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <ul>
                            <li class="contact-item">
                                <span class="icon flaticon-signs"></span>
                                <div class="content">
                                    <h4>Our Location</h4>
                                    <p>218 Sahera Tropical Center Room#7 <br> New Newyork Road 1205</p>
                                </div>
                            </li>
                            <li class="contact-item">
                                <span class="icon flaticon-smartphone"></span>
                                <div class="content">
                                    <h4>Phone Number</h4>
                                    <p>01923-970212, 01776-502993 <br> +2154897369</p>
                                </div>
                            </li>
                            <li class="contact-item">
                                <span class="icon flaticon-message"></span>
                                <div class="content">
                                    <h4>Email Address</h4>
                                    <p>hello@labartisan <br> hello@codexcoder.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8 col-md-6 col-xs-12">
                        <form class="contact-form">
                            <input type="text" name="name" placeholder="Your Name" class="contact-input">
                            <input type="email" name="email" placeholder="Your Email" class="contact-input">
                            <textarea rows="5" class="contact-input">Your Messages</textarea>
                            <input type="submit" name="submit" value="Send Message" class="contact-button">
                        </form>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- contact-details -->
        <div class="contact-map" id="map-canvas"></div>
    </section>
    <!-- Contact End here -->
@endsection
