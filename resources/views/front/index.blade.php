@extends('layout.layout')
@section('container')
<style>
  .ios-cta-btn {
    background: linear-gradient(90deg,#03baff 0,#55c9ff 42%,#00d4ff 100%);
    box-shadow: 7px 14px 31px -8px rgb(87 202 255 / 66%);
    border: none;
  }

  .ios-cta-btn:hover {
    background: linear-gradient(90deg,#03baff 0,#28b2f3 42%,#04bbe0 100%);
  }

  .android-cta-btn {
    background: linear-gradient(90deg,#60c78a 0,#75cc81 60%,#8cd178 100%);
    box-shadow: 7px 6px 31px -8px #69c986;
    border: none;
  }
  .android-cta-btn:hover {
    background: linear-gradient(90deg,#60c78a 0,#3ecc51 60%,#89c179 100%);
  }
</style>
<!--banner starts-->
<div class="banner-area pt-60 pt-sm-55 pb-100 pb-sm-80">
  <div class="container">
    <div class="row banner-caption align-items-center">
      <div class="col-lg-7 col-md-6">
        <div class="wow fadeInUp">
          <h5>NO.1 APP MARKETING </h5>
        </div>
        <div class="wow fadeInUp" data-wow-delay=".3s">
          <h1><span>Buy App Reviews</span></h1>
        </div>
        <div class="wow fadeInUp" data-wow-delay=".4s">
          <h1 class="mb-20"><span>Buy Installs for</span></h1>
        </div>
        <div class="wow fadeInUp" data-wow-delay=".4s">
          <h1 class="mb-20"><span>IOS & Android</span></h1>
        </div>
        <div class="wow fadeInUp" data-wow-delay=".5s">
          <p>Our iOS, Android, and macOS high professional reviewers will install, rate, and review your app only in a positive manner. Just make your order and see the fantastic results.</p>
        </div>
        <div class="mb-4 d-block d-sm-flex flex-wrap justify-content-sm-between">
          <!-- Desktop -->
          <a href="{{ isset($ios->id) ? route('service', $ios->id) : 'javascript:void(0)' }}" class="btn btn-primary mb-2 d-none d-sm-block btn-lg ios-cta-btn" style="width: 48.5%;"><i class="ti ti-apple"></i> IOS Promotion</a>
          <!-- Mobile -->
          <a href="{{ isset($ios->id) ? route('service', $ios->id) : 'javascript:void(0)' }}" class="btn btn-primary mb-2 w-100 w-sm-auto d-block d-sm-none btn-lg ios-cta-btn" style="width: 48.5%;"><i class="ti ti-apple"></i> IOS Promotion</a>
          <!-- Desktop -->
          <a href="{{ isset($android->id) ? route('service', $android->id) : 'javascript:void(0)' }}" class="btn btn-success mb-2 d-none d-sm-block btn-lg android-cta-btn" style="width: 48.5%;"><i class="ti ti-android"></i> Android Promotion</>
          <!-- Mobile -->
          <a href="{{ isset($android->id) ? route('service', $android->id) : 'javascript:void(0)' }}" class="btn btn-success mb-2 w-100 w-sm-auto d-block d-sm-none btn-lg android-cta-btn" style="width: 48.5%; width: 48.5%;"><i class="ti ti-android"></i> Android Promotion</a>
        </div>
        <div>
          <img src="{{ asset('front_assets/images/banner/android-rating.webp')}}" alt="" style="max-height: 140px; object-fit: contain;">
        </div>
      </div>
      <div class="col-lg-5 col-md-6 py-4 rounded-lg d-none d-md-block" style="background-color: #e1e9fd; border-radius: 30px!important;">
        <div class="banner-image wow fadeIn d-md-flex justify-content-center align-items-center" data-wow-delay=".6s">
          <img src="{{ asset('front_assets/images/banner/main_banner.gif')}}" style="max-width: 250px;" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>
<!--banner ends-->

<style>
  .service-card {
      border: 1px dotted #e7e7e7;
      border-bottom: 3px solid #fb5c71;
      padding: 45px 30px;
  }

  .service-card .icon i {
    background-color: rgba(251, 92, 113, .19);
    border-radius: 5px;
    color: #fb5c71;
    display: inline-block;
    font-size: 28px;
    height: 60px;
    line-height: 60px;
    width: 60px;
    font-weight: bold;
  }
</style>

<!--about starts-->
<div class="about-area pt-97 pt-sm-77 br-top-ebebeb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center mb-45 wow fadeInUp" data-wow-delay=".3s">
          <h2><span>The Best App Marketing Service for you!</span></h2>
          <p class="mt-15">We provide direct installs, keyword installs, App ranking, ratings and reviews, etc. Our main strenght is App optimization for guaranteed ranking!</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3 mb-3">
        <div class="service-card bg-white text-center h-100">
          <div class="icon mb-3">
            <i class="ti ti-download"></i>
          </div>
          <h4>Direct Installs</h4>
          <p>Buy app installs for rapid growth of app downloand counter. App installs can increase organic traffics for your app. Get +10M Installs just in 20 days!</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3 mb-3">
        <div class="service-card bg-white text-center h-100">
          <div class="icon mb-3">
            <i class="ti ti-search"></i>
          </div>
          <h4>Keyword Installs</h4>
          <p>Keyword installs can push your app to Rank No.1 on any keyword you wish. We can service for over 110 countries over the world by each language.</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3 mb-3">
        <div class="service-card bg-white text-center h-100">
          <div class="icon mb-3">
            <i class="ti ti-star"></i>
          </div>
          <h4>Ratings & Reviews</h4>
          <p>App review helps your app increase brand rating and reputation. We are delivering 4/5 Star Ratings and positive Reviews by based on different languages.</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3 mb-3">
        <div class="service-card bg-white text-center h-100">
          <div class="icon mb-3">
            <i class="ti ti-bar-chart"></i>
          </div>
          <h4>Guaranteed Ranking</h4>
          <p>We can make your app rank on Top 1~5 on any keywords just in 2 or 3 weeks. Send us your keyword and App url, we will analyze your app and send you Ranking offer!</p>
        </div>
      </div>
    </div>
    <div class="row mt-90 mt-sm-70 align-items-center">
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="counter-single">
          <i class="ti-user"></i>
          <span class="count1">920</span>
          <h4>Customers</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="counter-single">
          <i class="ti-star"></i>
          <span class="count2">8630</span>
          <h4>App reviewed</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="counter-single">
          <i class="ti-check-box"></i>
          <span class="count3">570</span>
          <h4>Projects Completed </h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="counter-single">
          <i class="ti-crown"></i>
          <span class="count4">325</span>
          <h4>Apps Ranked Top 1~5</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<!--about ends-->

<!--services starts-->
<div class="services-area pt-95 pt-sm-75 pb-45 pb-sm-30">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-title mb-40">
          <h2><span>Features</span></h2>
          <p>Buy Positive App Reviews From Real Users & Boost Your App Ranking </p>
        </div>
        <div class="ds-sm-none">
          <div class="wow fadeIn">
            <img src="{{ asset('front_assets/images/services/people-holding-gold-stars.png')}}" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1">
        <div class="service-single wow fadeInUp mt-05" data-wow-delay=".3s">
          <i class="ti-mobile"></i>
          <div class="service-single-brief">
            <h4><span>Best Prices</span></h4>
            <p>We provide all in one app marketing services. Enjoy the best services at the lowest price.</p>
          </div>
        </div>
        <div class="service-single wow fadeInUp" data-wow-delay=".4s">
          <i class="ti-twitter"></i>
          <div class="service-single-brief">
            <h4><span>Worldwide</span></h4>
            <p>Our app installs, app review, app ranking services are available in 110+ countries. We provide the best app marketing for App store and Google play.</p>
          </div>
        </div>
        <div class="service-single wow fadeInUp" data-wow-delay=".5s">
          <i class="ti-announcement"></i>
          <div class="service-single-brief">
            <h4><span>Safety</span></h4>
            <p>Our services are safe from App store and Google play policies and restrictions. You can enjoy rapid profit growth in Admob as well</p>
          </div>
        </div>
        <div class="service-single wow fadeInUp" data-wow-delay=".6s">
          <i class="ti-desktop"></i>
          <div class="service-single-brief">
            <h4><span>Professional</span></h4>
            <p>We have the professional app marketing support Team. Our ASO specialists will help you to resolve the problems 24/7.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--services ends-->


<!--work process starts-->
<div class="work-process-area bg-1 pt-95 pt-sm-75 pb-100 pb-sm-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h2><span>How it works?</span></h2>
        </div>
      </div>
    </div>
    <div class="row work-process-inner mt-45">
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="process-single wow zoomIn" data-wow-delay=".3s">
          <i class="ti-shopping-cart-full"></i>
          <h4>Service Order</h4>
          <span>01</span>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="process-single wow zoomIn" data-wow-delay=".4s">
          <i class="ti-pencil-alt"></i>
          <h4>Confirm Order</h4>
          <span>02</span>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="process-single wow zoomIn" data-wow-delay=".5s">
          <i class="ti-announcement"></i>
          <h4>Boost your App</h4>
          <span>03</span>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="process-single wow zoomIn" data-wow-delay=".6s">
          <i class="ti-bar-chart"></i>
          <h4>Send Report</h4>
          <span>04</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!--work process ends-->


<!--testimonial starta-->
<div class="testimonial-area bg-f3f8f8 pt-95 pt-sm-75 pb-117 pb-sm-105">
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
          {{-- <img src="{{ asset('front_assets/images/testimonials/2.png')}}" alt="" /> --}}
          <video src="https://cdnl.iconscout.com/lottie/premium/preview-watermark/product-review-5315364-4453017.mp4" autoplay="autoplay" muted="muted" loop="loop" playsinline="" type="video/mp4" style="height: 500px;
          width: 100%;"></video>
        </div>
      </div>
      <div class="col-xl-7">
        <div class="row testimonial-carousel">
          @foreach ($reviews as $list)
            <div class="col-lg-6">
              <div class="testimonial-single">
                <div class="testimonial-info">
                  @if ($list->image_url)
                    <div class="testimonial-thumb">
                      <img src="{{ $list->image_url ? asset('storage/'.$list->image_url): asset('front_assets/images/testimonials/thumb-1.png')}}" alt="" />
                    </div>
                  @endif
                  <div class="testimonial-name">
                    <h5>{{ $list->name ?? '' }}</h5>
                    <span>{{ $list->company ?? '' }}</span>
                  </div>
                </div>
                <div class="testimonial-desc">
                  <h5>{{ $list->title ?? '' }}</h5>
                  <p>"{{ $list->description ?? '' }}”</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
<!--testimonial ends-->
<div class="d-flex position-relative">
  <img src="{{ asset('front_assets/images/chat-bg.gif') }}" class="h-100 w-100 position-absolute" alt="">
  <div class="online-chat-main d-block justify-content-center" style="background: rgba(0, 0, 0, 0.6);">
    <h1 class="text-center">Any Questions for App Marketing?</h1>
    <p class="text-center">You can ask questions right now by online chat.<br> Our ASO Specialists will offer free consultation for app marketing 24/7</p>
    <div class="d-flex justify-content-center">
      <a href="https://direct.lc.chat/13266588/" target="_blank" class="online-chat" style="color: #fb5c71;">Free Consultation</a>
    </div>
  </div>
</div>

<!--blog starts-->
<div class="blog-area pt-95 pt-sm-77 pb-90 pb-sm-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h2><span>Latest Blogs</span></h2>
        </div>
      </div>
    </div>
    <div class="row blog-carousel mt-45">
      @foreach ($blogs as $blog)
        <div class="col-lg-4">
          <div class="blog-single wow fadeIn" data-wow-delay=".3s">
            <div class="blog-thumb" style="width: 360px;height: 243px;">
              <a href="{{ route('blog-detail',$blog->id) }}"><img class="h-100" src="{{ asset('/assets/admin/img/post/'.$blog->img)}}" alt="" /></a>
            </div>
            <div class="blog-desc mt-30">
              <ul class="blog-category">
                <li><a href="{{ route('blog',$blog->category->id) }}">{{ $blog->category->title }}</a></li>
              </ul>
              <h3><a href="{{ route('blog-detail',$blog->id) }}">
                @if (strlen($blog->title) > 57)
                  {{ Str::substr($blog->title, 0, 54) }}...
                @else
                  {{ $blog->title }}
                @endif
              </a></h3>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
<!--blog ends-->
@endsection