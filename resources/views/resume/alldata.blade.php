@extends('layouts.app')

@section('content')
<div class="container-fluid pt-4" style="height: 100%;">
    <div class="row">
        <div class="col-12 col-sm-4">
            <div class="card">
                <div class="card-header text-center fs-4">
                    Your Contact Information
                </div>
                <div class="card-body fs-5">
                    <table class="table table-bordered table-hover border-warning">
                        <tr>
                            <td style="width:40%">Care Of</td>
                            <td>{{ $resume->care_of }}</td>
                        </tr>
                        <tr>
                            <td>Village name</td>
                            <td>{{ $resume->village }}</td>
                        </tr>
                        <tr>
                            <td>Post Office Name</td>
                            <td>{{ $resume->post_office }}</td>
                        </tr>
                        <tr>
                            <td>Upazila Name</td>
                            <td>{{ $resume->upazila }}</td>
                        </tr>
                        <tr>
                            <td>District Name</td>
                            <td>{{ $resume->district }}</td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>{{ $resume->phone }}</td>
                        </tr>
                        <tr>
                            <td>Email Address</td>
                            <td>{{ $resume->email }}</td>
                        </tr>
                        <tr>
                            <td>Career Object</td>
                            <td>{{ $resume->career }}</td>
                        </tr>
                    </table>
                    <div class="card-footer text-center">
                        <a href="" class="button-17 bg-warning">Edit Contact Info.</a>
                    </div>
                    <div class="card-header text-center fs-4 mt-4">
                        Skill Information
                    </div>
                    <table class="table table-bordered table-hover border-warning">
                        <tr>
                            <td style="width:40%">MS Office Program Names</td>
                            <td>{{ $resume->computer_ms }}</td>
                        </tr>
                        <tr>
                            <td>About Internet</td>
                            <td>{{ $resume->internet }}</td>
                        </tr>
                        <tr>
                            <td>English Language</td>
                            <td>{{ $resume->english }}</td>
                        </tr>
                        <tr>
                            <td>Bengali Language</td>
                            <td>{{ $resume->bangla }}</td>
                        </tr>
                    </table>
                    <div class="card-footer text-center">
                        <a href="" class="button-17 bg-warning">Edit Skill Info.</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card">
                <div class="card-header text-center fs-4">
                    Your Education Information
                </div>
                <div class="card-body fs-5">
                    <div class="card-header text-center fs-5 p-0">
                        Honours Information
                    </div>
                    <table class="table table-bordered table-hover border-warning">
                        <tr>
                            <td style="width:40%">Name of Institute</td>
                            <td>{{ $resume->honours_institue }}</td>
                        </tr>
                        <tr>
                            <td>University Name</td>
                            <td>{{ $resume->honours_versity }}</td>
                        </tr>
                        <tr>
                            <td>Subject Name</td>
                            <td>{{ $resume->honours_subject }}</td>
                        </tr>
                        <tr>
                            <td>Result</td>
                            <td>{{ $resume->honours_result }}</td>
                        </tr>
                        <tr>
                            <td>Passing Year</td>
                            <td>{{ $resume->honours_passing }}</td>
                        </tr>
                    </table>
                    <div class="card-header text-center fs-5 p-0">
                        HSC Information
                    </div>
                    <table class="table table-bordered table-hover border-warning">
                        <tr>
                            <td style="width:40%">Name of Institute</td>
                            <td>{{ $resume->hsc_institue }}</td>
                        </tr>
                        <tr>
                            <td>HSC Board Name</td>
                            <td>{{ $resume->hsc_board }}</td>
                        </tr>
                        <tr>
                            <td>HSC Group Name</td>
                            <td>{{ $resume->hsc_group }}</td>
                        </tr>
                        <tr>
                            <td>HSC Result</td>
                            <td>{{ $resume->hsc_result }}</td>
                        </tr>
                        <tr>
                            <td>HSC Passing Year</td>
                            <td>{{ $resume->hsc_passing }}</td>
                        </tr>
                    </table>
                    <div class="card-header text-center fs-5 p-0">
                        SSC Information
                    </div>
                    <table class="table table-bordered table-hover border-warning">
                        <tr>
                            <td style="width:40%">Name of Institute</td>
                            <td>{{ $resume->ssc_institue }}</td>
                        </tr>
                        <tr>
                            <td>SSC Board Name</td>
                            <td>{{ $resume->ssc_board }}</td>
                        </tr>
                        <tr>
                            <td>SSC Group Name</td>
                            <td>{{ $resume->ssc_group }}</td>
                        </tr>
                        <tr>
                            <td>SSC Result</td>
                            <td>{{ $resume->ssc_result }}</td>
                        </tr>
                        <tr>
                            <td>SSC Passing Year</td>
                            <td>{{ $resume->ssc_passing }}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer text-center">
                    <a href="" class="button-17 bg-warning">Edit Education Info.</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card">
                <div class="card-header text-center fs-4">
                    Your Personal Information
                </div>
                <div class="card-body fs-5">
                    <div class="card-header text-center fs-5 p-0">
                        Personal Information
                    </div>
                    <table class="table table-bordered table-hover border-warning">
                        <tr>
                            <td style="width:40%">Your Full Name</td>
                            <td>{{ $resume->computer_ms }}</td>
                        </tr>
                        <tr>
                            <td>Your Father's Name</td>
                            <td>{{ $resume->internet }}</td>
                        </tr>
                        <tr>
                            <td>Your Mother's Name</td>
                            <td>{{ $resume->english }}</td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>{{ $resume->bangla }}</td>
                        </tr>
                        <tr>
                            <td>Nationality</td>
                            <td>{{ $resume->bangla }}</td>
                        </tr>
                        <tr>
                            <td>Religion</td>
                            <td>{{ $resume->bangla }}</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>{{ $resume->bangla }}</td>
                        </tr>
                        <tr>
                            <td>Marital Status</td>
                            <td>{{ $resume->bangla }}</td>
                        </tr>
                        <tr>
                            <td>Height</td>
                            <td>{{ $resume->bangla }}</td>
                        </tr>
                        <tr>
                            <td>Weight</td>
                            <td>{{ $resume->bangla }}</td>
                        </tr>
                        <tr>
                            <td>NID</td>
                            <td>{{ $resume->bangla }}</td>
                        </tr>
                        <tr>
                            <td>Blood Group</td>
                            <td>{{ $resume->bangla }}</td>
                        </tr>
                    </table>
                    <div class="card-header text-center fs-5 p-0">
                        Permanent Address
                    </div>
                    <div class="card-body fs-5">
                        <table class="table table-bordered table-hover border-warning">
                            <tr>
                                <td style="width:40%">Care Of</td>
                                <td>{{ $resume->care_of }}</td>
                            </tr>
                            <tr>
                                <td>Permanent Care of</td>
                                <td>{{ $resume->village }}</td>
                            </tr>
                            <tr>
                                <td>Permanent Village</td>
                                <td>{{ $resume->post_office }}</td>
                            </tr>
                            <tr>
                                <td>Permanent Post Office</td>
                                <td>{{ $resume->upazila }}</td>
                            </tr>
                            <tr>
                                <td>Permanent upazila</td>
                                <td>{{ $resume->district }}</td>
                            </tr>
                            <tr>
                                <td>Permanent District</td>
                                <td>{{ $resume->phone }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <a href="" class="button-17 bg-warning">Edit Informations</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection