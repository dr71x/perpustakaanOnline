@extends('layouts.main')

@section('content')
    <div class="row justify-content-end">
        <div class="col-md-3 mt-4 mr-4">
            <form action="{{ url('/siswa/buku') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="cari" class="form-control" placeholder="Cari Disini"
                        value="{{ $cari }}">
                    <button class="btn btn-primary waves-effect waves-light"><img
                            src="https://img.icons8.com/external-others-sbts2018/58/000000/external-search-social-media-others-sbts2018.png"
                            width="20px" /></button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-4">
        @foreach ($data as $item)
            <div class="col-md-4">
                <div class="card" style="width: 18rem; box-shadow: 0 10px 15px rgba(0,0,0,0.2);">
                    <a href="{{ \Storage::url($item->cover) }}" data-fancybox>
                        <img src="{{ \Storage::url($item->cover) }}" height="170px" class="card-img-top"
                            alt="gambar-buku">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->kd_buku }} - {{ $item->nm_buku }}</h5>
                        <p class="card-text mt-2">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Pencipta</td>
                                    <td>: {{ $item->pencipta }}</td>
                                </tr>
                                <tr>
                                    <td>Tahun Terbit</td>
                                    <td>: {{ $item->tahun }}</td>
                                </tr>
                            </tbody>
                        </table>
                        </p>
                        @if ($item->file != null)
                            <a href="{{ route('siswaBaca', $item->id) }}"
                                class="btn btn-icon waves-effect waves-light btn-danger mt-2"><img
                                    src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/60/000000/external-magnifying-glass-microorganism-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png "
                                    width="20px" /> Baca</a>
                        @endif
                        <a data-action="{{ route('siswaPinjam', $item->id) }}" data-nama="{{ $item->nm_buku }}"
                            class="pinjam btn btn-icon waves-effect waves-light btn-danger mt-2"><img
                                src="https://img.icons8.com/fluency/48/000000/books.png" width="20px" /> Pinjam</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row justify-content-end">
        <div class="col-md-3 fixed-bottom">
            {{ $data->links() }}
        </div>
    </div>
@endsection
