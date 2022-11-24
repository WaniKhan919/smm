@extends('admin.layouts.app')

@push('title')

Admin - Edit User

@endpush

@section('main-content')

<div id="main">

    <div class="pagetitle">
        <h1>Edit User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Users</a></li>
                <li class="breadcrumb-item active">Edit User</li>
            </ol>
        </nav>
    </div>

    <div class="section">

        <div class="row">

            <div class="col-lg-7">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User</h5>

                        @if (session()->has('alert'))
                        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                            {{ session('alert') }}
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        {{-- Start Form --}}
                        <form action="{{ route('admin.user.update', $id) }}" method="post" enctype="multipart/form-data">

                            @csrf

                            {{ method_field("PUT") }}
                            
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-sm-2 col-form-label">First Name</label>
                                    <input type="text" name="name" class="form-control" @if(isset($user)) value="{{ $user->name ?? '' }}" @endif>
                                    <span class="text-danger mt-3">

                                        @error('name')
                                            
                                            {{ $message }}

                                        @enderror

                                    </span>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-sm-2 col-form-label">Last Name</label>
                                    <input type="text" name="lastname" class="form-control" @if(isset($user)) value="{{ $user->lastname ?? '' }}" @endif>
                                    <span class="text-danger mt-3">

                                        @error('lastname')
                                            
                                            {{ $message }}

                                        @enderror

                                    </span>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                    <input type="email" name="email" class="form-control" @if(isset($user)) value="{{ $user->email ?? '' }}" @endif>
                                    <span class="text-danger mt-3">

                                        @error('email')
                                            
                                            {{ $message }}

                                        @enderror

                                    </span>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-sm-2 col-form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" @if(isset($user)) value="{{ $user->phone ?? '' }}" @endif>
                                    <span class="text-danger mt-3">

                                        @error('phone')
                                            
                                            {{ $message }}

                                        @enderror

                                    </span>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-sm-2 col-form-label">Password</label>
                                    <input type="password" name="password" class="form-control">
                                    <span class="text-danger mt-3">

                                        @error('password')
                                            
                                            {{ $message }}

                                        @enderror

                                    </span>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-sm-3 col-form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                    <span class="text-danger mt-3">

                                        @error('password_confirmation')
                                            
                                            {{ $message }}

                                        @enderror

                                    </span>
                                </div>
                            </div>

                            <div class="row md-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </div>

                        </form>
                        {{-- End Form --}}

                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection