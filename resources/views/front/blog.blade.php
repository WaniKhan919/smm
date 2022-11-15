@extends('layout.layout')
@section('container')
<!--page-title starts-->
<div class="page-title-area">
  <div class="container">
    <div class="row height-200 align-items-center">
      <div class="col-lg-12">
        <div class="page-title section-title text-center">
          <h1><span>Blog</span></h1>
          <div class="site-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--page-title ends-->

<!--blog-area start-->
<div class="blog-area pt-100 pt-sm-80 pb-100 pb-sm-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="blog-sidebar">
          <!--search-->
          <div class="sidebar-search">
            <input type="text" placeholder="Search" />
            <button><i class="icon_search"></i></button>
          </div>
          <!--category-->
          <div class="sidebar-category mt-65 mt-sm-50">
            <h4 class="sidebar-title"><span>Categories</span></h4>
            <ul class="list-none">
              <li><a href="#">Digital Marketing</a></li>
              <li><a href="#">SEO</a></li>
              <li><a href="#">Media Content</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Science</a></li>
            </ul>
          </div>
          <!--recent-posts-->
          <div class="popular-posts mt-55 mt-sm-40">
            <h4 class="sidebar-title"><span>Recent Posts</span></h4>
            <ul class="list-none">
              <li class="d-table">
                <div class="popular-thumb table-cell">
                  <a href="#"><img src="{{asset('front_assets/images/blog/recent-posts/1.jpg')}}" alt="" /></a>
                </div>
                <div class="popular-desc table-cell">
                  <h4><a href="#">What We've Learned Using Video in Facebook Ads</a></h4>
                  <small><i class="fa fa-clock-o"></i> 18th Jan, 2020</small>
                </div>
              </li>
              <li class="d-table">
                <div class="popular-thumb table-cell">
                  <a href="#"><img src="{{asset('front_assets/images/blog/recent-posts/2.jpg')}}" alt="" /></a>
                </div>
                <div class="popular-desc table-cell">
                  <h4><a href="#">Cleaning Tip: How to Clean Stainless Steel</a></h4>
                  <small>15 November 2018</small>
                </div>
              </li>
              <li class="d-table">
                <div class="popular-thumb table-cell">
                  <a href="#"><img src="{{asset('front_assets/images/blog/recent-posts/3.jpg')}}" alt="" /></a>
                </div>
                <div class="popular-desc table-cell">
                  <h4><a href="#">The Top 3 Germiest Places in Your Office</a></h4>
                  <small>15 November 2018</small>
                </div>
              </li>
              <li class="d-table">
                <div class="popular-thumb table-cell">
                  <a href="#"><img src="{{asset('front_assets/images/blog/recent-posts/4.jpg')}}" alt="" /></a>
                </div>
                <div class="popular-desc table-cell">
                  <h4><a href="#">The Top 3 Germiest Places in Your Office</a></h4>
                  <small>15 November 2018</small>
                </div>
              </li>
            </ul>
          </div>
          <div class="tags-list mt-60 mt-sm-40">
            <h4 class="sidebar-title"><span>Search By Tags</span></h4>
            <div>
              <a href="#">SEO</a>
              <a href="#">Email Marketing</a>
              <a href="#">Digital</a>
              <a href="#">Content</a>
              <a href="#">Social Media</a>
              <a href="#">SEM</a>
              <a href="#">Office</a>
              <a href="#">Stains</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="blog-single blog-wide mt-sm-50 wow fadeIn" data-wow-delay=".3s">
          <div class="blog-thumb">
            <a href="blog-details.html"><img src="{{asset('front_assets/images/blog/lg/2.jpg')}}" alt="" /></a>
          </div>
          <div class="blog-desc mt-30">
            <ul class="blog-category">
              <li><a href="#">WordPress</a></li>
            </ul>
            <h3><a href="blog-details.html">Galliford saves hardest for last on Thames resi scheme</a></h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderi.</p>
            <ul class="blog-date-time">
              <li>
                <a href="#">
                  <i class="fa fa-clock-o"></i>
                  18TH JAN, 2020
                </a>
              </li>
              <li>
                by
                <a href="#">
                  Kerry Jones
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="blockquote style-1 mt-50 wow fadeIn" data-wow-delay=".4s">
          <p>“We need to stop interrupting what people are interested in and be what people are interested in.”</p>
          <h5>Steven Jobs</h5>
          <span>CEO - LionsBite</span>
        </div>
        <div class="blog-single blog-wide mt-60 wow fadeIn" data-wow-delay=".3s">
          <div class="blog-thumb">
            <a href="blog-details.html"><img src="{{asset('front_assets/images/blog/lg/1.jpg')}}" alt="" /></a>
          </div>
          <div class="blog-desc mt-30">
            <ul class="blog-category">
              <li><a href="#">Content Marketing</a></li>
            </ul>
            <h3><a href="blog-details.html">Willmott school targets UK first with next level precision</a></h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderi.</p>
            <ul class="blog-date-time">
              <li>
                <a href="#">
                  <i class="fa fa-clock-o"></i>
                  18TH JAN, 2020
                </a>
              </li>
              <li>
                by
                <a href="#">
                  Kerry Jones
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="blog-single blog-wide mt-50 wow fadeIn" data-wow-delay=".3s">
          <div class="blog-thumb">
            <a href="blog-details.html"><img src="{{asset('front_assets/images/blog/lg/3.jpg')}}" alt="" /></a>
          </div>
          <div class="blog-desc mt-30">
            <ul class="blog-category">
              <li><a href="#">SEO</a></li>
            </ul>
            <h3><a href="blog-details.html">Morgan Sindall battles sizzling site for Leicester revamp</a></h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderi.</p>
            <ul class="blog-date-time">
              <li>
                <a href="#">
                  <i class="fa fa-clock-o"></i>
                  18TH JAN, 2020
                </a>
              </li>
              <li>
                by
                <a href="#">
                  Kerry Jones
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row mt-50">
          <div class="col-lg-12 text-center">
            <a href="#" class="btn-common btn-pink radius-50">Load More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--blog-area end-->

<!--brands starts-->
<div class="brands-area bg-f3f8f8">
  <div class="container">
    <div class="row height-160 align-items-center">
      <div class="col-lg-12">
        <div class="brands-carousel">
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="{{asset('front_assets/images/brands/1.png')}}" alt="" />
              <img class="brand-dynamic" src="{{asset('front_assets/images/brands/1-hover.png')}}" alt="" />
            </a>
          </div>
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="{{asset('front_assets/images/brands/2.png')}}" alt="" />
              <img class="brand-dynamic" src="{{asset('front_assets/images/brands/2-hover.png')}}" alt="" />
            </a>
          </div>
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="{{asset('front_assets/images/brands/3.png')}}" alt="" />
              <img class="brand-dynamic" src="{{asset('front_assets/images/brands/3-hover.png')}}" alt="" />
            </a>
          </div>
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="{{asset('front_assets/images/brands/4.png')}}" alt="" />
              <img class="brand-dynamic" src="{{asset('front_assets/images/brands/4-hover.png')}}" alt="" />
            </a>
          </div>
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="{{asset('front_assets/images/brands/5.png')}}" alt="" />
              <img class="brand-dynamic" src="{{asset('front_assets/images/brands/5-hover.png')}}" alt="" />
            </a>
          </div>
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="{{asset('front_assets/images/brands/1.png')}}" alt="" />
              <img class="brand-dynamic" src="{{asset('front_assets/images/brands/1-hover.png')}}" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--brands ends-->
@endsection