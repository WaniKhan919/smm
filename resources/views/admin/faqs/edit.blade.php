@extends('admin.layouts.app')

@push('title')
Admin | Faq Edit
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
            <h5 class="card-title">Edit Faq</h5>
  
            <!-- General Form Elements -->
            <form method="POST" action="{{ route('admin.faqs.update',$faq->id) }}">
              @csrf
              @method('PUT')
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Question</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Question" name="question" value="{{ old('question') ?? $faq->question ?? '' }}">
                  @error('question')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Answer</label>
                <div class="col-sm-10">
                  <textarea class="form-control" style="height: 100px" placeholder="Answer" name="answer" value="{{ old('answer') }}">{{ $faq->answer ?? '' }}</textarea>
                  @error('answer')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
  
              <div class="row mb-3">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </div>
  
            </form><!-- End General Form Elements -->
  
          </div>
        </div>


      </div>

    </div>
  </section>

</main>
@endsection