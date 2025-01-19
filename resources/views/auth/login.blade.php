@extends('layouts.app')

@section('content')
<div class="position-relative d-flex align-items-center justify-content-center" 
     style="background: linear-gradient(to bottom, rgb(44, 63, 82), rgb(65, 128, 117)); min-height: 100vh; height: 100%;">
    <div class="container py-5" style="height: 100%;">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/orca.png') }}" alt="Sea" class="img-fluid rounded" style="max-height: 400px;">
            </div>

            <div class="col-md-6">
                <div class="card shadow-lg" style="border-radius: 15px; background-color: rgb(65, 128, 117);">
                    <div class="card-header text-center" style="background-color: rgb(44, 63, 82); color: white;">
                        <h4>{{ __('Login') }}</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label" style="color: white;">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                    name="email" value="{{ old('email') }}" required autofocus style="background-color: rgb(44, 63, 82); color: white; border: 1px solid rgb(65, 128, 117);">
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

                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" 
                                       {{ old('remember') ? 'checked' : '' }} style="background-color: rgb(65, 128, 117);">
                                <label class="form-check-label" for="remember" style="color: white;">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-light">{{ __('Login') }}</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('password.request') }}" style="color: rgb(65, 128, 117);">{{ __('Forgot Your Password?') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
