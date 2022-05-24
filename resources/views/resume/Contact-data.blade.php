{{-- Contact data start --}}
<div class="card p-4 box-shadow">
    <div class="contact-data lh-1 fs-5" style="padding-right: 4px; ">
        <form action="{{ route('contactstore') }}" method="POST">
            @csrf
            <div class="row text-center pb-1">
                <span class="border border-warning p-1">Your Present Address</span>
            </div>
            <div class="mb-3">
                <label for="care_of" class="form-label">Care of</label>
                <input type="text"
                    class="form-control @error('care_of') is-invalid @enderror {{ old('care_of') ? 'is-valid':'' }}"
                    name="care_of" id="care_of" placeholder="House name or Father's name" value="{{ old('care_of') }}">

                @error('care_of')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @if (!$errors->first('care_of') && old('care_of'))
                <span class="valid-feedback" role="alert">
                    <strong>Looks Good</strong>
                </span>
                @endif
            </div>

            <div class="mb-3">
                <label for="village" class="form-label">Village name</label>
                <input type="text"
                    class="form-control @error('village') is-invalid @enderror {{ old('village') ? 'is-valid':'' }}"
                    name="village" id="village" placeholder="Village name" value="{{ old('village') }}">

                @error('village')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @if (!$errors->first('village') && old('village'))
                <span class="valid-feedback" role="alert">
                    <strong>Looks Good</strong>
                </span>
                @endif
            </div>

            <div class="mb-3">
                <label for="post_office" class="form-label">Post Office Name</label>
                <input type="text"
                    class="form-control @error('post_office') is-invalid @enderror {{ old('post_office') ? 'is-valid':'' }}"
                    name="post_office" id="post_office" placeholder="Post Office Name" value="{{ old('post_office') }}">

                @error('post_office')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @if (!$errors->first('post_office') && old('post_office'))
                <span class="valid-feedback" role="alert">
                    <strong>Looks Good</strong>
                </span>
                @endif
            </div>

            <div class="mb-3">
                <label for="upazila" class="form-label">Upazila Name</label>
                <input type="text"
                    class="form-control @error('upazila') is-invalid @enderror {{ old('upazila') ? 'is-valid':'' }}"
                    name="upazila" id="upazila" placeholder="upazila name" value="{{ old('upazila') }}">

                @error('upazila')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @if (!$errors->first('upazila') && old('upazila'))
                <span class="valid-feedback" role="alert">
                    <strong>Looks Good</strong>
                </span>
                @endif

            </div>

            <div class="mb-3">
                <label for="district" class="form-label">District Name</label>
                <input type="text"
                    class="form-control @error('district') is-invalid @enderror {{ old('district') ? 'is-valid':'' }}"
                    name="district" id="district" placeholder="District name" value="{{ old('district') }}">

                @error('district')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @if (!$errors->first('district') && old('district'))
                <span class="valid-feedback" role="alert">
                    <strong>Looks Good</strong>
                </span>
                @endif
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text"
                    class="form-control @error('phone') is-invalid @enderror {{ old('phone') ? 'is-valid':'' }}"
                    name="phone" id="phone" placeholder="Phone name" value="{{ old('phone') }}">

                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @if (!$errors->first('phone') && old('phone'))
                <span class="valid-feedback" role="alert">
                    <strong>Looks Good</strong>
                </span>
                @endif
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email"
                    class="form-control @error('email') is-invalid @enderror {{ old('email') ? 'is-valid':'' }}"
                    name="email" id="email" placeholder="Email Address" value="{{ old('email') }}">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @if (!$errors->first('email') && old('email'))
                <span class="valid-feedback" role="alert">
                    <strong>Looks Good</strong>
                </span>
                @endif
            </div>
            {{-- Contact data End --}}

            {{-- Career data Start --}}

            <div class="mb-3">
                <label for="career" class="form-label">Career Object</label>
                <textarea class="form-control @error('career') is-invalid @enderror {{ old('career') ? 'is-valid':'' }}"
                    name="career" id="career" cols="5"
                    rows="7">{{ old('career') ? old('career') : 'I would like to develop my career in your institution. I would be able to perform in your institution independently and efficiently. I am hard working, young, energetic, quick learner and very passionate about my work. I have good work ethics and I never miss deadlines. I am confident, motivated and highly ambitious.' }}</textarea>

                @error('career')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @if (!$errors->first('career') && old('career'))
                <span class="valid-feedback" role="alert">
                    <strong>Looks Good</strong>
                </span>
                @endif

            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Submit Data</button>
            </div>
        </form>
        {{-- Career data End --}}
    </div>
</div>