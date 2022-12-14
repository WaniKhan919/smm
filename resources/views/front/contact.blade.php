@extends('layout.layout')
@section('container')
<!--page-title starts-->
<div class="page-title-area">
  <div class="container">
    <div class="row height-200 align-items-center">
      <div class="col-lg-12">
        <div class="page-title section-title text-center">
          <h1><span>Contact Us</span></h1>
          <div class="site-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--page-title ends-->

<!--contact-us-area start-->
<div class="contact-area mt-100 mt-sm-80 mb-2">
  <div class="container">
    {{-- Success alert --}}

    @if (session()->has('alert'))
    <h4 class="text-center text-success mb-4">{{ session('alert') }}</h4>
    @endif

    {{--  --}}
    <div class="row">
      <div class="col-lg-5">
        <div class="customer-supporter">
          <div class="section-title">
            <h3><span>How can we help you?</span></h3>
          </div>
          <div class="single-supporter mt-35">
            <div class="row">
              <div class="col-md-12">
                <div class="office-address">
                  <h3>Contact</h3>
                  <p><i class="fa fa-telegram" style="color: #fb5c71;">&nbsp</i>@applay24</p>
                  <p><i class="fa fa-envelope" style="color: #fb5c71;">&nbsp</i>applay24.contact@gmail.com</p>
                </div>
              </div>
            </div>
          </div>
          <div class="single-supporter mt-65">
            <div class="row">
              <div class="col-md-12">
                <div class="office-address">
                  <h3>Company</h3>
                  <p><i class="fa-solid fa-building" style="color: #fb5c71;">&nbsp</i>TRENDWIZE MARKETING AND ADVERTISING</p>
                  <p><i class="fa fa-location-dot" style="color: #fb5c71;">&nbsp</i>USA / Japan / Canada / UAE</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 mt-sm-80">
        <div class="contact-form style-2">
          {{-- Contact Form --}}
          <form id="contactForm" method="POST" action="{{ route('user.contact.form') }}">
            @csrf
            <div class="form-group">
              <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name:*" required>
              <span class="text-danger">

                @error('name')
                    
                  {{ $message }}

                @enderror

              </span>
            </div>
            <div class="form-group">
              <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email:*" required>
              <span class="text-danger">

                @error('email')
                    
                  {{ $message }}

                @enderror

              </span>
            </div>
            <div class="form-group">
              <input type="text" name="subject" value="{{ old('subject') }}" class="form-control" placeholder="Subject:*" required>
              <span class="text-danger">

                @error('subject')
                    
                  {{ $message }}

                @enderror

              </span>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" placeholder="Message" required>{{ old('message') }}</textarea>
              <span class="text-danger">

                @error('message')
                    
                  {{ $message }}

                @enderror

              </span>
            </div>
            <button class="btn-common mt-25">Submit</button>
          </form>
          {{--  --}}
        </div>
      </div>
    </div>
  </div>
</div>
<!--contact-us-area end-->

@endsection