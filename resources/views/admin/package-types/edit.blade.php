@extends('admin.layouts.app')

@push('title')

Admin | Package Types - edit

@endpush

@section('main-content')
<div id="main">

    <div class="pagetitle">
        <h1>Edit Package Type</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.packages.index') }}">Packages</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.package-types.index') }}">Types</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Type</h5>
                    @if (session()->has('success'))
                    <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <form action="{{ route('admin.package-types.update', $type->id) }}" method="post" class="row g-3" novalidate>
                        @method('PUT')
                        @csrf
                        <div class="col-md-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $type->name }}">
                            @error('name')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="category" class="form-label">Category</label>
                            <select id="category" class="form-select" name="category_id">
                                <option disabled selected>Choose...</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id === $type->category_id? 'selected': '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection