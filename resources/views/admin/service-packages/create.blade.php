@extends('admin.layouts.app')

@push('title')

Admin | Services Packages - Create

@endpush

@section('main-content')
<div id="main">

    <div class="pagetitle">
        <h1>Create Package</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.service-packages.index') }}">Packages</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create New Package</h5>
            @if (session()->has('success'))
            <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="{{ route('admin.service-packages.store') }}" method="post" class="row g-3" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    @error('title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="service" class="form-label">Service</label>
                    <select id="service" class="form-select" name="service_id" onchange="loadCategories(this)">
                        <option disabled selected>Choose...</option>
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}" 
                                    {{ $service->id === (int) old('service_id')? 'selected': '' }}
                                    data-categories-url="{{ route('admin.service-package-categories.json', $service->id) }}"
                                    >{{ $service->name }}</option>
                        @endforeach
                    </select>
                    @error('service_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="category" class="form-label">Category</label>
                    <select id="category" class="form-select" name="category_id" onclick="checkService(this)">
                        <option disabled selected>Choose...</option>
                    </select>
                    @error('category_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="level" class="form-label">Level#</label>
                    <input type="number" class="form-control" id="level" name="level" value="{{ old('level') }}">
                    @error('level')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="levelName" class="form-label">Level Name</label>
                    <input type="text" class="form-control" id="levelName" name="level_name" value="{{ old('level_name') }}">
                    @error('level_name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="price" class="form-label">Price</label>
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                    </div>
                    @error('price')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="salePrice" class="form-label">Sale Price</label>
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="text" class="form-control" id="salePrice" name="sale_price" value="{{ old('sale_price') }}">
                    </div>
                    @error('sale_price')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}">
                    @error('quantity')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="quantity" class="form-label">Keyword</label>
                    <input type="checkbox" class="form-check" id="quantity" name="keyword">
                </div>
                <div class="col-md-6">
                    <label for="quantity" class="form-label">Speed Box</label>
                    <input type="checkbox" class="form-check" id="quantity" name="speedbox">
                </div>
                <div class="col-md-12">
                    <div>
                        <label for="features" class="form-label">Features</label>
                        <button type="button" class="btn btn-primary btn-sm" onclick="addFeature(this)">Add Feature</button>
                    </div>
                    <div id="features" class="pt-2">
                        @if (old('features'))
                            @foreach (old('features') as $feature)
                            <div class="feature d-flex align-items-center mb-2 justify-content-between gap-2">
                                <input type="text" class="form-control" name="features[]" value="{{ $feature }}">
                                <button type="button" class="btn btn-danger" onclick="deleteFeature(this)"><i class="bi bi-trash"></i></button>
                            </div>
                            @endforeach
                        @endif
                    </div>
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
    function loadCategories(self, categoryId = null) {
        let url = $(self).find(":selected").data('categories-url');
        $.ajax({
            url: url,
            type: 'GET',
            beforeSend: function () {
                $('#category').html('<option disabled selected>Loading Types...</option>');
            },
            success: function (res) {
                let html = '<option disabled selected>Choose...</option>';
                res.forEach((category) => {
                    html += '<option value="'+category.id+'" '+(parseInt(category.id) === categoryId? 'selected': '')+'>'+category.name+'</option>';
                })
                $('#category').html(html);
            }
        })
    }

    function checkService(self) {
        if ($('#service').val() === null) {
            alert('Please select service first!');
        }
    }

    function deleteFeature(self) {
        self.closest('div.feature').remove();
    }

    function addFeature(self) {
        $('#features').append('<div class="feature d-flex align-items-center mb-2 justify-content-between gap-2"><input type="text" class="form-control" name="features[]"><button type="button" class="btn btn-danger" onclick="deleteFeature(this)"><i class="bi bi-trash"></i></button></div>');
    }

    @if (old('category_id') !== null)
        window.addEventListener('load', function () {
            console.log($.ajax);
            loadCategories(document.querySelector('#service'), {{ (int) old('category_id') }});
        });
    @endif
</script>
@endsection