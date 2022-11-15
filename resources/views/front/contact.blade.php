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
<div class="contact-area mt-100 mt-sm-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="customer-supporter">
          <div class="section-title">
            <h3><span>How can we help you?</span></h3>
          </div>
          <div class="single-supporter mt-35">
            <div class="row">
              <div class="col-md-5">
                <img src="{{ asset('front_assets/images/contact/1.jpg')}}" alt="" />
              </div>
              <div class="col-md-7">
                <div class="supporter-desc mt-sm-20">
                  <h3>Azure Wilson</h3>
                  <p>Customer Realations</p>
                  <p>963.806.0919</p>
                  <p>AzureWilson@consulting.com</p>
                </div>
              </div>
            </div>
          </div>
          <div class="single-supporter mt-65">
            <div class="row">
              <div class="col-md-5">
                <img src="{{ asset('front_assets/images/contact/2.jpg')}}" alt="" />
              </div>
              <div class="col-md-7">
                <div class="supporter-desc mt-sm-20">
                  <h3>Keith Wilson</h3>
                  <p>Customer Support</p>
                  <p>963.806.0919</p>
                  <p>KeithWilson@consulting.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 mt-sm-80">
        <div class="contact-form style-2">
          <form id="contactForm" method="POST" action="https://formspree.io/lionsbite69@gmail.com">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Name:*" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email:*" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject:*" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" placeholder="Message" required></textarea>
            </div>
            <button class="btn-common mt-25">Submit Now</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--contact-us-area end-->

<!--google-map area start-->
<div class="google-map-area mt-100 mt-sm-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div id="googleMap" class="google-map"></div>
      </div>
    </div>
  </div>
</div>
<!--google-map area end-->

<!--office-address-area start-->
<div class="office-address-area mt-90 mt-sm-70">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="office-address">
          <h3>France</h3>
          <p>40 Baria Sreet 133/2 NewYork City, US</p>
          <p>Email: info.contact@gmail.com</p>
          <p>Phone: 123-456-7890</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="office-address">
          <h3>United States</h3>
          <p>40 Baria Sreet 133/2 NewYork City, US</p>
          <p>Email: info.contact@gmail.com</p>
          <p>Phone: 123-456-7890</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="office-address">
          <h3>Viet Nam</h3>
          <p>40 Baria Sreet 133/2 NewYork City, US</p>
          <p>Email: info.contact@gmail.com</p>
          <p>Phone: 123-456-7890</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--office-address-area end-->

<!--brands starts-->
<div class="brands-area bg-f3f8f8 mt-75 mt-sm-55">
  <div class="container">
    <div class="row height-160 align-items-center">
      <div class="col-lg-12">
        <div class="brands-carousel">
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="{{ asset('front_assets/images/brands/1.png')}}" alt="" />
              <img class="brand-dynamic" src="{{ asset('front_assets/images/brands/1-hover.png')}}" alt="" />
            </a>
          </div>
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="{{ asset('front_assets/images/brands/2.png')}}" alt="" />
              <img class="brand-dynamic" src="{{ asset('front_assets/images/brands/2-hover.png')}}" alt="" />
            </a>
          </div>
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="{{ asset('front_assets/images/brands/3.png')}}" alt="" />
              <img class="brand-dynamic" src="{{ asset('front_assets/images/brands/3-hover.png')}}" alt="" />
            </a>
          </div>
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="{{ asset('front_assets/images/brands/4.png')}}" alt="" />
              <img class="brand-dynamic" src="{{ asset('front_assets/images/brands/4-hover.png')}}" alt="" />
            </a>
          </div>
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="{{ asset('front_assets/images/brands/5.png')}}" alt="" />
              <img class="brand-dynamic" src="{{ asset('front_assets/images/brands/5-hover.png')}}" alt="" />
            </a>
          </div>
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="{{ asset('front_assets/images/brands/1.png')}}" alt="" />
              <img class="brand-dynamic" src="{{ asset('front_assets/images/brands/1-hover.png')}}" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--brands ends-->
@endsection