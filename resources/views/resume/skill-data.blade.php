<div class="card p-4 box-shadow">
    <div class="skill-data lh-1" style="padding-right: 4px; ">
        <form action="{{ route('skillstore') }}" method="POST">
            @csrf
            @method('patch')
            <div class="card-header text-center fs-4">
                Computer Skills and Language
            </div>
            {{-- Computer start --}}
            <div class="mb-3">
                <label for="computer_ms" class="form-label">MS Office Program Names</label>
                <input type="text"
                    class="form-control @error('computer_ms') is-invalid @enderror {{ old('computer_ms') ? 'is-valid':'' }}"
                    name="computer_ms" id="computer_ms"
                    value="{{ old('computer_ms') ? old('computer_ms') : 'Microsoft Word, Microsoft, Excel, Microsoft Power.' }}">

                @error('computer_ms')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @if (!$errors->first('computer_ms') && old('computer_ms'))
                <span class="valid-feedback" role="alert">
                    <strong>Looks Good</strong>
                </span>
                @endif
            </div>

            <div class="mb-3">
                <label for="internet" class="form-label">About Internet</label>
                <input type="text"
                    class="form-control @error('internet') is-invalid @enderror {{ old('internet') ? 'is-valid':'' }}"
                    name="internet" id="internet"
                    value="{{ old('internet') ? old('internet') : 'Internet Browsing.' }}">

                @error('internet')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @if (!$errors->first('internet') && old('internet'))
                <span class="valid-feedback" role="alert">
                    <strong>Looks Good</strong>
                </span>
                @endif
            </div>
            {{-- Computer End --}}

            {{-- Language Skills start --}}
            <div class="mb-3">
                <label for="english" class="form-label">English Language</label>
                <input type="text"
                    class="form-control @error('english') is-invalid @enderror {{ old('english') ? 'is-valid':'' }}"
                    name="english" id="english"
                    value="{{ old('english') ? old('english') : 'Fluent in speaking, reading and writing Bengali as mother tongue.' }}">

                @error('english')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @if (!$errors->first('english') && old('english'))
                <span class="valid-feedback" role="alert">
                    <strong>Looks Good</strong>
                </span>
                @endif
            </div>

            <div class="mb-3">
                <label for="bangla" class="form-label">Bengali Language</label>
                <input type="text"
                    class="form-control @error('bangla') is-invalid @enderror {{ old('bangla') ? 'is-valid':'' }}"
                    name="bangla" id="bangla"
                    value="{{ old('bangla') ? old('bangla') : 'Fluent in speaking, reading and writing in English.' }}">

                @error('bangla')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @if (!$errors->first('bangla') && old('bangla'))
                <span class="valid-feedback" role="alert">
                    <strong>Looks Good</strong>
                </span>
                @endif
            </div>
            {{-- Language Skills End --}}
            <div class="mb-3 text-center">
                <button type="submit" class="button-17 bg-warning">Submit Data</button>
            </div>
        </form>
    </div>
</div>