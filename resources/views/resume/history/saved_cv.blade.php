@extends('layouts.app')

@section('content')
<div class="container-fluid pt-4" style="height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6">
            <div class="card">
                <div class="card-header text-center fs-4">
                    Hello, <span class="badge bg-warning text-dark">{{ Auth::user()->name }}</span> <br>
                    Your All CV History
                </div>
                <div class="card-body fs-5">
                    <div class="table-responsive fs-sm-1">
                        <table class="table table-bordered table-hover border-warning">
                            <tr>
                                <td>File</td>
                                <td>View</td>
                                <td>Download</td>
                                <td>Size</td>
                                <td>Generated</td>
                            </tr>
                            @foreach ( $pdf as $p)
                            <tr>
                                <td>{{ $p->pdf_name }}</td>
                                <td><a href="{{ asset($p->pdf_path) }}" class="button-16 bg-warning btn-sm"
                                        target="_blank">Open</a></td>
                                <td><a href="{{ asset($p->pdf_path) }}" class="button-16 bg-warning btn-sm"
                                        download>Download</a>
                                </td>
                                <td>{{ number_format(File::size($p->pdf_path)/1000,'0') }} kb</td>
                                <td>{{ $p->created_at->format('d M y h:i:sa') }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection