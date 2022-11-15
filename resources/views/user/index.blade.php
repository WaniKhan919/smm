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
              <h5>Welcome To Dashboard</h5>
              <ul class="list-group">
                <li class="list-group-item">First Name : {{ auth('web')->user()->name; }}</li>
                <li class="list-group-item">Last Name :  {{ auth('web')->user()->lastname; }}</li>
                <li class="list-group-item">Email :  {{ auth('web')->user()->email; }}</li>
                <li class="list-group-item">Mobile : {{ auth('web')->user()->phone; }} </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection