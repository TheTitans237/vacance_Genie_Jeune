@extends('menu.app')
@section('content')
    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <h3>Our School Gallery</h3>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>-</li>
                    <li>Gallery</li>
                </ul>
            </div><!-- container -->
        </div><!-- overlay -->
    </section><!-- page header -->
    <!-- Page Header End here -->


    <!-- Gallery Start here -->
    <section class="gallery padding-120">
        <div class="container">
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
                        <img src="{{ asset('images/gallery/gallery_01.jpg') }}" alt="gallery image" class="img-responsive">
                        <div class="gallery-overlay">
                            <div class="bg"></div>
                        </div>
                        <div class="gallery-content">
                            <a href="{{ asset('images/gallery/gallery_bg_01.jpg') }}" data-rel="lightcase:myCollection"><i
                                    class="icon flaticon-expand"></i></a>
                            <h4>Product Name Here</h4>
                            <span>By: KidsAcademy Theme</span>
                        </div>
                    </div>
                </div><!-- gallery item -->
                <div class="gallery-item development photography">
                    <div class="gallery-image">
                        <img src="{{ asset('images/gallery/gallery_02.jpg') }}" alt="gallery image" class="img-responsive">
                        <div class="gallery-overlay">
                            <div class="bg"></div>
                        </div>
                        <div class="gallery-content">
                            <a href="{{ asset('images/gallery/gallery_bg_02.jpg') }}" data-rel="lightcase:myCollection"><i
                                    class="icon flaticon-expand"></i></a>
                            <h4>Product Name Here</h4>
                            <span>By: KidsAcademy Theme</span>
                        </div>
                    </div>
                </div><!-- gallery item -->
                <div class="gallery-item branding packing">
                    <div class="gallery-image">
                        <img src="{{ asset('images/gallery/gallery_03.jpg') }}" alt="gallery image" class="img-responsive">
                        <div class="gallery-overlay">
                            <div class="bg"></div>
                        </div>
                        <div class="gallery-content">
                            <a href="{{ asset('images/gallery/gallery_bg_03.jpg') }}" data-rel="lightcase:myCollection"><i
                                    class="icon flaticon-expand"></i></a>
                            <h4>Product Name Here</h4>
                            <span>By: KidsAcademy Theme</span>
                        </div>
                    </div>
                </div><!-- gallery item -->
                <div class="gallery-item development photography">
                    <div class="gallery-image">
                        <img src="{{ asset('images/gallery/gallery_04.jpg') }}" alt="gallery image" class="img-responsive">
                        <div class="gallery-overlay">
                            <div class="bg"></div>
                        </div>
                        <div class="gallery-content">
                            <a href="{{ asset('images/gallery/gallery_bg_04.jpg') }}" data-rel="lightcase:myCollection"><i
                                    class="icon flaticon-expand"></i></a>
                            <h4>Product Name Here</h4>
                            <span>By: KidsAcademy Theme</span>
                        </div>
                    </div>
                </div><!-- gallery item -->
                <div class="gallery-item branding packing">
                    <div class="gallery-image">
                        <img src="{{ asset('images/gallery/gallery_05.jpg') }}" alt="gallery image" class="img-responsive">
                        <div class="gallery-overlay">
                            <div class="bg"></div>
                        </div>
                        <div class="gallery-content">
                            <a href="{{ asset('images/gallery/gallery_bg_05.jpg') }}" data-rel="lightcase:myCollection"><i
                                    class="icon flaticon-expand"></i></a>
                            <h4>Product Name Here</h4>
                            <span>By: KidsAcademy Theme</span>
                        </div>
                    </div>
                </div><!-- gallery item -->
                <div class="gallery-item branding packing">
                    <div class="gallery-image">
                        <img src="{{ asset('images/gallery/gallery_06.jpg') }}" alt="gallery image" class="img-responsive">
                        <div class="gallery-overlay">
                            <div class="bg"></div>
                        </div>
                        <div class="gallery-content">
                            <a href="{{ asset('images/gallery/gallery_bg_06.jpg') }}" data-rel="lightcase:myCollection"><i
                                    class="icon flaticon-expand"></i></a>
                            <h4>Product Name Here</h4>
                            <span>By: KidsAcademy Theme</span>
                        </div>
                    </div>
                </div><!-- gallery item -->
                <div class="gallery-item development photography">
                    <div class="gallery-image">
                        <img src="{{ asset('images/gallery/gallery_04.jpg') }}" alt="gallery image" class="img-responsive">
                        <div class="gallery-overlay">
                            <div class="bg"></div>
                        </div>
                        <div class="gallery-content">
                            <a href="{{ asset('images/gallery/gallery_bg_04.jpg') }}" data-rel="lightcase:myCollection"><i
                                    class="icon flaticon-expand"></i></a>
                            <h4>Product Name Here</h4>
                            <span>By: KidsAcademy Theme</span>
                        </div>
                    </div>
                </div><!-- gallery item -->
                <div class="gallery-item branding packing">
                    <div class="gallery-image">
                        <img src="{{ asset('images/gallery/gallery_05.jpg') }}" alt="gallery image" class="img-responsive">
                        <div class="gallery-overlay">
                            <div class="bg"></div>
                        </div>
                        <div class="gallery-content">
                            <a href="{{ asset('images/gallery/gallery_bg_05.jpg') }}" data-rel="lightcase:myCollection"><i
                                    class="icon flaticon-expand"></i></a>
                            <h4>Product Name Here</h4>
                            <span>By: KidsAcademy Theme</span>
                        </div>
                    </div>
                </div><!-- gallery item -->
                <div class="gallery-item branding packing">
                    <div class="gallery-image">
                        <img src="{{ asset('images/gallery/gallery_06.jpg') }}" alt="gallery image"
                            class="img-responsive">
                        <div class="gallery-overlay">
                            <div class="bg"></div>
                        </div>
                        <div class="gallery-content">
                            <a href="{{ asset('images/gallery/gallery_bg_06.jpg') }}"
                                data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
                            <h4>Product Name Here</h4>
                            <span>By: KidsAcademy Theme</span>
                        </div>
                    </div>
                </div><!-- gallery item -->
            </div><!-- gallery items -->
            <div class="gallery-button"><a href="{{ url('/gallery') }}" class="button-default">View More Gallery</a>
            </div>
        </div><!-- container -->
    </section><!-- gallery -->
    <!-- Gallery End here -->
@endsection
