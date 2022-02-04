@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">

        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-10">
            <div class="card" style="box-shadow: 0 10px 15px rgba(0,0,0,0.25);">
                <h4 align="center">{{ $title }}</h4>
                <h3 align="center">{{ $buku->nm_buku }}</h3>
                <div class="card-body">
                    <iframe src="{{ \Storage::url($buku->file) }}" width="780px" height="800px" align="center" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
