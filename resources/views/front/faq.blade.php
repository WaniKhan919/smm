@extends('layout.layout')
@section('container')
<!--page-title starts-->
<div class="page-title-area">
  <div class="container">
    <div class="row height-200 align-items-center">
      <div class="col-lg-12">
        <div class="page-title section-title text-center">
          <h1><span>FAQs</span></h1>
          <div class="site-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--page-title ends-->

<!--faq-area start-->
<div class="faw-area pt-95 pt-sm-77 pb-75">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h3><span>Frequently Asked Questions</span></h3>
        </div>
      </div>
    </div>
    <div class="row bb-ebeb pb-55 mt-40">
      <div class="col-lg-12">
        <div id="accordion">
          <!--faq-single-->
          @foreach ($faqs as $faq)
            <div class="card single-faq">
              <div class="card-header faq-heading" id="heading{{ $faq->id }}">
                <h5 class="mb-0">
                  <a href="#collapse{{ $faq->id }}" class="btn btn-link" data-toggle="collapse" aria-expanded="true"
                    aria-controls="collapse{{ $faq->id }}">
                    {{ $faq->question }}
                    <i class="fa fa-plus pull-right" aria-hidden="true"></i>
                    <i class="fa fa-minus pull-right" aria-hidden="true"></i>
                  </a>
                </h5>
              </div>
              <div id="collapse{{ $faq->id }}" class="collapse {{ $loop->iteration==1 ? 'show':'' }}" aria-labelledby="heading{{ $faq->id }}" data-parent="#accordion">
                <div class="card-body">
                  <p>{{ $faq->answer }}</p>
                </div>
              </div>
            </div>
          @endforeach
          <!--faq-single-->
        </div>
      </div>
    </div>
  </div>
</div>
<!--faq-area end-->

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