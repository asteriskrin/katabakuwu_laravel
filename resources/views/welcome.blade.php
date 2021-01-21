@extends('layouts.master')
@push('hscript')
<style type="text/css">
    .centerconntol {
        margin-top: 10%;
    }

    .centerconn {
        display: block;
        margin-left: auto;
        margin-right: auto;
        z-index: 2;
        text-align: center;
    }
</style>
@endpush
@section('main')
<div class="centerconntol">
    <img src="{{ asset('storage/img/logo.jpg') }}" class="centerconn img-fluid" width="200px"/>
    <h1 class="centerconn m-4" style="color: #0c6e43;">Katabakuwu</h1>
    <a href="download/katabakuwu.zip" class="centerconn btn btn-primary" style="max-width: 200px;">Download Now!</a>
</div>
@endsection