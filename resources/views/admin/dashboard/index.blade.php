@extends('admin.layouts.app')

@push('title')

Admin | Dashboard

@endpush

@section('main-content')

<div id="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>

</div>

@endsection

@push('scripts')

<script>

    $(".nav-link:eq(0)").removeClass("collapsed");

</script>

@endpush