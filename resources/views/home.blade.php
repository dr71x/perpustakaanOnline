@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">

        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card card-body" style="box-shadow: 0 10px 15px rgba(0,0,0,0.2)">
                <h2>Data kelas</h2>
                <div class="row">
                    <div class="col-md-8">
                        <img
                            src="https://img.icons8.com/external-itim2101-lineal-color-itim2101/64/000000/external-classroom-education-and-learning-itim2101-lineal-color-itim2101.png" />
                    </div>
                    <div class="col-md-4" style="margin-top: -10px;">
                        <h1 align="right">{{ $kelas }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body" style="box-shadow: 0 10px 15px rgba(0,0,0,0.2);">
                <h2>Data Guru</h2>
                <div class="row">
                    <div class="col-md-8">
                        <img
                            src="https://img.icons8.com/external-justicon-flat-justicon/64/000000/external-teacher-elearning-and-education-justicon-flat-justicon.png" />
                    </div>
                    <div class="col-md-4" style="margin-top: -10px;">
                        <h1 align="right">{{ $Guru }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body" style="box-shadow: 0 10px 15px rgba(0,0,0,0.2);">
                <h2> Data Siswa</h2>
                <div class="row">
                    <div class="col-md-8">
                        <img
                            src="https://img.icons8.com/external-victoruler-linear-colour-victoruler/64/000000/external-student-education-and-school-victoruler-linear-colour-victoruler-1.png" />
                    </div>
                    <div class="col-md-4" style="margin-top: -10px;">
                        <h1 align="right">{{ $anggota }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body" style="box-shadow: 0 10px 15px rgba(0,0,0,0.2);">
                <h2> Data Buku</h2>
                <div class="row">
                    <div class="col-md-8">
                        <img src="https://img.icons8.com/external-justicon-lineal-color-justicon/64/000000/external-book-office-stationery-justicon-lineal-color-justicon.png"
                            width="50px" />
                    </div>
                    <div class="col-md-4" style="margin-top: -10px;">
                        <h1 align="right">{{ $buku }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body" style="box-shadow: 0 10px 15px rgba(0,0,0,0.2);">
                <h2>Transaksi Siswa</h2>
                <div class="row">
                    <div class="col-md-8">
                        <img
                            src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/49/000000/external-book-back-to-school-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png" />
                    </div>
                    <div class="col-md-4" style="margin-top: -10px;">
                        <h1 align="right">{{ $transSiswa }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body" style="box-shadow: 0 10px 15px rgba(0,0,0,0.2);">
                <h2>Transaksi Guru</h2>
                <div class="row">
                    <div class="col-md-8">
                        <img
                            src="https://img.icons8.com/external-justicon-flat-justicon/60/000000/external-book-education-justicon-flat-justicon-2.png" />
                    </div>
                    <div class="col-md-4" style="margin-top: -10px;">
                        <h1 align="right">{{ $transGuru }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body" style="box-shadow: 0 10px 15px rgba(0,0,0,0.2);">
                <h2>Buku Dipinjam</h2>
                <div class="row">
                    <div class="col-md-8">
                        <img
                            src="https://img.icons8.com/external-justicon-flat-justicon/60/000000/external-book-education-justicon-flat-justicon-2.png" />
                    </div>
                    <div class="col-md-4" style="margin-top: -10px;">
                        <h1 align="right">{{ $peminjaman }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body" style="box-shadow: 0 10px 15px rgba(0,0,0,0.2);">
                <h2>Total Buku</h2>
                <div class="row">
                    <div class="col-md-8">
                        <img
                            src="https://img.icons8.com/external-justicon-flat-justicon/60/000000/external-book-education-justicon-flat-justicon-2.png" />
                    </div>
                    <div class="col-md-4" style="margin-top: -10px;">
                        <h1 align="right">{{ $semuabuku }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
