@extends('layout.layout')
@section('container')

<!--page-title starts-->
<div class="page-title-area">
  <div class="container">
    <div class="row height-200 align-items-center">
      <div class="col-lg-12">
        <div class="page-title section-title text-center">
          <h1><span>About Us</span></h1>
          <div class="site-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
<div class="about-area pt-95 pt-sm-77">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-title mb-50">
          <h2><span>Hello, Welcome We are  </span></h2>
          <h2><span>{{ env('APP_NAME','ADMK') }}!</span></h2>
          <p class="mt-15">{{ env('APP_NAME','ADMK') }} was founded and developed with the core mission: “Helping your apps to be in the Top apps in the Google Play Store, App Store, and macOS App Store, helping your apps increase revenue sharply and became the most favorite apps”. Proreviewsapp always wants to help each customer achieve their business goals by enhancing their competitive advantage, increasing the ability of potential customers to find Apps and brands on the App Stores.

            In addition, Proreviewsapp has a cross-cutting mission for fellow teammates: “Create the best environment for each member to constantly improve and lead themselves. Besides, every day coming to Proreviewsapp is full of fun at work. And always be happy on the path of pursuing your own aspirations and the meaning of life that Proreviewsapp-er is aiming for.”</p>
        </div>
        <div class="service-single style-2 wow fadeInUp" data-wow-delay=".3s">
          <i class="ti-stats-up"></i>
          <div class="service-single-brief">
            <h4><span>Be a Master of Our Craft</span></h4>
            <p>Proreviewsapp is constantly improving what we are doing.</p>
          </div>
        </div>
        <div class="service-single style-2 wow fadeInUp" data-wow-delay=".4s">
          <i class="ti-twitter"></i>
          <div class="service-single-brief">
            <h4><span>Growth with The Infinitive Mindset</span></h4>
            <p>Proreviewsapp is not a team with a short-term results mindset. </p>
          </div>
        </div>
        <div class="service-single style-2 wow fadeInUp" data-wow-delay=".5s">
          <i class="ti-desktop"></i>
          <div class="service-single-brief">
            <h4><span>Do things with fullest</span></h4>
            <p>Proreviewsapp does everything with its heart, mind, and soul. Not only creating excellent results.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ds-sm-none wow zoomIn">
          <img src="{{asset('front_assets/images/about/3.png')}}" alt="" />
        </div>
      </div>
    </div>
    <div class="row mt-65 mt-sm-45">
      <div class="col-lg-3 col-sm-6">
        <div class="counter-single style-2 bg-d4f4f4 wow fadeInUp" data-wow-delay=".3s">
          <i class="ti-heart-broken"></i>
          <span class="count1">920</span>
          <h4>Customers</h4>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="counter-single style-2 bg-fbe7ea wow fadeInUp" data-wow-delay=".4s">
          <i class="ti-check-box"></i>
          <span class="count3">570</span>
          <h4>Projects Completed </h4>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="counter-single style-2 bg-e3f8d8 wow fadeInUp" data-wow-delay=".5s">
          <i class="ti-bar-chart"></i>
          <span class="count2">8630</span>
          <h4>Keywords Rank</h4>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="counter-single style-2 bg-f5efd8 wow fadeInUp" data-wow-delay=".6s">
          <i class="ti-crown"></i>
          <span class="count4">40</span>
          <span>+</span>
          <h4>Awards Win</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<!--about ends-->

<!--history-start-->
<div class="history-area pt-65 pt-sm-47 pb-80 pb-sm-55">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h2><span>How does it work?</span></h2>
        </div>
      </div>
    </div>
    <div class="row mt-45">
      <div class="col-lg-12">
        <div class="the-history">
          <ul>
            <li>
              <div class="history-start pr-45 text-right wow fadeInUp" data-wow-delay=".3s">
                <h4>10 Days Assurance</h4>
              </div>
              <div class="history-year wow zoomIn" data-wow-delay=".4s">
                <h2>1</h2>
              </div>
              <div class="history-brief pl-45 wow fadeInUp" data-wow-delay=".5s">
                <h3>Select the service package that you need</h3>
                <p>Please, send us your app link, the details request and the service package that you want.</p>
              </div>
            </li>
            <li>
              <div class="history-brief pr-50 text-right wow fadeInLeft" data-wow-delay=".6s">
                <h3>Reviews and ranking</h3>
                <p>Our users will search for your app then they download and install it. After they use it, they will rate it 5 star rating with a positive reviews.</p>
              </div>
              <div class="history-year wow zoomIn" data-wow-delay=".7s">
                <h2>2</h2>
              </div>
              <div class="history-start pl-50 wow fadeInRight" data-wow-delay=".8s">
                <h4>Quick Start</h4>
              </div>
            </li>
            <li>
              <div class="history-start pr-50 text-right wow fadeInUp" data-wow-delay=".9s">
                <h4>Real Users</h4>
              </div>
              <div class="history-year wow zoomIn" data-wow-delay="1s">
                <h2>3</h2>
              </div>
              <div class="history-brief pl-50 wow fadeInUp" data-wow-delay="1.1s">
                <h3>Reviews and rating</h3>
                <p>As a result, your app will improve app ranking and more and more users use it. Your app become of popular on App store and Google Play..</p>
              </div>
            </li>
            <li>
              <div class="history-brief text-right pr-50 wow fadeInLeft" data-wow-delay="1.2s">
                <h3>Get the result</h3>
                <p>When your app has high rankings and has many positive reviews, your app become more reputation and attention from users.</p>
              </div>
              <div class="history-year wow zoomIn" data-wow-delay="1.3s">
                <h2>4</h2>
              </div>
              <div class="history-start pl-50 wow fadeInRight" data-wow-delay="1.4s">
                <h4>Get detailed reports</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--history-end-->

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

<!--testimonial starta-->
<div class="testimonial-area pt-95 pt-sm-77 pb-115">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h2><span>What Clients Say?</span></h2>
        </div>
      </div>
    </div>
    <div class="row mt-50">
      <div class="col-xl-5">
        <div class="ds-sm-none wow fadeIn">
          <img src="{{asset('front_assets/images/testimonials/1.png')}}" alt="" />
        </div>
      </div>
      <div class="col-xl-7">
        <div class="row testimonial-carousel">
          <div class="col-lg-6">
            <div class="testimonial-single">
              <div class="testimonial-info">
                <div class="testimonial-thumb">
                  <img src="{{asset('front_assets/images/testimonials/thumb-1.png')}}" alt="" />
                </div>
                <div class="testimonial-name">
                  <h5>Essie Rice</h5>
                  <span>CEO deercreative</span>
                </div>
              </div>
              <div class="testimonial-desc">
                <p>"Your continued support and aggressive technology have convinced me that signing another optimization
                  contract with {{ env('APP_NAME', 'ADMK') }}, Inc. is the best approach in maintaining our edge over the competition”</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial-single">
              <div class="testimonial-info">
                <div class="testimonial-thumb">
                  <img src="{{asset('front_assets/images/testimonials/thumb-2.png')}}" alt="" />
                </div>
                <div class="testimonial-name">
                  <h5>Flora Cummings</h5>
                  <span>CEO LionsBite</span>
                </div>
              </div>
              <div class="testimonial-desc">
                <p>"Your continued support and aggressive technology have convinced me that signing another optimization
                  contract with {{ env('APP_NAME', 'ADMK') }}, Inc. is the best approach in maintaining our edge over the competition”</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial-single">
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
                  contract with {{ env('APP_NAME', 'ADMK') }}, Inc. is the best approach in maintaining our edge over the competition”</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--testimonial ends-->

@endsection