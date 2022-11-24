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
          @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
              {{ session()->get('success') }}
            </div>
          @endif
          @if (session()->has('error'))
            <div class="alert alert-danger" role="alert">
              {{ session()->get('error') }}
            </div>
          @endif
          <div class="card">
            <div class="card-body">
              <h5>My Profile</h5>
              <form action="{{ route('update.user.profile') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="input-group mb-2">
                  <span class="input-group-text">First Name</span>
                  <input type="text" aria-label="First name" class="form-control" name="name" value="{{ auth('web')->user()->name }}">
                </div>
                @error('name')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="input-group mb-2">
                  <span class="input-group-text">Last Name</span>
                  <input type="text" aria-label="First name" class="form-control"  name="lastname" value="{{ auth('web')->user()->lastname }}">
                </div>
                @error('lastname')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="input-group mb-2">
                  <span class="input-group-text">Email</span>
                  <input type="email" aria-label="First name" class="form-control"  name="email" value="{{ auth('web')->user()->email }}">
                </div>
                @error('email')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="input-group mb-2">
                  <span class="input-group-text">Phone</span>
                  <input type="text" aria-label="First name" class="form-control" name="phone" value="{{ auth('web')->user()->phone }}">
                </div>
                @error('phone')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
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