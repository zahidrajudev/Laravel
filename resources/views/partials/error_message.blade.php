@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible fade show fs-sm-2" role="alert">
    <strong>{{ $error }} </strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endforeach
@endif

@if (session()->has('error'))
<div id="errorMsgDiv" class="alert alert-danger alert-dismissible fade show float-start" role="alert">
    <strong id="errorMsg" class=""> {{ session('error') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif