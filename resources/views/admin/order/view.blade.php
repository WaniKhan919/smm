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
                    <div class="table-responsive-md">

                      
                    </div>
                      <!-- End Default Table Example -->
                    </div>
                  </div>

            </div>

        </div>

    </div>

</div>

@endsection