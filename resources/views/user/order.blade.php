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
              <h5>Your Orders</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $order)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{  $order->name }}</td>
                      <td>{{  $order->stripe_price }}</td>
                      <td>{{ $order->status }}</td>
                    </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection