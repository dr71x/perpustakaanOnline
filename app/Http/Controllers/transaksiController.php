<?php

namespace App\Http\Controllers;

use App\anggota;
use App\buku;
use App\transaksi;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade as PDF;

class transaksiController extends Controller
{
    public function index()
    {
        $data['data'] = transaksi::latest()->where('level', 'anggota')->get();
        $data['title'] = "Data Transaksi Siswa";
        return view('transaksi.index', $data);
    }

    public function tambah()
    {
        $data['data'] = new transaksi();
        $data['action'] = 'simpanTransak';
    $data['method'] = "POST";
        $data['title'] = "Tambah Transaksi";
        $data['buku'] = buku::pluck('nm_buku', 'id');
        $data['user'] = anggota::pluck('nama', 'user_id');
        return view('transaksi.tambah', $data);
    }

    public function buku($id)
    {
        $buku = buku::where('id', $id)->first();
        return response()->json($buku);
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'buku_id' => 'required',
        ]);
        $jumlah = buku::where('id', $request->buku_id)->value('total');
        if ($jumlah > 0) {
            // $user_id = anggota::where('id', $request->user_id)->value('user_id');
            // $level  = User::where('id', $user_id)->value('level');
            $tanggal = date('Y-m-d');
            $kembali = date('Y-m-d', strtotime('+6 days', strtotime($tanggal)));
            $simpan = new transaksi();
            $simpan->buku_id = $request->buku_id;
            $simpan->user_id = $request->user_id;
            $simpan->level = 'anggota';
            $simpan->tgl_pinjam = $tanggal;
            $simpan->dikembalikan = $kembali;
            $simpan->status = "komfirmasi";
            $simpan->save();

            $buku = buku::find($request->buku_id);
            $buku->total = $jumlah - 1;
            $buku->save();
            return Redirect('/admin/transaksi')->with('success', 'Data Berhasil Di Simpan');
        } else {
            return redirect('/admin/transaksi')->with('gagal', 'Maaf saat Ini Buku Tidak Ada Stok');
        }
    }

    public function hapus($id)
    {
        $buku = transaksi::where('id', $id)->value('buku_id');
        $total = buku::where('id', $buku)->value('total');
        $edit = buku::find($buku);
        $edit->total = $total + 1;
        $edit->save();

        $hapus = transaksi::find($id);
        $hapus->delete();
        return back()->with('Proses', "Data Berhasil Di Hapus");
    }

    public function kembali($id)
    {
        $sek = date('Y-m-d');
        $sekarang = date_create();
        $buku = transaksi::where('id', $id)->value('buku_id');
        $total = buku::where('id', $buku)->value('total');
        $denda = transaksi::where('id', $id)->value('dikembalikan');
        $denda1 = date_create($denda);
        $den = date_create($denda)->format('Y-m-d');

        $bukukem = buku::find($buku);
        $bukukem->total = $total + 1;
        $bukukem->save();

        if ($den < $sek) {
            $bayar = date_diff($sekarang, $denda1);
            $transaksi = transaksi::find($id);
            $transaksi->tgl_kembali = $sekarang;
            $transaksi->denda = $bayar->d * 500;
            $transaksi->status = "kembali";
            $transaksi->save();
        } elseif ($den >= $sek) {
            $transaksi = transaksi::find($id);
            $transaksi->tgl_kembali = $sekarang;
            $transaksi->status = "kembali";
            $transaksi->save();
        }
        return back()->with("Proses", "Buku Berhasil Di Kembalikan");
    }

    public function komfirmasi($id)
    {
        $tanggal = date('Y-m-d');
        $kembali = date('Y-m-d', strtotime('+6 days', strtotime($tanggal)));
        $buku = transaksi::where('id', $id)->value('buku_id');
        $bukuTotal = buku::where('id', $buku)->value('total');

        $transbuku = buku::find($buku);
        $transbuku->total = $bukuTotal - 1;
        $transbuku->save();

        $transaksi = transaksi::find($id);
        $transaksi->tgl_pinjam = $tanggal;
        $transaksi->dikembalikan = $kembali;
        $transaksi->status = "komfirmasi";
        $transaksi->save();

        return back()->with('success', 'Transaksi Berhasil Dikonfirmasi');
    }

    public function historiGuru()
    {
        $data['data'] = transaksi::where('level', 'guru')->where('status', 'Kembali')->get();
        $data['title'] = "Laporan Transaksi Guru";
        return view('Laporan.LapGuru', $data);
    }

    public function cetakGuru()
    {
        $data['data'] = transaksi::where('level', 'guru')->where('status', 'Kembali')->get();
        $data['tanggal'] = date_create();
        $pdf = PDF::loadView('Laporan.Lap_Guru', $data);
        return $pdf->stream('PDF');
    }

    public function historiSiswa()
    {
        $data['data'] = transaksi::where('level', 'anggota')->where('status', 'kembali')->get();
        $data['title'] = "Laporan Transaksi Siswa";
        return view('Laporan.LapSiswa', $data);
    }

    public function cetakSiswa()
    {
        $data['data'] = transaksi::where('level', 'anggota')->where('status', 'kembali')->get();
        $data['tanggal'] = date_create();
        $pdf = PDF::loadView('Laporan.Lap_Siswa', $data);
        return $pdf->stream('PDF');
    }
}
