@extends('layout.layout')
@section('container')


<!--page-title starts-->
<div class="page-title-area">
  <div class="container">
    <div class="row height-200 align-items-center">
      <div class="col-lg-12">
        <div class="page-title section-title text-center">
          <h1><span>Our Services</span></h1>
          <div class="site-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our Services</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--page-title ends-->

<!--about starts-->
<div class="about-area pt-100 pt-sm-77 pb-70 pb-sm-50">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-title mb-40">
          <h2><span>Welcome to Aseona</span></h2><br />
          <h2><span>Digital Marketing</span></h2>
          <p>Having worked with hundreds of companies from small businesses to Fortune 1000’s, we understand your pain
            points. We also understand we aren’t the right agency for every business. We want to work with businesses
            that want a partner, not a doer.</p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="service-single style-2 wow fadeInUp" data-wow-delay=".3s">
              <i class="ti-pencil-alt"></i>
              <div class="service-single-brief">
                <h4><span>Clean Designs</span></h4>
                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est
                  laborum. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="service-single style-2 wow fadeInUp" data-wow-delay=".4s">
              <i class="ti-settings"></i>
              <div class="service-single-brief">
                <h4><span>Amazing Features</span></h4>
                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est
                  laborum. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <a href="#" class="btn-common mt-15 btn-pink radius-50 wow fadeInUp" data-wow-delay=".5s">About Us</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row mt-sm-80">
          <div class="col-lg-6 col-sm-6">
            <div class="counter-single style-2 bg-d4f4f4 wow fadeIn" data-wow-delay=".3s">
              <i class="ti-heart-broken"></i>
              <span class="count1">920</span>
              <h4>Customers</h4>
            </div>
            <div class="counter-single style-2 bg-fbe7ea wow fadeIn mt-30" data-wow-delay=".4s">
              <i class="ti-check-box"></i>
              <span class="count3">570</span>
              <h4>Projects Completed </h4>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="counter-single style-2 bg-e3f8d8 mt-30 mt-sm-0 wow fadeIn" data-wow-delay=".5s">
              <i class="ti-bar-chart"></i>
              <span class="count2">8630</span>
              <h4>Keywords Rank</h4>
            </div>
            <div class="counter-single style-2 bg-f5efd8 mt-30 wow fadeIn" data-wow-delay=".6s">
              <i class="ti-crown"></i>
              <span class="count4">40</span>
              <span>+</span>
              <h4>Awards Win</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--about ends-->

<!--services starts-->
<div class="services-area bg-f3f8f8 pt-100 pt-sm-80 pb-77 pb-sm-57">
  <div class="container z-index">
    <div class="row align-items-center">
      <div class="col-lg-4 col-sm-12">
        <div class="section-title">
          <h2><span>Let’s Check</span></h2>
          <h2><span>Our Services</span></h2>
        </div>
        <div class="service-single style-3 style-5 mt-85 mt-sm-45 wow zoomIn" data-wow-delay=".3s">
          <i class="ti-pie-chart"></i>
          <div class="service-single-brief">
            <h4><span>Google Analytics</span></h4>
            <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est
              laborum. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="service-single style-3 style-5 mt-50 mt-sm-0 wow zoomIn" data-wow-delay=".4s">
          <i class="ti-announcement"></i>
          <div class="service-single-brief">
            <h4><span>SEO Services</span></h4>
            <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est
              laborum. </p>
          </div>
        </div>
        <div class="service-single style-3 style-5 mt-30 wow zoomIn" data-wow-delay=".5s">
          <i class="ti-desktop"></i>
          <div class="service-single-brief">
            <h4><span>Web Development</span></h4>
            <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est
              laborum. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="service-single style-3 style-5 wow zoomIn" data-wow-delay=".6s">
          <i class="ti-camera"></i>
          <div class="service-single-brief">
            <h4><span>Social Media</span></h4>
            <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est
              laborum. </p>
          </div>
        </div>
        <div class="service-single style-3 style-5 mt-30 wow zoomIn" data-wow-delay=".7s">
          <i class="ti-pencil-alt"></i>
          <div class="service-single-brief">
            <h4><span>Content Marketing</span></h4>
            <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est
              laborum. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--services ends-->

<!--case-studies start-->
<div class="care-sudies-area pt-95 pt-sm-77 pb-122 pb-sm-103">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h2><span>Our Case Studies</span></h2>
        </div>
      </div>
    </div>
    <div class="row case-carousel mt-45">
      <div class="col-lg-4">
        <div class="blog-single style-2">
          <div class="blog-thumb">
            <a href="blog-details.html"><img src="{{asset('front_assets/images/blog/1.jpg')}}" alt="" /></a>
          </div>
          <div class="blog-desc">
            <ul class="blog-category">
              <li><a href="#">SEO,</a></li>
              <li><a href="#">Web Development</a></li>
            </ul>
            <h3><a href="#">How Rose Generated 230% Revenue</a></h3>
          </div>
          <a href="#" class="enter-arrow"><i class="ti-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog-single style-2">
          <div class="blog-thumb">
            <a href="blog-details.html"><img src="{{asset('front_assets/images/blog/2.jpg')}}" alt="" /></a>
          </div>
          <div class="blog-desc">
            <ul class="blog-category">
              <li><a href="#">Marketing,</a></li>
              <li><a href="#">SEO</a></li>
            </ul>
            <h3><a href="#">How Integriti Bathrooms Achieved 253% Traffic</a></h3>
          </div>
          <a href="#" class="enter-arrow"><i class="ti-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog-single style-2">
          <div class="blog-thumb">
            <a href="blog-details.html"><img src="{{asset('front_assets/images/blog/3.jpg')}}" alt="" /></a>
          </div>
          <div class="blog-desc">
            <ul class="blog-category">
              <li><a href="#">Marketing,</a></li>
              <li><a href="#">SEO</a></li>
            </ul>
            <h3><a href="#">How QualityD Achieved 190% Conversions</a></h3>
          </div>
          <a href="#" class="enter-arrow"><i class="ti-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog-single style-2">
          <div class="blog-thumb">
            <a href="blog-details.html"><img src="{{asset('front_assets/images/blog/1.jpg')}}" alt="" /></a>
          </div>
          <div class="blog-desc">
            <ul class="blog-category">
              <li><a href="#">SEO,</a></li>
              <li><a href="#">Web Development</a></li>
            </ul>
            <h3><a href="#">How Archie Generated 230% More Revenue</a></h3>
          </div>
          <a href="#" class="enter-arrow"><i class="ti-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--case-studies end-->

<!--work process starts-->
<div class="work-process-area bg-1 pb-100 pb-sm-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h2><span>Our Work Process</span></h2>
        </div>
      </div>
    </div>
    <div class="row work-process-inner mt-45">
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="process-single wow zoomIn" data-wow-delay=".3s">
          <i class="ti-zoom-in"></i>
          <h4>Research</h4>
          <span>01</span>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="process-single wow zoomIn" data-wow-delay=".4s">
          <i class="ti-pencil-alt"></i>
          <h4>Concept</h4>
          <span>02</span>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="process-single wow zoomIn" data-wow-delay=".5s">
          <i class="ti-announcement"></i>
          <h4>Develop</h4>
          <span>03</span>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="process-single wow zoomIn" data-wow-delay=".6s">
          <i class="ti-bar-chart"></i>
          <h4>Test</h4>
          <span>04</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!--work process ends-->

<!--testimonial and records start-->
<div class="testimonial-and-records pt-100 pt-sm-78 pb-100 pb-sm-75">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-title mb-50">
          <h2><span>What Clients Say?</span></h2>
        </div>
        <div class="testimonial-carousel-2">
          <div class="testimonial-single style-2">
            <div class="testimonial-info">
              <div class="testimonial-thumb">
                <img src="{{asset('front_assets/images/testimonials/thumb-1.png')}}" alt="" />
              </div>
              <div class="testimonial-name">
                <h5>Essie Rice</h5>
                <span>Larry Page</span>
              </div>
            </div>
            <div class="testimonial-desc">
              <p>"Your continued support and aggressive technology have convinced me that signing another optimization
                contract with Aseona, Inc. is the best approach in maintaining our edge over the competition”</p>
            </div>
          </div>
          <div class="testimonial-single style-2">
            <div class="testimonial-info">
              <div class="testimonial-thumb">
                <img src="{{asset('front_assets/images/testimonials/thumb-2.png')}}" alt="" />
              </div>
              <div class="testimonial-name">
                <h5>Essie Rice</h5>
                <span>Larry Page</span>
              </div>
            </div>
            <div class="testimonial-desc">
              <p>"Your continued support and aggressive technology have convinced me that signing another optimization
                contract with Aseona, Inc. is the best approach in maintaining our edge over the competition”</p>
            </div>
          </div>
          <div class="testimonial-single style-2">
            <div class="testimonial-info">
              <div class="testimonial-thumb">
                <img src="{{asset('front_assets/images/testimonials/thumb-1.png')}}" alt="" />
              </div>
              <div class="testimonial-name">
                <h5>Essie Rice</h5>
                <span>Larry Page</span>
              </div>
            </div>
            <div class="testimonial-desc">
              <p>"Your continued support and aggressive technology have convinced me that signing another optimization
                contract with Aseona, Inc. is the best approach in maintaining our edge over the competition”</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ds-sm-none wow fadeIn" data-wow-delay=".3s">
          <img src="{{asset('front_assets/images/testimonials/1.png')}}" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>
<!--testimonial and records end-->

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