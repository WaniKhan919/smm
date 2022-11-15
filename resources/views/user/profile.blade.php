@extends('layout.layout')
@section('container')
<div class="mm-page mm-slideout" id="mm-0">
  <div class="blog-area pt-100 pt-sm-80 pb-100 pb-sm-80">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          @include('user.sidebar')
        </div>
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5>My Profile</h5>
              <form action="">
                <div class="input-group mb-2">
                  <span class="input-group-text">First Name</span>
                  <input type="text" aria-label="First name" class="form-control" value="{{ auth('web')->user()->name }}">
                </div>
                <div class="input-group mb-2">
                  <span class="input-group-text">Last Name</span>
                  <input type="text" aria-label="First name" class="form-control" value="{{ auth('web')->user()->lastname }}">
                </div>
                <div class="input-group mb-2">
                  <span class="input-group-text">Email</span>
                  <input type="email" aria-label="First name" class="form-control" value="{{ auth('web')->user()->email }}">
                </div>
                <div class="input-group mb-2">
                  <span class="input-group-text">Phone</span>
                  <input type="text" aria-label="First name" class="form-control" value="{{ auth('web')->user()->phone }}">
                </div>
                <div class="input-group mb-2">
                  <button class="btn-common">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection