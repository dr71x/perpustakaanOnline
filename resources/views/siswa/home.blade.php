@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">

        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card card-body" style="box-shadow: 0 10px 15px rgba(0,0,0,0.2); min-height: 200px;">
                <h3>Buku Yang Dipinjam</h3>
                <div class="row">
                    <div class="col-md-8">
                        <img
                            src="https://img.icons8.com/external-justicon-blue-justicon/64/000000/external-books-science-justicon-blue-justicon.png" />
                    </div>
                    <div class="col-md-4" style="margin-top: -10px;">
                        <h1 align="right">{{ $pinjam }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body" style="box-shadow: 0 10px 15px rgba(0,0,0,0.2);min-height: 200px;">
                <h3> Belum Konfirmasi</h3>
                <div class="row">
                    <div class="col-md-8">
                        <img
                            src="https://img.icons8.com/external-wanicon-lineal-color-wanicon/64/000000/external-books-education-wanicon-lineal-color-wanicon.png" />
                    </div>
                    <div class="col-md-4" style="margin-top: -10px;">
                        <h1 align="right">{{ $belum }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body" style="box-shadow: 0 10px 15px rgba(0,0,0,0.2); min-height: 200px;">
                <h3> Total Peminjaman</h3>
                <div class="row">
                    <div class="col-md-8">
                        <img
                            src="https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/64/000000/external-books-learning-flatart-icons-lineal-color-flatarticons.png" />
                    </div>
                    <div class="col-md-4" style="margin-top: -10px;">
                        <h1 align="right">{{ $selesai }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
