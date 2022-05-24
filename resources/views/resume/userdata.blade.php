@extends('layouts.app')

@section('style')
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container" style="height:150vh">
    @if ('100%' != $score)
    <div class=" card alert-primary box-shadow text-center mb-2">
        <span class="fs-3 fs-sm-3">Please Fill-up all data and Make it 100% Complete</span>
    </div>
    @endif
    <div class="row">
        <div class="col-5 col-sm-4 p-3">
            {{-- <div class="card p-3"> --}}
                <div class="row">
                    <h3 class="fs-sm-3 box-shadow">Completed: {{ $score}}</h3>
                    <div class="progress box-shadow" style="height: 30px;">
                        <div class="progress-bar box-shadow progress-bar-striped bg-success progress-bar-animated"
                            role="progressbar" style="width:{{ $score }}; height: 28px;">
                            <p class="fs-6"></p>
                        </div>
                    </div>

                </div>
                <div class="row pt-2">
                    <div class="alert alert-primary box-shadow" role="alert">
                        <h4 class="fs-sm-3 d-lg-inline">1. Contact and Career &nbsp &nbsp &nbsp
                            <div class="badge progress-bar progress-bar-striped progress-bar-animated d-lg-inline {{ $contact_status == 'completed' ? 'bg-success'
                                : '' }}" style="width: 100%; height: 25px;">{{ $contact_status ==
                                'completed' ? 'Completed'
                                : 'Just startd' }}</div>
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="alert alert-primary box-shadow" role="alert">
                        <h4 class="fs-sm-3 d-lg-inline">2. Academic Information <div class="badge progress-bar progress-bar-striped progress-bar-animated {{ $education_status == 'completed' ? 'bg-success'
                                : 'bg-danger' }} d-lg-inline" style="width: 100%; height: 25px;">{{ $education_status
                                == 'completed' ? 'Completed': '0% Complete' }}</div>
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="alert alert-primary box-shadow" role="alert">
                        <h4 class="fs-sm-3 d-lg-inline">3. Skills Information &nbsp &nbsp &nbsp &nbsp<div class="badge progress-bar progress-bar-striped progress-bar-animated {{ $skill_status == 'completed' ? 'bg-success'
                                : 'bg-danger' }} d-lg-inline" style="width: 100%; height: 25px;">{{ $skill_status ==
                                'completed' ? 'Completed': '0% Complete' }}</div>
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="alert alert-primary box-shadow" role="alert">
                        <h4 class="fs-sm-3">4. Personal Information &nbsp<div class="badge progress-bar progress-bar-striped progress-bar-animated {{ $personal_status == 'completed' ? 'bg-success'
                                : 'bg-danger' }} d-lg-inline" style="width: 100%; height: 25px;">{{ $personal_status ==
                                'completed' ? 'Completed': '0% Complete' }}</div>
                        </h4>
                    </div>
                </div>
                @if ('100%' != $score)
                <div class="row ">
                    <div class="alert alert-primary box-shadow" role="alert">
                        <h4 class="fs-sm-3">@if ('standardcv' == $selected)
                            You have Selected Standard CV
                            @else
                            You have not Select a Template
                            @endif </h4>
                    </div>
                </div>
                @endif
                {{--
            </div> --}}
        </div>

        @if ('start' == $contact_status)
        <div class="col-7 col-sm-5" style="z-index:11">
            @include('resume.Contact-data')
        </div>
        @endif

        @if ('start' == $education_status)
        <div class="col-7 col-sm-5" style="z-index:11">
            @include('resume.education-data')
        </div>
        @endif

        @if ('start' == $skill_status)
        <div class="col-7 col-sm-5" style="z-index:11">
            @include('resume.skill-data')
        </div>
        @endif

        @if ('start' == $personal_status)
        <div class="col-7 col-sm-5" style="z-index:11">
            @include('resume.personal-data')
        </div>
        @endif

        @if ('100%' == $score)
        <div class="col-7 col-sm-5" style="z-index:11"><br>
            <p class="alert alert-success text-center fs-4 fs-sm-3"> Great, You Have Completed all Steps</p>
            <div class="text-center"><img src="{{ asset('gif/happy.gif') }}" alt=""
                    style="height: 250px; width: 250px;"></div><br>
            <p class="text-center"><a href="{{ route('cvgenerate') }}" class="button-17 bg-warning btn-lg">Click Here to
                    Generate Your Cv </a></p>
        </div>
        @endif
        <div class="col col-sm-3" style="z-index:11">
            <div class="card border-light bg-transparent p-2">
                <a href="{{ route('alldata') }}" class="button-17 fs-5 mt-3"><b>View Your Saved
                        Info.</b></a>
                <a href="{{ route('pdfhistory') }}" class="button-17 fs-5 mt-3"><b>View all Saved CV</b></a>

                <a href="{{ route('contactedit') }}" class="button-17 fs-5 mt-3"><b>Edit Contact
                        Info.</b></a>

                <a href="{{ route('educationedit') }}" class="button-17 fs-5 mt-3"><b>Edit Education
                        Info.</b></a>
                <a href="{{ route('skilledit') }}" class="button-17 fs-5 mt-3"><b>Edit Skill Info.</b></a>

                <a href="{{ route('personaledit') }}" class="button-17 fs-5 mt-3"><b>Edit Personal
                        Info.</b></a>
            </div>
        </div>
    </div>

    @endsection