@extends('admin.layouts.app')

@push('title')
Admin | Faq
@endpush

@section('main-content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>FAQ's</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item">Faqs</li>
        <li class="breadcrumb-item active">Listing</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-10">
                <h5 class="card-title">FAQ</h5>
              </div>
              <div class="col-lg-2 mt-3 mb-3">
                <a href="{{ route('admin.faqs.create') }}" class="btn btn-outline-primary"><i class="bi bi-plus"></i> Add FAQ</a>
              </div>
              <div class="col-lg-12">
                @if (session()->has('success'))
                  <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
                @if (session()->has('error'))
                  <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                    {{ session()->get('error') }}
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
              </div>
            </div>
            <!-- Default Accordion -->
            @foreach ($faqs as $faq)
              <div class="accordion" id="accordionExample_{{ $faq->id }}">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading{{ $faq->id }}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}"
                      aria-expanded="true" aria-controls="collapse{{ $faq->id }}">
                      {{ $faq->question }}
                    </button>
                  </h2>
                  <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $faq->id }}"
                    data-bs-parent="#accordionExample_{{ $faq->id }}">
                    <div class="accordion-body">
                      {{ $faq->answer }}
                    </div>
                    <div class="p-2">
                      <a href="{{ route('admin.faqs.edit',$faq->id) }}" class="btn btn-primary">Edit</a>
                      <form action="{{ route('admin.faqs.destroy',$faq->id) }}" method="POST" class="btn btn-danger p-0">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            <!-- End Default Accordion Example -->

          </div>
        </div>


      </div>

    </div>
  </section>

</main>
@endsection