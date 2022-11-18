@extends('admin.layouts.app')

@push('title')

Admin | Users Orders 

@endpush

@section('main-content')

<div id="main">

    {{-- Success Alert --}}
    @if (session()->has('alert'))
        
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            {{ session('alert') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    @endif

    {{-- Error Alert --}}
    @if (session()->has('error'))
        
        <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    @endif

    <div class="pagetitle">
        <h1>Orders</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Orders</li>
            </ol>
        </nav>
    </div>

    <div class="section">

        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title">All Orders</h5>
                        </div>
        
                      <!-- Default Table -->
                    <div class="table-responsive-md">

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Package</th>
                                <th scope="col">Price</th>
                                <th scope="col">Url</th>
                                <th scope="col">status</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
    
                               @forelse ($orders as $order)
                                    
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>
                                            <a href="{{ route('admin.order.edit', $order->id) }}" class="admin-post-links">
                                                {{ $order->name ?? '' }}    
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.order.edit', $order->id) }}" class="admin-post-links">
                                                {{ $order->email }}
                                            </a>
                                        </td>
                                          @php
                                            $category=DB::table('package_types')->where('id',$order->type_id)->first();
                                          @endphp
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $order->stripe_price }}</td>
                                        <td><a href="{{ $order->url }}" target="_blank">{{ $order->url }}</a></td>
                                        <td>
                                          @php
                                            if($order->status=='Pending'){
                                              $btn='warning';
                                            }else if($order->status=='Completed'){
                                              $btn='success';
                                            }else if($order->status=='Approved'){
                                              $btn='primary';
                                            }else if($order->status=='Process'){
                                              $btn='info';
                                            }else if($order->status=='Decliend'){
                                              $btn='danger';
                                            }
                                          @endphp
                                          <div class="dropdown">
                                            <button class="btn btn-{{ $btn }} dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              {{ Str::ucfirst($order->status) }}
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <a class="dropdown-item" href="{{ route('admin.order.status',['id'=>$order->sub_id,'status'=>'Completed']) }}">Completed</a>
                                              <a class="dropdown-item" href="{{ route('admin.order.status',['id'=>$order->sub_id,'status'=>'Approved']) }}">Approved</a>
                                              <a class="dropdown-item" href="{{ route('admin.order.status',['id'=>$order->sub_id,'status'=>'Process']) }}">Process</a>
                                              <a class="dropdown-item" href="{{ route('admin.order.status',['id'=>$order->sub_id,'status'=>'Decliend']) }}">Decliend</a>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.order.destroy', $order->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                             @empty
    
                                    <tr>
                                        <td class="text-center" colspan="8">No Records Found!</td>
                                    </tr>
                                    
                              @endforelse
    
                            </tbody>
                          </table>

                    </div>
                      <!-- End Default Table Example -->
                    </div>
                  </div>

            </div>

        </div>

    </div>

</div>

@endsection