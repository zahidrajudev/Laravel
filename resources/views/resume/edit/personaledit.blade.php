@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card p-4 box-shadow">
                <div class="personal-data" style="padding-right: 4px; ">
                    <form action="{{ route('personalupdate') }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="card-header text-center fs-4">
                            Personal Informations
                        </div>
                        {{-- Personal start --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Full Name</label>
                            <input type="text"
                                class="form-control @error('name') is-invalid @enderror {{ old('name') ? 'is-valid':'' }}"
                                name="name" id="name" placeholder="Your Full name"
                                value="{{ old('name') ? old('name') : $resume->name }}">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('name') && old('name'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="father_name" class="form-label">Your Father's Name</label>
                            <input type="text"
                                class="form-control @error('father_name') is-invalid @enderror {{ old('father_name') ? 'is-valid':'' }}"
                                name="father_name" id="father_name" placeholder="Your Father's Name"
                                value="{{ old('father_name') ? old('father_name') : $resume->father_name }}">

                            @error('father_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('father_name') && old('father_name'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="mother_name" class="form-label">Your Mother's Name</label>
                            <input type="text"
                                class="form-control @error('mother_name') is-invalid @enderror {{ old('mother_name') ? 'is-valid':'' }}"
                                name="mother_name" id="mother_name" placeholder="Your Mother's Name"
                                value="{{ old('mother_name') ? old('mother_name') : $resume->mother_name }}">

                            @error('mother_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('mother_name') && old('mother_name'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif

                        </div>

                        <div class="mb-3">
                            <label for="birth_date" class="form-label">Date of Birth</label>
                            <input type="date"
                                class="form-control @error('birth_date') is-invalid @enderror {{ old('birth_date') ? 'is-valid':'' }}"
                                name="birth_date" id="birth_date" placeholder="Date Of Birth"
                                value="{{ old('birth_date')  ? old('birth_date') : $resume->birth_date}}">
                            @error('birth_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('birth_date') && old('birth_date'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif

                        </div>

                        <div class="mb-3">
                            <label for="nationality" class="form-label">Nationality</label>
                            <input type="text"
                                class="form-control @error('nationality') is-invalid @enderror {{ old('nationality') ? 'is-valid':'' }}"
                                name="nationality" id="nationality"
                                value="{{ old('nationality') ? old('nationality') : $resume->nationality }}">

                            @error('nationality')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('nationality') && old('nationality'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="religion" class="form-label">Religion</label>
                            <input type="text"
                                class="form-control @error('religion') is-invalid @enderror {{ old('religion') ? 'is-valid':'' }}"
                                name="religion" id="religion" placeholder="Your Religion"
                                value="{{ old('religion') ? old('religion') : $resume->religion}}">

                            @error('religion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('religion') && old('religion'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="sex" class="form-label">Gender</label>
                            <input type="text"
                                class="form-control @error('sex') is-invalid @enderror {{ old('sex') ? 'is-valid':'' }}"
                                name="sex" id="sex" placeholder="Male / Female"
                                value="{{ old('sex') ? old('sex') : $resume->sex }}">
                            @error('sex')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('sex') && old('sex'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="marital_status" class="form-label">Marital Status</label>
                            <input type="text"
                                class="form-control @error('marital_status') is-invalid @enderror {{ old('marital_status') ? 'is-valid':'' }}"
                                name="marital_status" id="Unmarried / Married" placeholder=" Marital Status"
                                value="{{ old('marital_status') ? old('marital_status') : $resume->marital_status }}">

                            @error('marital_status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('marital_status') && old('marital_status'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="height" class="form-label">Height</label>
                            <input type="text"
                                class="form-control @error('height') is-invalid @enderror {{ old('height') ? 'is-valid':'' }}"
                                name="height" id="height" placeholder="5 Feet 4 Inch"
                                value="{{ old('height') ? old('height') : $resume->height }}">
                            @error('height')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('height') && old('height'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="weight" class="form-label">Weight</label>
                            <input type="text"
                                class="form-control @error('weight') is-invalid @enderror {{ old('weight') ? 'is-valid':'' }}"
                                name="weight" id="weight" placeholder="Ex. 55 KG"
                                value="{{ old('weight') ? old('weight') : $resume->weight }}">
                            @error('weight')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('weight') && old('weight'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="nid" class="form-label">NID</label>
                            <input type="text"
                                class="form-control @error('nid') is-invalid @enderror {{ old('nid') ? 'is-valid':'' }}"
                                name="nid" id="nid" placeholder="Ex.1784268765"
                                value="{{ old('nid') ? old('nid') : $resume->nid }}">

                            @error('nid')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('nid') && old('nid'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="blood_group" class="form-label">Blood Group</label>
                            <input type="text"
                                class="form-control @error('blood_group') is-invalid @enderror {{ old('blood_group') ? 'is-valid':'' }}"
                                name="blood_group" id="blood_group" placeholder="Ex. A+ (A Positive)"
                                value="{{ old('blood_group') ? old('blood_group') : $resume->blood_group }}">

                            @error('blood_group')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('blood_group') && old('blood_group'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>
                        {{-- Personal End --}}

                        {{-- Permanent start --}}

                        <div class="row text-center pb-1">
                            <span class="border border-warning p-1">Permanent Address</span>
                        </div>
                        <div class="mb-3">
                            <label for="pa_care_of" class="form-label">Permanent Care of</label>
                            <input type="text"
                                class="form-control @error('pa_care_of') is-invalid @enderror {{ old('pa_care_of') ? 'is-valid':'' }}"
                                name="pa_care_of" id="pa_care_of" placeholder="House name or Your father's name"
                                value="{{ old('pa_care_of')  ? old('pa_care_of') : $resume->pa_care_of}}">

                            @error('pa_care_of')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('pa_care_of') && old('pa_care_of'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="pa_village" class="form-label">Permanent Village name</label>
                            <input type="text"
                                class="form-control @error('pa_village') is-invalid @enderror {{ old('pa_village') ? 'is-valid':'' }}"
                                name="pa_village" id="pa_village" placeholder="Village name"
                                value="{{ old('pa_village')  ? old('pa_village') : $resume->pa_village}}">

                            @error('pa_village')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('pa_village') && old('pa_village'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="pa_post_office" class="form-label">Permanent Post Office Name</label>
                            <input type="text"
                                class="form-control @error('pa_post_office') is-invalid @enderror {{ old('pa_post_office') ? 'is-valid':'' }}"
                                name="pa_post_office" id="pa_post_office" placeholder="Post Office Name"
                                value="{{ old('pa_post_office') ? old('pa_post_office') : $resume->pa_post_office }}">

                            @error('pa_post_office')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('pa_post_office') && old('pa_post_office'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif

                        </div>

                        <div class="mb-3">
                            <label for="pa_upazila" class="form-label">Permanent upazila Name</label>
                            <input type="text"
                                class="form-control @error('pa_upazila') is-invalid @enderror {{ old('pa_upazila') ? 'is-valid':'' }}"
                                name="pa_upazila" id="pa_upazila" placeholder="upazila Name"
                                value="{{ old('pa_upazila')  ? old('pa_upazila') : $resume->pa_upazila}}">

                            @error('pa_upazila')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('pa_upazila') && old('pa_upazila'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="pa_district" class="form-label">Permanent District Name</label>
                            <input type="text"
                                class="form-control @error('pa_district') is-invalid @enderror {{ old('pa_district') ? 'is-valid':'' }}"
                                name="pa_district" id="pa_district" placeholder="District name"
                                value="{{ old('pa_district') ? old('pa_district') : $resume->pa_district }}">

                            @error('pa_district')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('pa_district') && old('pa_district'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>
                        {{-- Permanent End --}}

                        <div class="mb-3 text-center">
                            <button type="submit" class="button-17 bg-warning">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection