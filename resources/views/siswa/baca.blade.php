@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">

        </div>
    </div>
    <div class="row mt-4 ">
        <div class="card card-body">
            <h2 align="center" class="mb-4">{{ $data->nm_buku }}</h2>
            <iframe src="{{ \Storage::url($data->file) }}" height="600px" max-width="1000px" frameborder="0"></iframe>
        </div>
    </div>
@endsection
