@extends('admin.layouts.app')

@push('title')

Admin | Services

@endpush

@section('main-content')
<div id="main">

    <div class="pagetitle">
        <h1>Services</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Services</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-title">All Services</h5>
                <div>
                    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Add New</a>
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
                            <th scope="col">Name</th>
                            <th scope="col">Created On</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($services as $i => $service)
                        <tr>
                            <th scope="row">{{ $i + 1 }}</th>
                            <td>{{ $service->name }}</td>
                            <td>{{ \Illuminate\Support\Carbon::parse($service->created_at)->format('M j Y') }}</td>
                            <td class="d-flex align-items-center gap-2">
                                <a href="{{ route('admin.services.edit', $service->id) }}"
                                    class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('admin.services.destroy', $service->id) }}"
                                    method="post" id="delete_form{{ $service->id }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="button" data-delete-id="delete_form{{ $service->id }}" onclick="delete_confirmation(this)" class="btn btn-danger btn-sm"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                                <input style="display: none;" type="submit" id="delete_form_submitter" form="delete_form" value="Update"/>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center" colspan="4">No services found!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>

        </div>
    </div>

</div>
<script>

    function delete_confirmation(e){
       var delete_id = $(e).data("delete-id");
        var delete_handler = document.getElementById("delete_form_submitter");
        delete_handler.setAttribute("form", delete_id);

        swal({
            title: "Are you sure?",
            text: "All the types and categories releated with this service will also be deleted!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                document.getElementById("delete_form_submitter").click();
                swal("Service deleted successfully!", {
                icon: "success",
                });
            } else {
                
            }
        });
    }

</script>
@endsection