@extends('admin.layouts.app')

@push('title')

Admin | Blog | Categories

@endpush

@section('main-content')

<div id="main">

    {{-- Success Alert --}}
    @if (session()->has('alert'))
        
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            {{ session('alert') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    @endif

    {{-- Error Alert --}}
    @if (session()->has('error'))
        
        <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    @endif

    <div class="pagetitle">
        <h1>Categories</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.blog.post.index') }}">Blog</a></li>
                <li class="breadcrumb-item active">Categories</li>
            </ol>
        </nav>
    </div>

    <div class="section">

        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Categories</h5>
        
                      <!-- Default Table -->
                    <div class="table-responsive-md">

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                
                              @php
    
                                $i = 1;
    
                              @endphp
    
                                @forelse ($categories as $category)
                                    
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $category->title }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                                </button>
                                                <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('admin.blog.category.edit', $category->id) }}"><button class="border-0" style="background-color: inherit;" type="submit">Edit</button></a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('admin.blog.category.destroy', $category->id) }}" method="POST">
                                                        @csrf

                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <li>
                                                            <a class="dropdown-item" type="submit" href=""><button class="border-0" type="submit"  style="background-color: inherit;">Delete</button>
                                                            </a>
                                                        </li>
                                                      </form>
                                                </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
    
                                    @php
                                    
                                        $i++
    
                                    @endphp
    
                                @empty
    
                                    <tr>
                                        <td class="text-center" colspan="8">No categories found!</td>
                                    </tr>
                                    
                                @endforelse
    
                            </tbody>
                          </table>

                    </div>
                      <!-- End Default Table Example -->
                    </div>
                  </div>

            </div>

        </div>

    </div>

</div>

@endsection