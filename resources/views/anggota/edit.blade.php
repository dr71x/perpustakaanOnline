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
                    <form action="{{ route('updateSiswa') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        {!! Form::hidden('id', $user->id) !!}
                        <div class="form-group">
                            {!! Form::text('NIS', $anggota->NIS, ['class' => 'form-control', 'placeholder' => 'Masukkan NIS Anda']) !!}
                            <span class="text-helper">{{ $errors->first('NIS') }}</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Masukkan User Name Di Sini']) !!}
                                    <span class="text-helper">{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('nama', $anggota->Nama, ['class' => 'form-control', 'placeholder' => 'Masukkan User Name Di Sini']) !!}
                                    <span class="text-helper">{{ $errors->first('nama') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::select('jenkel', ['L' => 'Laki-laki', 'p' => 'Perempuan'], $anggota->jenkel, ['class' => 'form-control', 'placeholder' => 'Pilih Jenis Kelamin']) !!}
                                    <span class="text-helper">{{ $errors->first('jenkel') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Masukkan Email Anda']) !!}
                                    <span class="text-helper">{{ $errors->first('email') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::select('kelas_id', $kelas, $anggota->kelas_id, ['class' => 'form-control select2', 'placeholder' => 'Pilih Kelas']) !!}
                                    <span class="text-helper">{{ $errors->first('kelas_id') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                {!! Form::text('alamat', $anggota->alamat, ['class' => 'form-control', 'placeholder' => 'Masukkan Alamat Disini']) !!}
                                <span class="text-helper">{{ $errors->first('alamat') }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('tempat', $anggota->tempat, ['class' => 'form-control', 'placeholder' => 'Masukkan Tempat Lahir']) !!}
                                    <span class="text-helper">{{ $errors->first('tempat') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::date('tgl', $anggota->tgl, ['class' => 'form-control']) !!}
                                    <span class="text-helper">{{ $errors->first('tgl') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>
                                        Foto Lama
                                    </h5>
                                    <img src="{{ \Storage::url($user->gambar) }}" width="200px" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- {!! Form::label('gambar', 'Pilih Foto') !!} --}}
                                            <input type="file" name="gambar" class="dropify" data-height="300" />
                                            {{-- <span class="text-helper">{{ $errors->first('gambar') }}</span> --}}
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
