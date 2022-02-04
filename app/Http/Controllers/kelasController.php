<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\kelas;

class kelasController extends Controller
{
    public function index()
    {
        $data['data'] = kelas::get();
        $data['obj'] = new  kelas();
        $data['action'] = "kelasSImpan";
        $data['method'] = "POST";
        $data['title'] = "Data Kelas";
        return view('kelas.index', $data);
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:Kelas,nama',
        ]);

        $simpan = new kelas();
        $simpan->nama = $request->nama;
        $simpan->save();
        return back()->with('success', "Data berhasil Disimpan");
    }

    public function hapus($id)
    {
        $kelas = kelas::find($id);
        $kelas->delete();
        return back()->with('Proses', 'Data Kelas Berhasil DiHapus');
    }
}
