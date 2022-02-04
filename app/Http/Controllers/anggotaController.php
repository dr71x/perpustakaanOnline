<?php

namespace App\Http\Controllers;

use App\User;
use App\anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class anggotaController extends Controller
{
    public function index()
    {
        $data['data'] = anggota::get();
        $data['title'] = "Data Siswa";
        return view('anggota.index', $data);
    }

    public function tambah()
    {
        $data['data'] = new User();
        $data['action'] = "simpanAnggota";
        $data['method'] = "POST";
        $data['title'] = "Tambah Siswa";
        $data['kelas'] = \App\kelas::pluck('nama', 'id');

        return view('anggota.tambah', $data);
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:Users,email',
            'password' => 'required|same:password_confirmation',
            'nama' => 'required',
            'NIS' => 'required|min: 10|max: 10|Unique:anggotas,NIS',
            'jenkel' => 'required',
            'tempat' => 'required',
            'tgl' => 'required',
            'kelas_id' => 'required',
            'alamat' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg',
        ]);
        $path = $request->file('gambar')->storeAs('public/anggota', $request->name);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = "anggota";
        $user->gambar = $path;
        $user->save();

        $user_id = $user->id;

        $anggota = new anggota();
        $anggota->NIS = $request->NIS;
        $anggota->user_id = $user_id;
        $anggota->Nama = $request->nama;
        $anggota->kelas_id = $request->kelas_id;
        $anggota->jenkel = $request->jenkel;
        $anggota->tempat = $request->tempat;
        $anggota->tgl = $request->tgl;
        $anggota->alamat = $request->alamat;
        $anggota->save();

        return redirect('/admin/siswa')->with('success', 'Data Berhasil Disimpan');
    }

    public function hapus($id)
    {
        $user = user::find($id);
        anggota::where('user_id', $id)->delete();
        Storage::delete($user->gambar);
        $user->delete();
        return back()->with('Proses', 'Data Berhasil Dihapus');
    }
    public function edit($id)
    {
        $data['user'] = user::find($id);
        $data['title'] = "EDIT Data Siswa";
        $data['anggota'] = anggota::where('user_id', $id)->first();
        $data['kelas'] = \App\kelas::pluck('nama', 'id');
        return view('anggota.edit', $data);
    }
    public function update(Request $request)
    {
        if ($request->gambar != NULL) {
            $path = $request->file('gambar')->storeAs('public/anggota', $request->name);
        }

        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = "anggota";
        if ($request->gambar != NULL) {
            $user->gambar = $path;
        }
        $user->save();

        $anggota = anggota::where('user_id', $request->id)->first();
        $anggota->NIS = $request->NIS;
        $anggota->Nama = $request->nama;
        $anggota->kelas_id = $request->kelas_id;
        $anggota->jenkel = $request->jenkel;
        $anggota->tempat = $request->tempat;
        $anggota->tgl = $request->tgl;
        $anggota->alamat = $request->alamat;
        $anggota->save();

        return redirect('/admin/siswa')->with('success', 'Data Berhasil DiUpdate');
    }
}
