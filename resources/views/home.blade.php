@extends('layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-4 mb-4">
            <div class="card border-warning mb-3 box-shadow" style="max-width: 30rem;">
                <div class="card-header text-center">
                    <p class="fs-4 mb-n2 lh-1">Standard CV <span class="badge bg-warning text-dark">Free</span></p>
                    <span class="badge bg-success fs-6">Availabe Now </span>
                </div>
                <div class="card-body text-success">
                    <img src="{{ asset('webp/standard.webp') }}" class="image-center image-sm" alt="">
                </div>
                <div class="card-footer text-center" style="margin-bottom: -24px;">
                    <form action="{{ route('cvdata') }}">
                        <input type="hidden" name="name" value="standardcv">
                        <button type="submit" class="btn button bg-light buttonhover box-shadow">Get Start With
                            this
                            Template</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4 mb-4">
            <div class="card border-warning mb-3 box-shadow" style="max-width: 30rem;">
                <div class="card-header text-center">
                    <p class="fs-4 mb-n2 lh-1">Super Minimal Style <span class="badge bg-warning text-dark">Free</span>
                    </p>
                    <span class="badge bg-success fs-6">Coming Soon</span>
                </div>
                <div class="card-body text-success">
                    <img src="{{ asset('webp/resume6.webp') }}" class="image-center image-sm" alt="">
                </div>
                <div class="card-footer text-center" style="margin-bottom: -24px;">
                    <a href="{{ route('pending') }}" class="btn button bg-light buttonhover box-shadow">Get Start With
                        this Template</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4 mb-4">
            <div class="card border-warning mb-3 box-shadow" style="max-width: 30rem;">
                <div class="card-header text-center">
                    <p class="fs-4 mb-n2 lh-1">Super Minimal Style <span class="badge bg-warning text-dark">Free</span>
                    </p>
                    <span class="badge bg-success fs-6">Coming Soon</span>
                </div>
                <div class="card-body text-success">
                    <img src="{{ asset('webp/resume.webp') }}" class="image-center image-sm" alt="">
                </div>
                <div class="card-footer text-center" style="margin-bottom: -24px;">
                    <a href="{{ route('pending') }}" class="btn button bg-light buttonhover box-shadow">Get Start With
                        this Template</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-12 col-sm-4 mb-4">
            <div class="card border-warning mb-3 box-shadow" style="max-width: 30rem;">
                <div class="card-header text-center">
                    <p class="fs-4 mb-n2 lh-1">Super Minimal Style <span class="badge bg-warning text-dark">Free</span>
                    </p>
                    <span class="badge bg-success fs-6">Coming Soon</span>
                </div>
                <div class="card-body text-success">
                    <img src="{{ asset('webp/resume4.webp') }}" class="image-center image-sm" alt="">
                </div>
                <div class="card-footer text-center" style="margin-bottom: -24px;">
                    <a href="{{ route('pending') }}" class="btn button bg-light buttonhover box-shadow">Get Start With
                        this Template</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4 mb-4">
            <div class="card border-warning mb-3 box-shadow" style="max-width: 30rem;">
                <div class="card-header text-center">
                    <p class="fs-4 mb-n2 lh-1">Super Minimal Style <span class="badge bg-warning text-dark">Free</span>
                    </p>
                    <span class="badge bg-success fs-6">Coming Soon</span>
                </div>
                <div class="card-body text-success">
                    <img src="{{ asset('webp/resume5.webp') }}" class="image-center image-sm" alt="">
                </div>
                <div class="card-footer text-center" style="margin-bottom: -24px;">
                    <a href="{{ route('pending') }}" class="btn button bg-light buttonhover box-shadow">Get Start With
                        this Template</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4 mb-4">
            <div class="card border-warning mb-3 box-shadow" style="max-width: 30rem;">
                <div class="card-header text-center">
                    <p class="fs-4 mb-n2 lh-1">Super Minimal Style <span class="badge bg-warning text-dark">Free</span>
                    </p>
                    <span class="badge bg-success fs-6">Coming Soon</span>
                </div>
                <div class="card-body text-success">
                    <img src="{{ asset('webp/resume1.webp') }}" alt="" class="image-center image-sm">
                </div>
                <div class="card-footer text-center" style="margin-bottom: -24px;">
                    <a href="{{ route('pending') }}" class="btn button bg-light buttonhover box-shadow">Get Start With
                        this Template</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection