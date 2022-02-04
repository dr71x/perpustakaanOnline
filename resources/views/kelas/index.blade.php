@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">

        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title mb-4"><b>{{ $title }}</b></h4>
                <div class="col-md-2 mb-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <img src="https://img.icons8.com/doodle/48/000000/plus--v1.png" width="20px"
                            class="float-left" />
                        Tambah
                    </button>
                </div>


                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <td align="center">
                                    {{ $loop->iteration }}
                                </td>
                                <td width="500px" align="center">
                                    {{ $item->nama }}
                                </td>
                                <td align="center">
                                    <a data-action="{{ route('hapusKelas', $item->id) }}" data-nama="{{ $item->nama }}"
                                        class="hapus btn btn btn-icon waves-effect waves-light btn-danger m-b-5"><img
                                            src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-trash-hygiene-kiranshastry-lineal-color-kiranshastry-1.png"
                                            width="20px" /> Hapus</a>
                                </td>
                            @empty
                                <td colspan="7" align="center">
                                    Maaf Data Tidak Ada
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::model($obj, ['route' => $action, 'files' => true, 'method' => $method]) !!}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('nama', 'Nama Kelas') !!}
                            </div>
                            <div class="col-md-9">
                                {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Kelas']) !!}
                                <span class="text-helper">{{ $errors->first('nama') }}</span>
                            </div>
                        </div>
                        <button class="btn btn-pink waves-light btn waves-effect mt-4 float-right" type="submit">
                            <img src="https://img.icons8.com/external-wanicon-lineal-color-wanicon/50/000000/external-save-user-interface-wanicon-lineal-color-wanicon.png"
                                width="20px" />
                            Simpan</button>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
