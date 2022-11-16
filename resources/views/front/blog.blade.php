@extends('layout.layout')
@section('container')
<!--page-title starts-->
<div class="page-title-area">
  <div class="container">
    <div class="row height-200 align-items-center">
      <div class="col-lg-12">
        <div class="page-title section-title text-center">
          <h1><span>Blog</span></h1>
          <div class="site-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--page-title ends-->

<!--blog-area start-->
<div class="blog-area pt-100 pt-sm-80 pb-100 pb-sm-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <x-blog-sidebar></x-blog-sidebar>
      </div>
      <div class="col-lg-8">
        @foreach ($blogs as $blog)
          <div class="blog-single blog-wide mt-sm-50 wow fadeIn" data-wow-delay=".3s">
            <div class="blog-thumb">
              <a href="#"><img src="{{asset('/assets/admin/img/post/'.$blog->img)}}" alt="" /></a>
            </div>
            <div class="blog-desc mt-30">
              <ul class="blog-category">
                <li>
                  @php
                    $catname=DB::table('blog_categories')->where('id',$blog->blog_category_id)->first();
                  @endphp
                  <a href="{{ route('blog',$catname->id) }}">
                    {{ $catname->title }}
                  </a>
                </li>
              </ul>
              <h3><a href="{{ route('blog-detail',$blog->id) }}">{{ $blog->title }}</a></h3>
              <p>{{ $blog->description }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<!--blog-area end-->

@endsection