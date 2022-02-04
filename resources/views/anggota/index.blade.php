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
                    <a href="{{ route('tambahAnggota') }}" class="btn btn-info waves-effect waves-light m-b-5"><img
                            src="https://img.icons8.com/external-flatart-icons-flat-flatarticons/64/000000/external-plus-user-interface-flatart-icons-flat-flatarticons.png"
                            width="20%" class="float-left" /> <span>Tambah</span> </a>
                </div>


                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Kelas</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $item->NIS }}
                                </td>
                                <td>
                                    {{ $item->Nama }}
                                </td>
                                <td>
                                    @if ($item->jenkel == 'L')
                                        Laki-Laki
                                    @elseif ($item->jenkel == "p")
                                        Perempuan
                                    @endif
                                </td>
                                <td>
                                    {{ $item->tempat }}, {{ $item->tgl }}
                                </td>
                                <td>
                                    {{ $item->kel->nama }}
                                </td>
                                <td align="center">
                                    <img src="{{ \Storage::url($item->users->gambar) }}" class="rounded-circle"
                                        width="30px" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('editSiswa', $item->users->id) }}"
                                        class="btn btn-icon waves-effect waves-light btn-danger m-b-5"><img
                                            src="https://img.icons8.com/cute-clipart/64/000000/edit.png" width="20px" />
                                        Edit</a>
                                    <a data-action="{{ route('hapusAnggota', $item->users->id) }}"
                                        data-nama="{{ $item->Nama }}"
                                        class="hapus btn btn-icon waves-effect waves-light btn-danger m-b-5"><img
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
@endsection
