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


                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Buku</th>
                            <th>Nama Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Dikembalikan</th>
                            <th>Denda</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
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
                            </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
