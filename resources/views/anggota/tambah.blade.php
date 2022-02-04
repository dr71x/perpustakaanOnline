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
                    {!! Form::model($data, ['route' => $action, 'files' => true, 'method' => $method]) !!}
                    <div class="form-group">
                        {!! Form::text('NIS', null, ['class' => 'form-control', 'placeholder' => 'Masukkan NIS Anda']) !!}
                        <span class="text-helper">{{ $errors->first('NIS') }}</span>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Masukkan User Name Di Sini']) !!}
                                <span class="text-helper">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Lengkap Di Sini']) !!}
                                <span class="text-helper">{{ $errors->first('nama') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::select('jenkel', ['L' => 'Laki-laki', 'p' => 'Perempuan'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Jenis Kelamin']) !!}
                                <span class="text-helper">{{ $errors->first('jenkel') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Email Anda']) !!}
                                <span class="text-helper">{{ $errors->first('email') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::select('kelas_id', $kelas, null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Kelas']) !!}
                                <span class="text-helper">{{ $errors->first('kelas_id') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('alamat', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Alamat Disini']) !!}
                            <span class="text-helper">{{ $errors->first('alamat') }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::text('tempat', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Tempat Lahir']) !!}
                                <span class="text-helper">{{ $errors->first('tempat') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::date('tgl', null, ['class' => 'form-control']) !!}
                                <span class="text-helper">{{ $errors->first('tgl') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Masukkan Password Anda']) !!}
                                <span class="text-helper">{{ $errors->first('password') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Masukkan Lagi Password Anda']) !!}
                                <span class="text-helper">{{ $errors->first('password_confirmation') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                {{-- {!! Form::label('gambar', 'Pilih Foto') !!} --}}
                                <input type="file" name="gambar" class="dropify" data-height="300" />
                                {{-- <span class="text-helper">{{ $errors->first('gambar') }}</span> --}}
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-pink waves-effect waves-light float-right m-b-5">
                        <span>Simpan</span> <img src="https://img.icons8.com/fluency/48/000000/save.png" width="20px" />
                    </button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
