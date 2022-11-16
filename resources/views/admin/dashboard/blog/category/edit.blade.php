@extends('admin.layouts.app')

@push('title')

Admin | Blog - Edit Category

@endpush

@section('main-content')

<div id="main">

    <div class="pagetitle">
        <h1>Categories</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.blog.post.index') }}">Blog</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.blog.category.index') }}">Categories</a></li>
                <li class="breadcrumb-item active">Edit Category</li>
            </ol>
        </nav>
    </div>

    <div class="section">

        <div class="row">

            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        
                        <h5 class="card-title">Edit Category</h5>

                        @if (session()->has('alert'))
                        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                            {{ session('alert') }}
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        {{-- Start Form --}}
                        <form action="{{ route('admin.blog.category.update', $id) }}" method="post">

                            @csrf

                            {{ method_field("PUT") }}

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                    <input type="text" name="title" class="form-control" @if(isset($category)) value="{{ $category->title }}" @endif>
                                    <span class="text-danger mt-3">

                                        @error('title')
                                            
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