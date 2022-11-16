@extends('admin.layouts.app')

@push('title')

Admin | Blog - Add Post

@endpush

@section('main-content')

<div id="main">

    <div class="pagetitle">
        <h1>Add Post</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Blog</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.blog.post.index') }}">Posts</a></li>
                <li class="breadcrumb-item active">Add Post</li>
            </ol>
        </nav>
    </div>

    <div class="section">

        <div class="row">

            <div class="col-lg-7">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Post</h5>

                        @if (session()->has('alert'))
                        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                            {{ session('alert') }}
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        {{-- Start Form --}}
                        <form action="{{ route('admin.blog.post.store') }}" method="post" enctype="multipart/form-data">

                            @csrf
                            
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                    <input type="text" name="title" class="form-control">
                                    <span class="text-danger mt-3">

                                        @error('title')
                                            
                                            {{ $message }}

                                        @enderror

                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                                    <textarea type="text" name="description" class="form-control" style="height: 100px;"></textarea>
                                    <span class="text-danger mt-3">

                                        @error('description')
                                            
                                            {{ $message }}

                                        @enderror

                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-sm-2 col-form-label">Category</label>
                                    <select id="inputState" class="form-select" name="category">
                                        <option value="" selected>Select...</option>

                                        @foreach ($categories as $category)
                                        
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>

                                        @endforeach

                                      </select>

                                      <span class="text-danger mt-3">

                                        @error('category')
                                            
                                            {{ $message }}

                                        @enderror

                                    </span>

                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <span class="text-danger mt-3">

                                        @error('image')
                                            
                                            {{ $message }}

                                        @enderror

                                    </span>
                                </div>
                            </div>

                            <div class="row md-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Create</button>
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