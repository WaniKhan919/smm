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
                  <h3>Address</h3>
                  <p>I8 Markaz Islamabad</p>
                  <p>Email: contact@gmail.com</p>
                  <p>Phone: 123-456-7890</p>
                </div>
              </div>
            </div>
          </div>
          <div class="single-supporter mt-65">
            <div class="row">
              <div class="col-md-12">
                <div class="office-address">
                  <h3>Address</h3>
                  <p>I8 Markaz Islamabad</p>
                  <p>Email: contact@gmail.com</p>
                  <p>Phone: 123-456-7890</p>
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

@endsection