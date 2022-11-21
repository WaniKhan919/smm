@extends('admin.layouts.app')

@push('title')

Admin | Service Package Categories - Create

@endpush

@section('main-content')
<div id="main">

    <div class="pagetitle">
        <h1>Create Package Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.services.index') }}">Services</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.service-package-categories.index') }}">Categories</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create New Category</h5>
                    @if (session()->has('success'))
                    <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <form action="{{ route('admin.service-package-categories.store') }}" method="post" class="row g-3" novalidate>
                        @csrf
                        <div class="col-md-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="service" class="form-label">Service</label>
                            <select id="service" class="form-select" name="service_id">
                                <option disabled selected>Choose...</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}" {{ $service->id === (int) old('service_id')? 'selected': '' }}>{{ $service->name }}</option>
                                @endforeach
                            </select>
                            @error('service_id')
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
    </div>
</div>
@endsection