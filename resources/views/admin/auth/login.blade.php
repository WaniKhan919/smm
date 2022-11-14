@extends('admin.layouts.auth')

@section('content')
<div class="card mb-3">

    <div class="card-body">

        <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
        <p class="text-center small">Enter your username & password to login</p>
        </div>

        <form action="{{ route('admin.login') }}" method="post" class="row g-3 needs-validation" novalidate>
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
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                @error('password')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Login</button>
            </div>
        </form>

    </div>
</div>
@endsection