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
          <h2><span>SEO Agency of The Year </span></h2>
          <h2><span>Finalist</span></h2>
          <p class="mt-15">We are offering customize top ranking solutions with impactful web unravelment. Our
            result-oriented approach in SEO services will take your business to the new horizon. Strategize and plan the
            streamlining of your website with MSG and get the desired results.</p>
        </div>
        <div class="service-single style-2 wow fadeInUp" data-wow-delay=".3s">
          <i class="ti-stats-up"></i>
          <div class="service-single-brief">
            <h4><span>Increased Traffic</span></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utsa.</p>
          </div>
        </div>
        <div class="service-single style-2 wow fadeInUp" data-wow-delay=".4s">
          <i class="ti-twitter"></i>
          <div class="service-single-brief">
            <h4><span>Cost-effectiveness</span></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utsa.</p>
          </div>
        </div>
        <div class="service-single style-2 wow fadeInUp" data-wow-delay=".5s">
          <i class="ti-desktop"></i>
          <div class="service-single-brief">
            <h4><span>Increased site usability</span></h4>
            <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est
              laborum.</p>
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
          <h2><span>The Story Of Aseona</span></h2>
        </div>
      </div>
    </div>
    <div class="row mt-45">
      <div class="col-lg-12">
        <div class="the-history">
          <ul>
            <li>
              <div class="history-start pr-45 text-right wow fadeInUp" data-wow-delay=".3s">
                <h4>February, 2008</h4>
              </div>
              <div class="history-year wow zoomIn" data-wow-delay=".4s">
                <h2>2008</h2>
              </div>
              <div class="history-brief pl-45 wow fadeInUp" data-wow-delay=".5s">
                <h3>Annual Award for SEO Excellence</h3>
                <p>Literature admiration frequently indulgence announcing are who you her. Was least quick after six. So
                  it yourself repeated together cheerful.</p>
              </div>
            </li>
            <li>
              <div class="history-brief pr-50 text-right wow fadeInLeft" data-wow-delay=".6s">
                <h3>Annual Award for SEO Excellence</h3>
                <p>Literature admiration frequently indulgence announcing are who you her. Was least quick after six. So
                  it yourself repeated together cheerful.</p>
              </div>
              <div class="history-year wow zoomIn" data-wow-delay=".7s">
                <h2>2011</h2>
              </div>
              <div class="history-start pl-50 wow fadeInRight" data-wow-delay=".8s">
                <h4>January, 2008</h4>
              </div>
            </li>
            <li>
              <div class="history-start pr-50 text-right wow fadeInUp" data-wow-delay=".9s">
                <h4>August, 2008</h4>
              </div>
              <div class="history-year wow zoomIn" data-wow-delay="1s">
                <h2>2014</h2>
              </div>
              <div class="history-brief pl-50 wow fadeInUp" data-wow-delay="1.1s">
                <h3>Entrepreneurship Hall of Fame</h3>
                <p>Literature admiration frequently indulgence announcing are who you her. Was least quick after six. So
                  it yourself repeated together cheerful.</p>
              </div>
            </li>
            <li>
              <div class="history-brief text-right pr-50 wow fadeInLeft" data-wow-delay="1.2s">
                <h3>Entrepreneurship Hall of Fame</h3>
                <p>Literature admiration frequently indulgence announcing are who you her. Was least quick after six. So
                  it yourself repeated together cheerful.</p>
              </div>
              <div class="history-year wow zoomIn" data-wow-delay="1.3s">
                <h2>2018</h2>
              </div>
              <div class="history-start pl-50 wow fadeInRight" data-wow-delay="1.4s">
                <h4>May, 2018</h4>
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
                  contract with Aseona, Inc. is the best approach in maintaining our edge over the competition”</p>
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
                  contract with Aseona, Inc. is the best approach in maintaining our edge over the competition”</p>
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
                  contract with Aseona, Inc. is the best approach in maintaining our edge over the competition”</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--testimonial ends-->

<!--team start-->
<div class="team-area bg-f3f8f8 pt-95 pt-sm-77 pb-70 pb-sm-50">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h2><span>Our Team</span></h2>
        </div>
      </div>
    </div>
    <div class="row team-carousel mt-43">
      <div class="col-lg-4">
        <div class="team-single wow fadeInDown" data-wow-delay=".3s">
          <div class="team-thumb">
            <img src="{{asset('front_assets/images/team/1.png')}}" alt="" />
            <div class="social-icons style-2">
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-instagram"></a>
              <a href="#" class="fa fa-facebook"></a>
            </div>
          </div>
          <div class="team-bio">
            <h4>Bess Weaver</h4>
            <h5>SEO Expert</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="team-single wow fadeInUp" data-wow-delay=".3s">
          <div class="team-thumb">
            <img src="{{asset('front_assets/images/team/2.png')}}" alt="" />
            <div class="social-icons style-2">
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-instagram"></a>
              <a href="#" class="fa fa-facebook"></a>
            </div>
          </div>
          <div class="team-bio">
            <h4>Ralph Simmons</h4>
            <h5>Marketing Expert</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="team-single wow fadeInDown" data-wow-delay=".3s">
          <div class="team-thumb">
            <img src="{{asset('front_assets/images/team/3.png')}}" alt="" />
            <div class="social-icons style-2">
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-instagram"></a>
              <a href="#" class="fa fa-facebook"></a>
            </div>
          </div>
          <div class="team-bio">
            <h4>Craig Coleman</h4>
            <h5>Graphic Designer</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="team-single">
          <div class="team-thumb">
            <img src="{{asset('front_assets/images/team/1.png')}}" alt="" />
            <div class="social-icons style-2">
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-instagram"></a>
              <a href="#" class="fa fa-facebook"></a>
            </div>
          </div>
          <div class="team-bio">
            <h4>Bess Weaver</h4>
            <h5>SEO Expert</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--team end-->

<!--call-to-action start-->
<div class="cta-area mt-sm-80 mb-sm-80">
  <div class="container">
    <div class="row height-470 align-items-center">
      <div class="col-lg-6 col-md-6 text-center">
        <div class="wow rollIn" data-wow-delay=".3s">
          <img src="{{asset('front_assets/images/cta/1.png')}}" alt="" />
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="section-title mt-sm-40">
          <div class="wow fadeInUp" data-wow-delay=".3s">
            <h2><span>We’re Hiring!</span></h2>
          </div>
          <div class="wow fadeInUp" data-wow-delay=".4s">
            <p class="mt-20">We are always looking to hire the right talent to <br /> help us grow</p>
          </div>
          <div class="wow fadeInUp" data-wow-delay=".5s">
            <a href="#" class="btn-common btn-pink radius-50 mt-35">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--call-to-action end-->

@endsection