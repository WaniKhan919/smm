@extends('layout.layout')
@section('container')
<div class="mm-page mm-slideout" id="mm-0">
  <div class="checkout-area pt-100 pt-sm-80 pb-85 pb-sm-80">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="returning-customer">
            <p>Already have an account ? <a href="{{ route('login') }}">Click here</a> to login</p>
          </div>
        </div>
      </div>
      <div class="row mt-70 justify-content-center">
        <div class="col-lg-8">
          <div class="cart-total order-place mt-sm-50 checkout-form">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-title">
                  <h3><span>Register</span></h3>
                </div>
              </div>
            </div>
            <form action="{{ route('user.register') }}" method="POST">
              @csrf
              <div class="row mt-25">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="first-name">First Name*</label>
                    <div class="form-group">
                      <input type="text" class="form-control" id="first-name" name="name" value="{{ old('name') }}">
                      @error('name')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="last-name">Last Name*</label>
                    <div class="form-group">
                      <input type="text" class="form-control" id="last-name" name="lastname" value="{{ old('lastname') }}">
                      @error('lastname')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="email">Email*</label>
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                      @error('email')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="address">Phone*</label>
                    <div class="form-group">
                      <input type="text" class="form-control" id="address" name="phone" value="{{ old('phone') }}">
                      @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="town">Password</label>
                    <div class="form-group">
                      <input type="password" class="form-control" id="town" name="password">
                      @error('password')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="state">Confirm Password</label>
                    <div class="form-group">
                      <input type="password" class="form-control" id="state" name="password_confirmation">
                      @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn-common">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection