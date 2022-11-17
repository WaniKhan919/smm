@extends('admin.layouts.app')

@push('title')

Admin | Reviews - edit

@endpush

@section('main-content')
<div id="main">

    <div class="pagetitle">
        <h1>Edit Review</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.reviews.index') }}">Reviews</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Review</h5>
            @if (session()->has('success'))
            <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="{{ route('admin.reviews.update', $review->id) }}" method="post" class="row g-3" enctype="multipart/form-data" novalidate>
                @method('PUT')
                @csrf
                <div class="col-md-12 mb-4 text-center">
                    <img src="{{ $review->image_url? asset('storage/'.$review->image_url): asset('assets/admin/img/avatar.png') }}" style="max-width: 120px; max-height: 120px;" alt="Profile" class="rounded-circle imagePreview">
                    <br><br>
                    <input class="form-control d-inline w-auto" name="image" type="file" onchange="previewImage(this)">
                </div>
                <div class="col-md-6">
                    <label for="name" class="form-label">Customer Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $review->name }}">
                    @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="company" class="form-label">Company</label>
                    <input type="text" class="form-control" id="company" name="company" value="{{ $review->company }}">
                    @error('company')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $review->title }}">
                    @error('title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="price" class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="6">{{ $review->description }}</textarea>
                    @error('description')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImage(self) {
        const imagePreview = self.parentNode.querySelector('.imagePreview');
        let url = URL.createObjectURL(self.files[0]);
        imagePreview.src = url;
        imagePreview.addEventListener('load', () => URL.revokeObjectURL(url));
    }
</script>
@endsection