<?php

namespace App\Http\Controllers;

use App\buku;
use App\guru;
use App\User;
use App\transaksi;
use Illuminate\Http\Request;

class UserGuruController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->cari;
        $data['cari'] = $cari;
        $datas = buku::where('nm_buku', 'LIKE', '%' . $cari . '%')->orWhere('pencipta', 'LIKE', '%' . $cari . '%')
            ->orWhere('tahun', 'LIKE', '%' . $cari . '%')->paginate(8);
        $datas->append($request->all());
        $data['data'] = $datas;
        return view('userGuru.index', $data);
    }

    public function baca($id)
    {
        $data['data'] = buku::where('id', $id)->first();
        return view('userGuru.baca', $data);
    }

    public function pinjam($id)
    {
        $buku = buku::where('id', $id)->value('total');
        $HITUNG = transaksi::where('user_id', \Auth::user()->id)->where('status','Belum Komfirmasi')->orWhere('status','komfirmasi')->count();
        if ($HITUNG < 3) {
            if ($buku < 1) {
                return back()->with('gagal', 'Maaf Stock Buku Tidak Ada');
            } elseif ($buku > 0) {
                // $user_id = guru::where('user_id', \Auth::user()->id)->value('id');
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
        } else {
            return back()->with('gagal','Peminjaman Anda Melebihi Batas Peminjaman');
        }
    }

    public function transaksi()
    {
        $data['data'] = transaksi::where('user_id', \Auth::user()->id)->where('status','=' ,'Belum Komfirmasi','or')->Where('status','=' ,'komfirmasi','and')->get();
        $data['title'] = "Transaksi Anda";
        return view('userGuru.transaksi', $data);
    }

    public function histori()
    {
        // $user_id = guru::where('user_id', \Auth::user()->id)->value('id');
        $data['data'] = transaksi::where('user_id', \Auth::user()->id)->where('status', 'kembali')->get();
        $data['title'] = "Histori Peminjaman Anda";
        return view('userGuru.histori', $data);
    }
}
