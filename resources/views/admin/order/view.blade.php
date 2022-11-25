@extends('admin.layouts.app')

@push('title')

Admin | Orders Detail

@endpush

@section('main-content')

<div id="main">


    <div class="pagetitle">
        <h1>Order</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Order</li>
            </ol>
        </nav>
    </div>

    <div class="section">

        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title">Order Detail</h5>
                        </div>
        
                      <!-- Default Table -->
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="card h-100">
                          <div class="card-body">
                            <h5 class="card-title">Pakage Detail</h5>
                            <div>
                              <p class="h5">Pakage : <span class="h6">{{ $package->title }}</span> </p>  </p>
                              <p class="h5">Price :  <span class="h6">{{ $package->price }}</span> </p> 
                              <p class="h5">Sale Price :  <span class="h6">{{ $package->sale_price }}</span> </p> 
                              <p class="h4">Features</p>
                              <ul class="list-group">
                                @foreach (json_decode($package->features) as $feature)
                                  <li class="list-group-item">{{ $feature }}</li>
                                @endforeach
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card h-100">
                          <div class="card-body">
                            <h5 class="card-title">Stripe Detail</h5>
                            <div>
                              <p class="h5">Stripe Id :  <span class="h6">{{ $order->stripe_id ?? ''}}</span> </p> 
                              <p class="h5">Stripe Status :  <span class="h6">{{ $order->stripe_status ?? ''}}</span> </p> 
                              <p class="h5">Price :  <span class="h6">{{ $order->stripe_price ?? ''}}</span> </p> 
                              <p class="h5">URL :  <span class="h6">{{ $order->url ?? ''}}</span> </p> 
                              <p class="h5">Daily Speed :  <span class="h6">{{ $order->daily_speed ?? '' }}</span> </p> 
                              <p class="h5">Keyword :  <span class="h6">{{ $order->keyword ?? '' }}</span> </p> 
                              <p class="h5">Country :  <span class="h6">{{ $order->country ?? ''}}</span> </p> 
                              <p class="h5">Status :  <span class="h6">{{ $order->status ?? ''}}</span> </p> 
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card h-100">
                          <div class="card-body">
                            <h5 class="card-title">User Detail</h5>
                            <div>
                              <p class="h5">User Name :  <span class="h6">{{ $order->name }}</span> </p> 
                              <p class="h5">Email :  <span class="h6">{{ $user->email }}</span> </p> 
                              <p class="h5">Phone :  <span class="h6">{{ $user->phone }}</span> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <!-- End Default Table Example -->
                    </div>
                  </div>

            </div>

        </div>

    </div>

</div>

@endsection