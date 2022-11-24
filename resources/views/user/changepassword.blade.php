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
              <h5>Change Password</h5>
              <form action="{{ route('user-update-password') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="input-group mb-2">
                  <span class="input-group-text">Current Password</span>
                  <input type="password" aria-label="First name" class="form-control" name="current_password">
                </div>
                @error('current_password')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="input-group mb-2">
                  <span class="input-group-text">New Password</span>
                  <input type="password" aria-label="First name" class="form-control" name="password">
                </div>
                @error('password')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="input-group mb-2">
                  <span class="input-group-text">Confirm Password</span>
                  <input type="password" aria-label="First name" class="form-control" name="password_confirmation">
                </div>
                @error('password_confirmation')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="input-group mb-2">
                  <button class="btn-common">Change</button>
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