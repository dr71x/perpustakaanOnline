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
                    <a href="{{ route('guruTambah') }}" class="btn btn-info waves-effect waves-light m-b-5"><img
                            src="https://img.icons8.com/external-flatart-icons-flat-flatarticons/64/000000/external-plus-user-interface-flatart-icons-flat-flatarticons.png"
                            width="20%" class="float-left" /> <span>Tambah</span> </a>
                </div>


                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
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
                                    {{ $item->NIP }}
                                </td>
                                <td>
                                    {{ $item->nama }}
                                </td>
                                <td>
                                    @if ($item->jenkel === 'L')
                                        Laki-Laki
                                    @elseif ($item->jenkel === "p")
                                        Perempuan
                                    @endif
                                </td>
                                <td>
                                    {{ $item->alamat }}
                                </td>
                                <td align="center">
                                    <img src="{{ \Storage::url($item->user->gambar) }}" class="rounded-circle"
                                        width="50px" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('editGuru', ['id' => $item->user->id]) }}"
                                        class="btn btn-icon waves-effect waves-light btn-danger m-b-5"><img
                                            src="https://img.icons8.com/cotton/64/000000/edit--v1.png" width="20px" />
                                        Edit</a>
                                    <a data-action="{{ route('hapusGuru', $item->user->id) }}"
                                        data-nama="{{ $item->nama }}"
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
