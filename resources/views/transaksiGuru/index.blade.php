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
                    <a href="{{ route('tambahTransGuru') }}" class="btn btn-info waves-effect waves-light m-b-5"><img
                            src="https://img.icons8.com/external-flatart-icons-flat-flatarticons/64/000000/external-plus-user-interface-flatart-icons-flat-flatarticons.png"
                            width="20%" class="float-left" /> <span>Tambah</span> </a>
                </div>


                <table id="datatable" class="table table-striped table-bordered dt-responsive"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peminjam</th>
                            <th>Kode Buku</th>
                            <th>Nama Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Dikembalikan</th>
                            <th>Denda</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->guru->nama }}</td>
                                <td>{{ $item->buku->kd_buku }}</td>
                                <td>{{ $item->buku->nm_buku }}</td>
                                <td>{{ \Carbon\carbon::parse($item->tgl_pinjam)->format('d-m-Y') }} sampai
                                    {{ \Carbon\carbon::parse($item->dikembalikan)->format('d-m-Y') }}</td>
                                <td>
                                    @if ($item->tgl_kembali == null)
                                        Belum Dikembalikan
                                    @else
                                        {{ \Carbon\carbon::parse($item->tgl_kembali)->isoFormat('dddd, DD MMM Y') }}
                                    @endif
                                </td>
                                <td>
                                    @if ($item->denda == null)
                                        -
                                    @else
                                        {{ $item->denda }}
                                    @endif
                                </td>
                                <td>
                                    @if ($item->status == 'Belum Komfirmasi')
                                        <a data-action="{{ route('komfirmasi', $item->id) }}"
                                            class="komfirmasi btn btn-pink btn-icon waves-light waves-effect m-b-5">
                                            <img src="https://img.icons8.com/fluency/58/000000/checked.png" width="20px" />
                                            Konfirmasi</a>
                                        <a data-action="{{ route('tolak', $item->id) }}"
                                            class="tolak btn btn-danger btn-icon waves-effect waves-light m-b-5">
                                            <img src="https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/64/000000/external-cross-success-flatart-icons-lineal-color-flatarticons.png"
                                                width="20px" />
                                            Tolak</a>
                                    @elseif ($item->status == "komfirmasi")
                                        <a data-action="{{ route('hapusTransGuru', $item->id) }}"
                                            data-nama="{{ $item->buku->nm_buku }}"
                                            class="hapus btn btn-icon waves-effect waves-light btn-danger m-b-5"><img
                                                src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-trash-hygiene-kiranshastry-lineal-color-kiranshastry-1.png"
                                                width="20px" /> Hapus</a>
                                        <a data-action="{{ route('kembaliTransGuru', $item->id) }}"
                                            class="kembali btn btn-icon waves-effect waves-light btn-danger m-b-5"><img
                                                src="https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/50/000000/external-book-communication-and-media-flatart-icons-lineal-color-flatarticons.png"
                                                width="20px" />
                                            Dikembalikan</a>
                                    @elseif ($item->status == "Kembali")
                                        <h4 align="center"><img
                                                src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-check-banking-and-finance-kiranshastry-lineal-color-kiranshastry.png"
                                                width="20px" />
                                            {{ $item->status }}</h4>

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
