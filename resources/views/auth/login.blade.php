@extends('layouts.app')

@section('style')

<link rel="stylesheet" href="{{ asset('css/loginregi.css') }}">

@endsection

@section('content')
<div class="container" style="height: 100vh;">
    <div class="row justify-content-center pt-5">
        <div class="col-12 col-md-5">
            <div class="card wrapper">
                <div class="card-header text-center">
                    <img src="{{ asset('logo/cvlogo4.webp') }}" alt="">
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row justify-content-center pt-4">

                            <div class="col-8">
                                <input id="email" type="email"
                                    class="form-control form-field @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-center pt-4">
                            <div class="col-8">
                                <input id="password" type="password"
                                    class="form-control form-field @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center pt-4">
                            <div class="col-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>


                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center pt-4">
                            <div class="col-5">
                                <button type="submit" class="button-17"
                                    style="padding-left: 70px !important; padding-right: 70px !important; background-color:gold !important;">
                                    Login
                                </button>
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <div class="row mb-0">
                        <div class="col">
                            <div class="text-center fs-6">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif or <a href="{{ route('register') }}">Registration</a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection