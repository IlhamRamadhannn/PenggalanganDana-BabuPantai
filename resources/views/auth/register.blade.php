@extends('layouts.app')

@section('content')
<div class="position-relative d-flex align-items-center justify-content-center" 
     style="background: linear-gradient(to bottom, rgb(65, 128, 117), rgb(44, 63, 82)); min-height: 100vh; height: 100%;">
    <div class="container py-5" style="height: 100%;">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/orca.png') }}" alt="Whale" class="img-fluid rounded" style="max-height: 400px;">
            </div>

            <div class="col-md-6">
                <div class="card shadow-lg" style="border-radius: 15px; background-color: rgb(65, 128, 117);">
                    <div class="card-header text-center" style="background-color: rgb(44, 63, 82); color: white;">
                        <h4>{{ __('Register') }}</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label" style="color: white;">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autofocus style="background-color: rgb(44, 63, 82); color: white; border: 1px solid rgb(65, 128, 117);">
                                @error('name')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label" style="color: white;">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required style="background-color: rgb(44, 63, 82); color: white; border: 1px solid rgb(65, 128, 117);">
                                @error('email')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label" style="color: white;">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required style="background-color: rgb(44, 63, 82); color: white; border: 1px solid rgb(65, 128, 117);">
                                @error('password')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password-confirm" class="form-label" style="color: white;">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required style="background-color: rgb(44, 63, 82); color: white; border: 1px solid rgb(65, 128, 117);">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-light">{{ __('Register') }}</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('login') }}" style="color: rgb(65, 128, 117);">{{ __('Already have an account? Login here.') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
