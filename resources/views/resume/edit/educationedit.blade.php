@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card p-4 box-shadow">
                <div class="education-datalh-1" style="padding-right: 4px; ">
                    <form action="{{ route('educationupdate') }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="card-header text-center fs-4">
                            Honours Education Info.
                        </div>
                        {{-- Honours Start--}}
                        <div class="mb-3">
                            <label for="honours_institue" class="form-label">Name of Institute</label>
                            <input type="text"
                                class="form-control @error('honours_institue') is-invalid @enderror {{ old('honours_institue') ? 'is-valid':'' }}"
                                name="honours_institue" id="honours_institue" placeholder="Honours Institute Name"
                                value="{{ old('honours_institue') ? old('honours_institue') : $resume->honours_institue }}">

                            @error('honours_institue')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('honours_institue') && old('honours_institue'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="honours_versity" class="form-label">University Name</label>
                            <input type="text"
                                class="form-control @error('honours_versity') is-invalid @enderror {{ old('honours_versity') ? 'is-valid':'' }}"
                                name="honours_versity" id="honours_versity" placeholder="Honours University Name"
                                value="{{ old('honours_versity') ? old('honours_versity') : $resume->honours_versity }}">

                            @error('honours_versity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('honours_versity') && old('honours_versity'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="honours_subject" class="form-label">Subject Name</label>
                            <input type="text"
                                class="form-control @error('honours_subject') is-invalid @enderror {{ old('honours_subject') ? 'is-valid':'' }}"
                                name="honours_subject" id="honours_subject" placeholder="Honours Subject Name"
                                value="{{ old('honours_subject') ? old('honours_subject') : $resume->honours_subject }}">

                            @error('honours_subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('honours_subject') && old('honours_subject'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="honours_result" class="form-label">Result</label>
                            <input type="text"
                                class="form-control @error('honours_result') is-invalid @enderror {{ old('honours_result') ? 'is-valid':'' }}"
                                name="honours_result" id="honours_result" placeholder="Honours Result"
                                value="{{ old('honours_result') ? old('honours_result') : $resume->honours_result }}">

                            @error('honours_result')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('honours_result') && old('honours_result'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="honours_passing" class="form-label">Passing Year</label>
                            <input type="text"
                                class="form-control @error('honours_passing') is-invalid @enderror {{ old('honours_passing') ? 'is-valid':'' }}"
                                name="honours_passing" id="honours_passing" placeholder="Honours Passing Year"
                                value="{{ old('honours_passing') ? old('honours_passing') : $resume->honours_passing }}">

                            @error('honours_passing')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('honours_passing') && old('honours_passing'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>
                        {{-- Honours End--}}

                        {{-- HSC Start--}}
                        <div class="row text-center pb-1">
                            <span class="border border-warning p-1">HSC Education Info.</span>
                        </div>
                        <div class="mb-3">
                            <label for="hsc_institue" class="form-label">Name of Institute</label>
                            <input type="text"
                                class="form-control @error('hsc_institue') is-invalid @enderror {{ old('hsc_institue') ? 'is-valid':'' }}"
                                name="hsc_institue" id="hsc_institue" placeholder="HSC College Name"
                                value="{{ old('hsc_institue') ? old('hsc_institue') : $resume->hsc_institue }}">

                            @error('hsc_institue')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('hsc_institue') && old('hsc_institue'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="hsc_board" class="form-label">HSC Board Name</label>
                            <input type="text"
                                class="form-control @error('hsc_board') is-invalid @enderror {{ old('hsc_board') ? 'is-valid':'' }}"
                                name="hsc_board" id="hsc_board" placeholder="HSC Board Name"
                                value="{{ old('hsc_board') ? old('hsc_board') : $resume->hsc_board }}">

                            @error('hsc_board')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('hsc_board') && old('hsc_board'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>


                        <div class="mb-3">
                            <label for="hsc_group" class="form-label">HSC Group Name</label>
                            <input type="text"
                                class="form-control @error('hsc_group') is-invalid @enderror {{ old('hsc_group') ? 'is-valid':'' }}"
                                name="hsc_group" id="hsc_group" placeholder="HSC Group Name"
                                value="{{ old('hsc_group') ? old('hsc_group') : $resume->hsc_group }}">

                            @error('hsc_group')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('hsc_group') && old('hsc_group'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="hsc_result" class="form-label">HSC Result</label>
                            <input type="text"
                                class="form-control @error('hsc_result') is-invalid @enderror {{ old('hsc_result') ? 'is-valid':'' }}"
                                name="hsc_result" id="hsc_result" placeholder="HSC Result"
                                value="{{ old('hsc_result') ? old('hsc_result') : $resume->hsc_result }}">

                            @error('hsc_result')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('hsc_result') && old('hsc_result'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif

                        </div>

                        <div class="mb-3">
                            <label for="hsc_passing" class="form-label">HSC Passing Year</label>
                            <input type="text"
                                class="form-control @error('hsc_passing') is-invalid @enderror {{ old('hsc_passing') ? 'is-valid':'' }}"
                                name="hsc_passing" id="hsc_passing" placeholder="HSC Passing Year"
                                value="{{ old('hsc_passing') ? old('hsc_passing') : $resume->hsc_passing }}">

                            @error('hsc_passing')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('hsc_passing') && old('hsc_passing'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>
                        {{-- HSC End --}}

                        {{-- SSC Start--}}
                        <div class="row text-center pb-1">
                            <span class="border border-warning p-1">SSC Education Info.</span>
                        </div>
                        <div class="mb-3">
                            <label for="ssc_institue" class="form-label">Name of Institute</label>
                            <input type="text"
                                class="form-control @error('ssc_institue') is-invalid @enderror {{ old('ssc_institue') ? 'is-valid':'' }}"
                                name="ssc_institue" id="ssc_institue" placeholder="SSC School Name"
                                value="{{ old('ssc_institue') ? old('ssc_institue') : $resume->ssc_institue }}">

                            @error('ssc_institue')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('ssc_institue') && old('ssc_institue'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>


                        <div class="mb-3">
                            <label for="ssc_board" class="form-label">SSC Board Name</label>
                            <input type="text"
                                class="form-control @error('ssc_board') is-invalid @enderror {{ old('ssc_board') ? 'is-valid':'' }}"
                                name="ssc_board" id="ssc_board" placeholder="SSC Board Name"
                                value="{{ old('ssc_board') ? old('ssc_board') : $resume->ssc_board }}">

                            @error('ssc_board')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('ssc_board') && old('ssc_board'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="ssc_group" class="form-label">SSC Group Name</label>
                            <input type="text"
                                class="form-control @error('ssc_group') is-invalid @enderror {{ old('ssc_group') ? 'is-valid':'' }}"
                                name="ssc_group" id="ssc_group" placeholder="SSC Group Name"
                                value="{{ old('ssc_group') ? old('ssc_group') : $resume->ssc_group }}">

                            @error('ssc_group')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('ssc_group') && old('ssc_group'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="ssc_result" class="form-label">Result</label>
                            <input type="text"
                                class="form-control @error('ssc_result') is-invalid @enderror {{ old('ssc_result') ? 'is-valid':'' }}"
                                name="ssc_result" id="ssc_result" placeholder="SSC Result"
                                value="{{ old('ssc_result') ? old('ssc_result') : $resume->ssc_result }}">

                            @error('ssc_result')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('ssc_result') && old('ssc_result'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="ssc_passing" class="form-label">Passing Year</label>
                            <input type="text"
                                class="form-control @error('ssc_passing') is-invalid @enderror {{ old('ssc_passing') ? 'is-valid':'' }}"
                                name="ssc_passing" id="ssc_passing" placeholder="SSC Passing Year"
                                value="{{ old('ssc_passing') ? old('ssc_passing') : $resume->ssc_passing }}">

                            @error('ssc_passing')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @if (!$errors->first('ssc_passing') && old('ssc_passing'))
                            <span class="valid-feedback" role="alert">
                                <strong>Looks Good</strong>
                            </span>
                            @endif
                        </div>
                        {{-- SSC End --}}

                        <div class="mb-3 text-center">
                            <button type="submit" class="button-17 bg-warning">Submit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection