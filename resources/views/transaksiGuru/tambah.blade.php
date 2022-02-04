@extends('layouts.main')
@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#buku_id").change(function(event) {
                var buku_id = $("#buku_id").val();
                $.get('{{ url('/buku/detail') }}/' + buku_id, function(data) {
                    $("#kode").val(data.kd_buku);
                    $("#nama").val(data.nm_buku);
                    $("#pencipta").val(data.pencipta);
                    $("#tahun").val(data.tahun);
                    $("#usul").val(data.usul);
                    $("#total").val(data.total);
                });
                Swal.fire({
                    icon: 'success',
                    title: 'Data Ditemukan',
                    showConfirmButton: false,
                    timer: 1000
                })
            });
        })
    </script>
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
                    <div class="row">
                        <di class="col md-6">
                            <div class="form-group mt-2">
                                {!! Form::label('buku_id', 'Pilih Buku Disini') !!}
                                {!! Form::select('buku_id', $buku, null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Buku Disini']) !!}
                            </div>
                        </di>
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                {!! Form::label('user_id', 'Pilih Nama Anggota') !!}
                                {!! Form::select('user_id', $user, null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Anggota Disini']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="card card-body" style="box-shadow: 0 5px 10px rgba(0,0,0,0.3)">
                        <h2 align="center">Detail Buku</h2>
                        <div class="form-group mt-4">
                            <table>
                                <tbody>
                                    <tr>
                                        <td width="100px">
                                            <h4>Kode Buku</h4>
                                        </td>
                                        <td width="300px">
                                            <input type="text" name="" id="kode" class="form-control" disabled>
                                        </td>
                                        <td width="200px">
                                            <h4 class="ml-5">Nama Buku</h4>
                                        </td>
                                        <td width="300px">
                                            <input type="text" name="" id="nama" class="form-control" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>Pencipta</h4>
                                        </td>
                                        <td><input type="text" name="" id="pencipta" class="form-control" disabled></td>
                                        <td>
                                            <h4 class="ml-5">Tahun</h4>
                                        </td>
                                        <td><input type="text" name="" id="tahun" class="form-control" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>Asal Buku</h4>
                                        </td>
                                        <td>
                                            <input type="text" name="" id="usul" class="form-control" disabled>
                                        </td>
                                        <td>
                                            <h4 class="ml-5">Total Buku</h4>
                                        </td>
                                        <td><input type="text" name="" id="total" class="form-control" disabled></td>
                                    </tr>
                                </tbody>
                            </table>
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
