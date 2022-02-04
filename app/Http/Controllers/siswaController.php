<?php

namespace App\Http\Controllers;

use App\buku;
use App\User;
use App\anggota;
use App\transaksi;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->cari;
        $data['cari'] = $cari;
        $datas = buku::where('nm_buku', 'LIKE', '%' . $cari . '%')->orWhere('pencipta', 'LIKE', '%' . $cari . '%')
            ->orWhere('tahun', 'LIKE', '%' . $cari . '%')->paginate(8);
        $datas->append($request->all());
        $data['data'] = $datas;
        return view('siswa.index', $data);
    }

    public function baca($id)
    {
        $data['data'] = buku::where('id', $id)->first();
        return view('siswa.baca', $data);
    }

    public function pinjam($id)
    {
        $buku = buku::where('id', $id)->value('total');

        if ($buku < 1) {
            return back()->with('gagal', 'Maaf Stock Buku Tidak Ada');
        } elseif ($buku > 0) {
            // $user_id = anggota::where('user_id', \Auth::user()->id)->value('id');
            // $level = User::where('id', \Auth::user()->id)->value('level');
            $tanggal1 = date('Y-m-d');
            $kembali = date('Y-m-d', strtotime('+6 days', strtotime($tanggal1)));
            $simpan = new transaksi();
            $simpan->buku_id = $id;
            $simpan->user_id = \Auth::user()->id;
            $simpan->level = \Auth::user()->level;
            $simpan->tgl_pinjam = $tanggal1;
            $simpan->dikembalikan = $kembali;
            $simpan->status = "Belum Komfirmasi";
            $simpan->save();

            return back()->with('success', "Proses Berhasil, silahkan Komfirmasi Admin");
        }
    }

    public function transaksi()
    {
        // $user_id = anggota::where('user_id', \Auth::user()->id)->first();
        $data['data'] = transaksi::where('user_id', \Auth::user()->id)->where('status','=' ,'Belum Komfirmasi','or')->Where('status','=' ,'komfirmasi','and')->get();
        $data['title'] = "Transaksi Anda";
        return view('siswa.transaksi', $data);
    }

    public function histori()
    {
        // $user_id = anggota::where('user_id', \Auth::user()->id)->first();
        $data['data'] = transaksi::where('user_id', \Auth::user()->id)->where('status', 'kembali')->get();
        $data['title'] = "Histori Peminjaman Anda";
        return view('siswa.histori', $data);
    }
}
