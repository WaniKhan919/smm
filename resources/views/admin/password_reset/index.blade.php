@extends('admin.layouts.auth')

@section('content')

<div class="card mb-3">

    <div class="card-body">

        <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Password Reset</h5>
        <p class="text-center small">Enter your email to reset password</p>
        </div>

        <form action="{{ route('admin.password.reset.email') }}" method="post" class="row g-3 needs-validation" novalidate>
            @csrf
            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <div class="input-group has-validation">
                <input type="text" name="email" class="form-control" id="email">
                @error('email')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Login</button>
            </div>
        </form>

    </div>
</div>
@endsection