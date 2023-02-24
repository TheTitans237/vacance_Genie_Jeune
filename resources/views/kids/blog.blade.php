@extends('menu.app')
@section('content')

  <!-- Page Header Start here -->
  <section class="page-header section-notch">
    <div class="overlay">
      <div class="container">
        <h3>Our Blog Posts</h3>
        <ul>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>-</li>
          <li>Blog</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- Blog Post Start here -->
  <section class="blog-post padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 post-item-pagination">
          <div class="post-items">
            <div class="post-item">
              <div class="post-image">
                <a href="{{url('/single')}}"><img src="{{asset('images/blog/post_01.jpg')}}" alt="post image" class="img-responsive"></a>
              </div>
              <div class="post-content">
                <h3><a href="{{url('/single')}}">Asertivelly recaptiualize best rofesionally</a></h3>
                <ul class="post-meta">
                  <li><span class="icon flaticon-people-1"></span> <a href="#">Robot Smith</a></li>
                  <li><span class="icon flaticon-like"></span> <a href="#">128 Likes</a></li>
                  <li><span class="icon flaticon-chat"></span> <a href="#">32 Comments</a></li>
                </ul>
                <p>Asertively recaptiualize business benefits rofesionally timely data with and premium timely with
                  premium products sertively recaptiualize business benefits rofesionally timely data an with and
                  premium timely awesome premium products.</p>
                <a href="{{url('/single')}}" class="button-default post-button">Read More</a>
              </div>
            </div><!-- post item -->
            <div class="post-item">
              <div class="post-image">
                <a href="{{url('/single')}}"><img src="{{asset('images/blog/post_02.jpg')}}" alt="post image" class="img-responsive"></a>
              </div>
              <div class="post-content">
                <h3><a href="{{url('/single')}}">Asertivelly recaptiualize best rofesionally</a></h3>
                <ul class="post-meta">
                  <li><span class="icon flaticon-people-1"></span> <a href="#">Robot Smith</a></li>
                  <li><span class="icon flaticon-like"></span> <a href="#">128 Likes</a></li>
                  <li><span class="icon flaticon-chat"></span> <a href="#">32 Comments</a></li>
                </ul>
                <p>Asertively recaptiualize business benefits rofesionally timely data with and premium timely with
                  premium products sertively recaptiualize business benefits rofesionally timely data an with and
                  premium timely awesome premium products.</p>
                <a href="{{url('/single')}}" class="button-default post-button">Read More</a>
              </div>
            </div><!-- post item -->
            <div class="post-item">
              <div class="post-image">
                <a href="{{url('/single')}}"><img src="{{asset('images/blog/post_03.jpg')}}" alt="post image" class="img-responsive"></a>
              </div>
              <div class="post-content">
                <h3><a href="{{url('/single')}}">Asertivelly recaptiualize best rofesionally</a></h3>
                <ul class="post-meta">
                  <li><span class="icon flaticon-people-1"></span> <a href="#">Robot Smith</a></li>
                  <li><span class="icon flaticon-like"></span> <a href="#">128 Likes</a></li>
                  <li><span class="icon flaticon-chat"></span> <a href="#">32 Comments</a></li>
                </ul>
                <p>Asertively recaptiualize business benefits rofesionally timely data with and premium timely with
                  premium products sertively recaptiualize business benefits rofesionally timely data an with and
                  premium timely awesome premium products.</p>
                <a href="{{url('/single')}}" class="button-default post-button">Read More</a>
              </div>
            </div><!-- post item -->
            <div class="post-item">
              <div class="post-image">
                <a href="{{url('/single')}}"><img src="{{asset('images/blog/post_04.jpg')}}" alt="post image" class="img-responsive"></a>
              </div>
              <div class="post-content">
                <h3><a href="{{url('/single')}}">Asertivelly recaptiualize best rofesionally</a></h3>
                <ul class="post-meta">
                  <li><span class="icon flaticon-people-1"></span> <a href="#">Robot Smith</a></li>
                  <li><span class="icon flaticon-like"></span> <a href="#">128 Likes</a></li>
                  <li><span class="icon flaticon-chat"></span> <a href="#">32 Comments</a></li>
                </ul>
                <p>Asertively recaptiualize business benefits rofesionally timely data with and premium timely with
                  premium products sertively recaptiualize business benefits rofesionally timely data an with and
                  premium timely awesome premium products.</p>
                <a href="{{url('/single')}}" class="button-default post-button">Read More</a>
              </div>
            </div><!-- post item -->
          </div><!-- post items -->
          <ul class="pagination">
            <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-item">
              <form>
                <input type="text" name="text" placeholder="Search Your Catagorie...">
                <button><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div><!-- sidebar item -->
            <div class="sidebar-item">
              <h3 class="sidebar-title">All Categories</h3>

              <ul class="sidebar-categories">
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Brand Creation
                    <span>05</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Company Analysis
                    <span>27</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Corporate Identity
                    <span>07</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Funding <span>09</span></a>
                </li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Medical <span>08</span></a>
                </li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Strategy Planning
                    <span>25</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Uncategorized
                    <span>20</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Video Production
                    <span>30</span></a></li>
              </ul>
            </div><!-- sidebar item -->
            <div class="sidebar-item">
              <h3 class="sidebar-title">Latest Blog Post</h3>

              <ul class="sidebar-posts">
                <li>
                  <div class="image">
                    <a href="{{url('/single')}}"><img src="{{asset('images/blog/latest_post_01.jpg')}}" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{url('/single')}}">Foulate revlunry and the mihare are a awesome the theme.</a>
                    <span>04 February 2021</span>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <a href="{{url('/single')}}"><img src="{{asset('images/blog/latest_post_02.jpg')}}" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{url('/single')}}">Foulate revlunry and the mihare are a awesome the theme.</a>
                    <span>04 February 2021</span>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <a href="{{url('/single')}}"><img src="{{asset('images/blog/latest_post_03.jpg')}}" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{url('/single')}}">Foulate revlunry and the mihare are a awesome the theme.</a>
                    <span>04 February 2021</span>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <a href="{{url('/single')}}"><img src="{{asset('images/blog/latest_post_04.jpg')}}" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{url('/single')}}">Foulate revlunry and the mihare are a awesome the theme.</a>
                    <span>04 February 2021</span>
                  </div>
                </li>
              </ul><!-- sidebar-posts -->
            </div><!-- sidebar item -->
            <div class="sidebar-item">
              <h3 class="sidebar-title">Photos Gallery</h3>

              <ul class="sidebar-gallery">
                <li><a href="#"><img src="{{asset('images/blog/gallery_01.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{asset('images/blog/gallery_02.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{asset('images/blog/gallery_03.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{asset('images/blog/gallery_04.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{asset('images/blog/gallery_05.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{asset('images/blog/gallery_06.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{asset('images/blog/gallery_07.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{asset('images/blog/gallery_08.jpg')}}" alt="gallery image" class="img-responsive"></a>
                </li>
              </ul><!-- sidebar-gallery -->
            </div><!-- sidebar item -->
            <div class="sidebar-item">
              <h3 class="sidebar-title">Recent Twitters</h3>

              <ul class="sidebar-twitts">
                <li>
                  <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                  <div class="content">
                    <ul>
                      <li><a href="#">Robot Smith</a></li>
                      <li><a href="#">@ bonndu05 ascenarios</a></li>
                    </ul>
                    <p>Uniquely morph turnkey technlogy an</p>
                    <a href="#">http://trimanco.com/5e7ee</a>
                  </div>
                </li>
                <li>
                  <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                  <div class="content">
                    <ul>
                      <li><a href="#">Janaton Doe</a></li>
                      <li><a href="#">@ bonndu05 ascenarios</a></li>
                    </ul>
                    <p>Uniquely morph turnkey technlogy an</p>
                    <a href="#">http://trimanco.com/5e7ee</a>
                  </div>
                </li>
                <li>
                  <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                  <div class="content">
                    <ul>
                      <li><a href="#">Smith Jhonson</a></li>
                      <li><a href="#">@ bonndu05 ascenarios</a></li>
                    </ul>
                    <p>Uniquely morph turnkey technlogy an</p>
                    <a href="#">http://trimanco.com/5e7ee</a>
                  </div>
                </li>
                <li>
                  <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                  <div class="content">
                    <ul>
                      <li><a href="#">Jhonson Doe</a></li>
                      <li><a href="#">@ bonndu05 ascenarios</a></li>
                    </ul>
                    <p>Uniquely morph turnkey technlogy an</p>
                    <a href="#">http://trimanco.com/5e7ee</a>
                  </div>
                </li>
              </ul><!-- sidebar-twitts -->
            </div><!-- sidebar item -->
            <div class="sidebar-item">
              <h3 class="sidebar-title">Latest Tags</h3>

              <ul class="sidebar-tags">
                <li><a href="#">Business</a></li>
                <li><a href="#">Corporate</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Agency</a></li>
                <li><a href="#">Development</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Wordpress</a></li>
                <li><a href="#">Joomla</a></li>
                <li><a href="#">HTML5</a></li>
              </ul>
            </div><!-- sidebar item -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Post End here -->

@endsection
