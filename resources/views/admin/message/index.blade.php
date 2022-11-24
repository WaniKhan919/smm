@extends('admin.layouts.app')

@push('title')

Admin | Messages - all

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
        <h1>Messages</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Messages</li>
            </ol>
        </nav>
    </div>

    <div class="section">

        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title">All Messages</h5>
                        </div>
        
                      <!-- Default Table -->
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                
                              @php
    
                                $i = 1;
    
                              @endphp
    
                                @forelse ($messages as $message)
                                    
                                    <tr>
                                        <th>{{ $i }}</th>
                                        <td>{{ $message->name ?? '' }}</td>
                                        <td>{{ $message->email ?? '' }}</td>
                                        <td>
                                            @if($message->message != "") {{ substr($message->message, 0, 25).'...' ?? '' }} @endif
                                        </td>
                                        <td>{{ \Illuminate\Support\Carbon::parse($message->created_at)->format('M j Y')}}</td>
                                        <td class="d-flex align-items-center gap-2">
                                            <a href="{{ route('admin.message.show', $message->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye-fill"></i></a>
                                            <form action="{{ route('admin.message.destroy', $message->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
    
                                    @php
                                    
                                        $i++
    
                                    @endphp
    
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