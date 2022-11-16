@extends('admin.layouts.app')

@push('title')

Admin | Packages - Types

@endpush

@section('main-content')
<div id="main">

    <div class="pagetitle">
        <h1>Package Types</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.packages.index') }}">Packages</a></li>
                <li class="breadcrumb-item active">Types</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-title">All Types</h5>
                <div>
                    <a href="{{ route('admin.package-types.create') }}" class="btn btn-primary">Add New</a>
                </div>
            </div>
            @if (session()->has('success'))
                <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($types as $i => $type)
                        <tr>
                            <th scope="row">{{ $i + 1 }}</th>
                            <td>{{ $type->name }}</td>
                            <td>{{ $type->category->name }}</td>
                            <td>{{ \Illuminate\Support\Carbon::parse($type->created_at)->format('M j Y') }}</td>
                            <td class="d-flex align-items-center gap-2">
                                <a href="{{ route('admin.package-types.edit', $type->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('admin.package-types.destroy', $type->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="4">No types found!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection