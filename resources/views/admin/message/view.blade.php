@extends('admin.layouts.app')

@push('title')

Admin | View - message

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
        <h1>Message</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.message.index') }}">Messages</a></li>
                <li class="breadcrumb-item active">Message-details</li>
            </ol>
        </nav>
    </div>

    <div class="section">

        <div class="row">

          <div class="col-md-10 col-sm-10 col-12">

            <div class="card">
              <div class="card-body pt-3">
                <div class="tab-content pt-2">
  
                  <div class="tab-pane fade show active profile-overview" id="profile-overview" role="tabpanel">
                 
                    <h5 class="card-title">Message Details</h5>
  
                    <div class="row mb-2">
                      <div class="col-lg-3 col-md-4 col-4 label message-view-field">Name</div>
                      <div class="col-lg-9 col-md-8 col-8">{{ $message->name ?? '' }}</div>
                    </div>
  
                    <div class="row mb-2">
                      <div class="col-lg-3 col-md-4 col-4 label message-view-field">Email</div>
                      <div class="col-lg-9 col-md-8 col-8">{{ $message->email ?? '' }}</div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-lg-3 col-md-4 col-4 label message-view-field">Subject</div>
                      <div class="col-lg-9 col-md-8 col-8">{{ $message->subject ?? '' }}</div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-lg-3 col-md-4 col-4 label message-view-field">Link</div>
                      <div class="col-lg-9 col-md-8 col-8">{{ $message->link ?? '' }}</div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-lg-3 col-md-4 col-4 label message-view-field">Keyword</div>
                      <div class="col-lg-9 col-md-8 col-8">{{ $message->keyword ?? '' }}</div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-lg-3 col-md-4 col-4 label message-view-field">Country</div>
                      <div class="col-lg-9 col-md-8 col-8">{{ $message->country ?? '' }}</div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-lg-3 col-md-4 col-4 label message-view-field">Message</div>
                      <div class="col-lg-9 col-md-8 col-8">{{ $message->message ?? '' }}</div>
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