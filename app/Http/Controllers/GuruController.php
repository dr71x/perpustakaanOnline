<?php

namespace App\Http\Controllers;

use App\guru;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index()
    {
        $data['data'] = guru::get();
        $data['title'] = "Data Guru";
        return view('guru.index', $data);
    }

    public function tambah()
    {
        $data['data'] = new user();
        $data['action'] = 'simpanGuru';
        $data['method'] = "POST";
        $data['title'] = "Tambah Guru";
        return view('guru.tambah', $data);
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:Users,name',
            'email' => 'required|email|unique:Users,email',
            'nama' => 'required',
            'password' => 'required|same:password_confirmation',
            'NIP' => 'required|max: 6|min: 6|Unique:gurus,NIP',
            'nama' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required',
        ]);

        $path = $request->file('gambar')->storeAs('public/guru', $request->name);

        $simpan = new User();
        $simpan->name = $request->name;
        $simpan->email = $request->email;
        $simpan->password = bcrypt($request->password);
        $simpan->gambar = $path;
        $simpan->level = "guru";
        $simpan->save();

        $id = $simpan->id;

        $guru = new guru();
        $guru->nama = $request->nama;
        $guru->NIP = $request->NIP;
        $guru->alamat = $request->alamat;
        $guru->jenkel = $request->jenkel;
        $guru->user_id = $id;
        $guru->save();

        return redirect('/admin/guru')->with('success', 'Data Berhasil Disimpan');
    }

    public function hapus($id)
    {
        guru::where('user_id', $id)->delete();
        $user = user::find($id);
        Storage::delete($user->gambar);
        $user->delete();
        return back()->with('Proses', 'Data Berhasil Dihapus');
    }

    public function edit($id)
    {
        $data['user'] = User::find($id);
        $data['guru'] = guru::where('user_id', $id)->first();
        $data['title'] = "Edit Data Guru";
        return view('guru.editt', $data);
    }

    public function update(Request $request)
    {
        if ($request->gambar != NULL) {
            $path = $request->file('gambar')->storeAs('public/guru', $request->name);
        }

        $simpan = User::find($request->id);
        $simpan->name = $request->name;
        $simpan->email = $request->email;
        if ($request->gambar != NULL) {
            $simpan->gambar = $path;
        }
        $simpan->level = "guru";
        $simpan->save();

        $guru = guru::where('user_id', $request->id)->first();
        $guru->nama = $request->nama;
        $guru->NIP = $request->NIP;
        $guru->alamat = $request->alamat;
        $guru->jenkel = $request->jenkel;
        $guru->save();

        return redirect('/admin/guru')->with('success', 'Data Berhasil Disimpan');
    }
}
