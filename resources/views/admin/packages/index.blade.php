@extends('admin.layouts.app')

@push('title')

Admin | Packages - all

@endpush

@section('main-content')
<div id="main">

    <div class="pagetitle">
        <h1>Packages</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Packages</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-title">All Packages</h5>
                <div>
                    <a href="{{ route('admin.packages.create') }}" class="btn btn-primary">Add New</a>
                </div>
            </div>
            @if (session()->has('success'))
            <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
            @endif

            <div class="table-responsive-md">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Level</th>
                            <th scope="col">Price</th>
                            <th scope="col">Type</th>
                            <th scope="col">Category</th>
                            <th scope="col">Created</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($packages as $i => $package)
                        <tr>
                            <th scope="row">{{ $i + 1 }}</th>
                            <td>{{ $package->title }}</td>
                            <td>{{ $package->level_name }}</td>
                            <td>{{ $package->price }}</td>
                            <td>{{ $package->type->name }}</td>
                            <td>{{ $package->category->name }}</td>
                            <td>{{ \Illuminate\Support\Carbon::parse($package->created_at)->format('M j Y') }}</td>
                            <td class="d-flex align-items-center gap-2">
                                <a href="{{ route('admin.packages.edit', $package->id) }}"
                                    class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('admin.packages.destroy', $package->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>

            </div>

        </div>
    </div>

</div>
@endsection