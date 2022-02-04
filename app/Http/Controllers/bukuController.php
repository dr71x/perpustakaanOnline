<?php

namespace App\Http\Controllers;

use App\buku;
use App\transaksi;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class bukuController extends Controller
{
    public function index()
    {
        $data['data'] = buku::get();
        $data['title'] = "Data Buku";
        return view('buku.index', $data);
    }

    public function baca($id)
    {
        $data['title'] = "Baca Buku";
        $data['buku'] = buku::where('id', $id)->first();
        return view('buku.baca', $data);
    }

    public function tambah()
    {
        $data['data'] = new buku();
        $data['action'] = "simpanBuku";
        $data['method'] = "POST";
        $data['title'] = "Tambah Buku";

        return view('buku.tambah', $data);
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'kd_buku' => 'required|unique:bukus,kd_buku|max:10',
            'nm_buku' => 'required',
            'pencipta' => 'required',
            'tahun' => 'required',
            'usul' => 'required',
            'total' => 'required',
            'cover' => 'required|mimes:png,jpg,jpeg',
            'file' => 'mimes:doc,docx,pdf',
        ]);
        $simpan = new buku();
        $simpan->kd_buku = $request->kd_buku;
        $simpan->nm_buku = $request->nm_buku;
        $simpan->pencipta = $request->pencipta;
        $simpan->tahun = $request->tahun;
        $simpan->usul = $request->usul;
        $simpan->total = $request->total;
        if (!empty($request->cover)) {
            $gambar = $request->file('cover')->store('public/buku/cover');
            $simpan->cover = $gambar;
        }
        if (!empty($request->file)) {
            $file = $request->file('file')->store('public/buku/file');
            $simpan->file = $file;
        }
        $simpan->save();

        return redirect('/admin/buku')->with('success', 'Data Berhasil Disimpan');
    }

    public function hapus($id)
    {
        $hapus = buku::find($id);
        Storage::delete($hapus->cover);
        Storage::delete($hapus->file);
        $hapus->delete();
        return back()->with('success', 'Data Berhasil Dihapus');
    }

    public function LapBuku()
    {
        $data['tanggal'] = date_create();
        $data['buku'] = buku::all();
        $pdf = PDF::loadView('buku.Lap_buku', $data);
        return $pdf->stream('PDF');
    }

    public function edit($id)
    {
        $data['buku'] = buku::find($id);
        $data['title'] = "Update Buku";
        return view('buku.editt', $data);
    }

    public function update(Request $request)
    {
        $simpan = buku::find($request->id);
        $simpan->kd_buku = $request->kd_buku;
        $simpan->nm_buku = $request->nm_buku;
        $simpan->pencipta = $request->pencipta;
        $simpan->tahun = $request->tahun;
        $simpan->usul = $request->usul;
        $simpan->total = $request->total;
        if (!empty($request->cover)) {
            $gambar = $request->file('cover')->store('public/buku/cover');
            $simpan->cover = $gambar;
        }
        if (!empty($request->file)) {
            $file = $request->file('file')->store('public/buku/file');
            $simpan->file = $file;
        }
        $simpan->save();

        return redirect('/admin/buku')->with('success', 'Data Berhasil Disimpan');
    }
}
