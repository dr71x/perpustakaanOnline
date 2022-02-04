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
                <div class="col-md-4 mb-4">
                    <a href="{{ route('tambahBuku') }}" class="btn btn-info waves-effect waves-light m-b-5"><img
                            src="https://img.icons8.com/external-flatart-icons-flat-flatarticons/64/000000/external-plus-user-interface-flatart-icons-flat-flatarticons.png"
                            width="20%" /> <span>Tambah</span> </a>
                    <a href="{{ route('lapBuku') }}" class="btn btn-pink waves-effect waves-light m-b-5"><img
                            src="https://img.icons8.com/color/50/000000/print.png" width="20%" /> <span>
                            Laporan</span></a>
                </div>


                <table id="datatable" class="table table-striped table-bordered"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Buku</th>
                            <th>Nama Buku</th>
                            <th>Pencipta</th>
                            <th>Tahun</th>
                            <th>Asal Perolehan</th>
                            <th>Total Buku</th>
                            <th>Cover</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kd_buku }}</td>
                                <td>{{ $item->nm_buku }}</td>
                                <td>{{ $item->pencipta }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>{{ $item->usul }}</td>
                                <td align="center">{{ $item->total }} Buku</td>
                                <td align="center">
                                    <img src="{{ \Storage::url($item->cover) }}" width="50px" alt="cover">
                                </td>
                                <td>
                                    <a href="{{ route('editBuku', $item->id) }}"
                                        class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <img
                                            src="https://img.icons8.com/color/48/000000/edit--v2.png" width="30px" /></a>
                                    <a data-action="{{ route('hapusBuku', $item->id) }}"
                                        data-nama="{{ $item->kd_buku }}"
                                        class="hapus btn btn-icon waves-effect waves-light btn-danger m-b-5"><img
                                            src="https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/64/000000/external-trash-user-interface-icongeek26-linear-colour-icongeek26.png"
                                            width="30px" /></a>
                                    @if ($item->file != null)
                                        <a href="{{ route('baca', $item->id) }}"
                                            class="btn btn-icon waves-effect waves-light btn-purple m-b-5">
                                            <img src="https://img.icons8.com/plasticine/100/000000/apple-books.png"
                                                width="30px" /></a>
                                    @endif
                                </td>
                            </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
