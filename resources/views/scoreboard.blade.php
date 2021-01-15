@extends('layouts.master')
@push('hscript')
<style type="text/css">
    .centerconntol {
        margin-top: 10%;
        max-width: 500px;
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
<div class="row mt-4">
    <div class="col-sm"></div>
    <div class="col-sm">
        <div class="bg-white p-4 shadow">
            <img src="{{ asset('storage/img/logo.jpg') }}" alt="Logo" class="img-fluid mx-auto d-block" width="100px" />
            <h1 class="text-center mb-4">Scoreboard</h1>
            <hr/>
            <table class="table">
                <tbody>
                    @foreach($players as $p)
                    <tr>
                        <td>#{{ ($players->currentPage()-1)*$players->perpage() + $loop->index + 1 }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->total_score }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm"></div>
</div>
@endsection