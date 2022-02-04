<?php

namespace App\Http\Controllers;

use App\buku;
use App\guru;
use App\User;
use App\transaksi;
use Illuminate\Http\Request;

class transaksiGuruController extends Controller
{
    public function index()
    {
        $data['data'] = transaksi::where('level', 'guru')->latest()->get();
        $data['title'] = "Transaksi Guru";
        return view('transaksiGuru.index', $data);
    }

    public function tambah()
    {
        $data['data'] = new transaksi();
        $data['action'] = 'simpanTransGuru';
        $data['method'] = "POST";
        $data['title'] = "Tambah Transaksi";
        $data['buku'] = buku::pluck('nm_buku', 'id');
        $data['user'] = guru::pluck('nama', 'user_id');
        return view('transaksiGuru.tambah', $data);
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'buku_id' => 'required',
        ]);
        $jumlah = buku::where('id', $request->buku_id)->value('total');
        if ($jumlah > 0) {
            // $user_id = guru::where('id', $request->user_id)->value('user_id');
            // $level  = User::where('id', $user_id)->value('level');
            $tanggal = date('Y-m-d');
            $kembali = date('Y-m-d', strtotime('+6 days', strtotime($tanggal)));
            $simpan = new transaksi();
            $simpan->buku_id = $request->buku_id;
            $simpan->user_id = $request->user_id;
            $simpan->level = 'guru';
            $simpan->tgl_pinjam = $tanggal;
            $simpan->dikembalikan = $kembali;
            $simpan->status = "komfirmasi";
            $simpan->save();

            $buku = buku::find($request->buku_id);
            $buku->total = $jumlah - 1;
            $buku->save();
            return Redirect('/admin/transaksi/guru')->with('success', 'Data Berhasil Di Simpan');
        } else {
            return redirect('/admin/transaksi/guru')->with('gagal', 'Maaf saat Ini Buku Tidak Ada Stok');
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
        $sek = date('d');
        $sekarang = date_create();
        $buku = transaksi::where('id', $id)->value('buku_id');
        $total = buku::where('id', $buku)->value('total');
        $denda = transaksi::where('id', $id)->value('dikembalikan');
        $denda1 = date_create($denda);
        $den = date_create($denda)->format('d');

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

    public function tolak($id)
    {
        $data = transaksi::find($id);
        $data->delete();
        return back()->with('Proses', 'Transaksi Berhasil Dibatalkan');
    }
}
