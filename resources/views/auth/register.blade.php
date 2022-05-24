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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row justify-content-center pt-4">

                            <div class="col-8">
                                <input id="name" type="text"
                                    class="form-control form-field @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Your Name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center pt-4">

                            <div class="col-8">
                                <input id="email" type="email"
                                    class="form-control form-field @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Email Address">

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
                                    name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center pt-4">
                            <div class="col-8">
                                <input id="password-confirm" type="password" class="form-control form-field"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="row justify-content-center pt-4">
                            <div class="col-5">
                                <button type="submit" class="button-17"
                                    style="padding-left: 70px !important; padding-right: 70px !important; background-color:gold !important;">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="card-footer mt-4">
                        <div class="row ">
                            <div class="col">
                                <div class="text-center fs-6">
                                    Already Registered? <a href="{{ route('login') }}">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection