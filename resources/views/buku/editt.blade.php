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
                <div class="card-body">
                    <form action="{{ route('updateBuku') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        {!! Form::hidden('id', $buku->id) !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('kd_buku', 'Kode Buku') !!}
                                    {!! Form::text('kd_buku', $buku->kd_buku, ['class' => 'form-control', 'placeholder' => 'Masukkan Kode Buku Di Sini']) !!}
                                    <span class="text-helper">{{ $errors->first('kd_buku') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('nm_buku', 'Nama Buku') !!}
                                    {!! Form::text('nm_buku', $buku->nm_buku, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Buku Di Sini']) !!}
                                    <span class="text-helper">{{ $errors->first('nm_buku') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('pencipta', 'Pencipta Buku') !!}
                                    {!! Form::text('pencipta', $buku->pencipta, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Pencipta Buku']) !!}
                                    <span class="text-helper">{{ $errors->first('pencipta') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('tahun', 'Tahun Buku') !!}
                                    {!! Form::text('tahun', $buku->tahun, ['class' => 'form-control', 'placeholder' => 'Masukkan Tahun Disini']) !!}
                                    <span class="text-helper">{{ $errors->first('tahun') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('usul', 'Usul Buku') !!}
                                    {!! Form::text('usul', $buku->usul, ['class' => 'form-control', 'placeholder' => 'Masukkan Usul Buku Disini']) !!}
                                    <span class="text-helper">{{ $errors->first('usul') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('total', 'Total Buku') !!}
                                    {!! Form::text('total', $buku->total, ['class' => 'form-control', 'placeholder' => 'Masukkan Total Buku Disini']) !!}
                                    <span class="text-helper">{{ $errors->first('total') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>
                                    Cover Buku Lama
                                </h5>
                                <img src="{{ \Storage::url($buku->cover) }}" width="200px">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="card">
                                        <div class="card-body">
                                            {!! Form::label('cover', 'Pilih Cover Buku') !!}
                                            <input type="file" name="cover" class="dropify" data-height="200" />
                                            <span class="text-helper">{{ $errors->first('cover') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>
                                    File Buku Lama
                                </h5>
                                <iframe src="{{ \Storage::url($buku->file) }}" frameborder="0" width="200px"></iframe>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="card">
                                        <div class="card-body">
                                            {!! Form::label('file', 'Masukkan File') !!}
                                            <input type="file" name="file" class="dropify" data-height="200" />
                                            <span class="text-helper">{{ $errors->first('file') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-pink waves-effect waves-light float-right m-b-5">
                            <span>Simpan</span> <img src="https://img.icons8.com/fluency/48/000000/save.png" width="20px" />
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
