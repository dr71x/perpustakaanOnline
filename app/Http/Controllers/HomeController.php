<?php

namespace App\Http\Controllers;

use App\buku;
use App\guru;
use App\kelas;
use App\anggota;
use App\transaksi;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (\Auth::user()->level == "admin") {
            $data['kelas'] = kelas::get()->count();
            $data['Guru'] = guru::get()->count();
            $data['anggota'] = anggota::get()->count();
            $data['buku'] = buku::get()->count();
            $data['transSiswa'] = transaksi::where('level', 'anggota')->get()->count();
            $data['transGuru'] = transaksi::where('level', 'guru')->get()->count();
            return view('home', $data);
        } elseif (\Auth::user()->level == 'guru') {
            $id = guru::where('user_id', \Auth::user()->id)->value('id');
            $data['pinjam'] = transaksi::where('user_id', \Auth::user()->id)->where('status', 'komfirmasi')->get()->count();
            $data['belum'] = transaksi::where('user_id', \Auth::user()->id)->where('status', 'Belum Komfirmasi')->get()->count();
            $data['selesai'] = transaksi::where('user_id', \Auth::user()->id)->where('status', 'kembali')->get()->count();
            return view('guru.home', $data);
        } elseif (\Auth::user()->level == 'anggota') {
            $id = guru::where('user_id', \Auth::user()->id)->value('id');
            $data['pinjam'] = transaksi::where('user_id',\Auth::user()->id)->where('status', 'komfirmasi')->get()->count();
            $data['belum'] = transaksi::where('user_id',\Auth::user()->id)->where('status', 'Belum Komfirmasi')->get()->count();
            $data['selesai'] = transaksi::where('user_id',\Auth::user()->id)->where('status', 'kembali')->get()->count();
            return view('siswa.home', $data);
        }
    }
}
