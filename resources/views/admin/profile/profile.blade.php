@extends('admin.layouts.app')

@push('title')

Admin - Profile

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
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div>

    <div class="section">

        <div class="row">

          <div class="col-md-7 col-sm-10 col-12">

            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
  
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview" aria-selected="true" role="tab">Overview</button>
                  </li>
  
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="false" tabindex="-1" role="tab">Edit Profile</button>
                  </li>
  
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password" aria-selected="false" tabindex="-1" role="tab">Change Password</button>
                  </li>
  
                </ul>
                <div class="tab-content pt-2">
  
                  <div class="tab-pane fade show active profile-overview" id="profile-overview" role="tabpanel">
                 
                    <h5 class="card-title">Profile Details</h5>
  
                    <div class="row">
                      <div class="col-lg-3 col-md-4 col-4 label message-view-field">Name</div>
                      <div class="col-lg-9 col-md-8 col-8">{{ auth()->user()->name }}</div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-3 col-md-4 col-4 label message-view-field">Email</div>
                      <div class="col-lg-9 col-md-8 col-8">{{ auth()->user()->email }}</div>
                    </div>
                    
                  </div>
  
                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">
  
                    <!-- Profile Edit Form -->
                    <form action="{{ route('admin.profile.update') }}" method="post">
  
                      @csrf
  
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-2 col-form-label">Name</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="name" type="text" class="form-control" id="fullName" value="{{ auth()->user()->name }}">
                          <span class="text-danger">
  
                              @error('name')
                                  
                                  {{ $message }}
  
                              @enderror
  
                          </span>
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-2 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="email" type="email" class="form-control" id="fullName" value="{{ auth()->user()->email }}">
                          <span class="text-danger">
  
                              @error('email')
                                  
                                  {{ $message }}
  
                              @enderror
  
                          </span>
                        </div>
                      </div>
                    
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                      </div>
                    </form><!-- End Profile Edit Form -->
  
                  </div>
  
                  <div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">
                    <!-- Change Password Form -->
                    <form action="{{ route('admin.profile.change.password') }}" method="post">
  
                      @csrf
  
                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-2 col-form-label">Current Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="current_password" type="password" class="form-control" id="currentPassword">
                          <span class="text-danger">
  
                            @error('current_password')
                                
                                {{ $message }}
  
                            @enderror
  
                        </span>
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-2 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="password" type="password" class="form-control" id="newPassword">
                          <span class="text-danger">
  
                            @error('password')
                                
                                {{ $message }}
  
                            @enderror
  
                        </span>
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-2 col-form-label">Confirm New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="password_confirmation" type="password" class="form-control" id="renewPassword">
                          <span class="text-danger">
  
                            @error('password_confirmation')
                                
                                {{ $message }}
  
                            @enderror
  
                        </span>
                        </div>
                      </div>
  
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                      </div>
                    </form><!-- End Change Password Form -->
  
                  </div>
  
                </div><!-- End Bordered Tabs -->
  
              </div>
            </div>

          </div>

        </div>

    </div>

</div>

@endsection