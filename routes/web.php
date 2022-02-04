<?php

use App\buku;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\anggotaController;
use App\Http\Controllers\errorController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\transaksiGuruController;
use App\Http\Controllers\UserGuruController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::middleware(['auth', 'ceklevel:admin,guru,anggota'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/404', [errorController::class, 'error404'])->name('404');
Route::get('/buku/detail/{id}', [transaksiController::class, 'buku']);

Route::prefix('admin')->middleware(['auth', 'ceklevel:admin'])->group(function () {
    //untuk anggota
    Route::get('/siswa', [anggotaController::class, 'index'])->name('anggota');
    Route::get('/siswa/tambah', [anggotaController::class, 'tambah'])->name('tambahAnggota');
    Route::post('/siswa/simpan', [anggotaController::class, 'simpan'])->name('simpanAnggota');
    Route::get('/siswa/hapus/{id}', [anggotaController::class, 'hapus'])->name('hapusAnggota');
    Route::get('/siswa/edit/{id}', [anggotaController::class, 'edit'])->name('editSiswa');
    Route::put('/siswa/update', [anggotaController::class, 'update'])->name('updateSiswa');
    //untuk Guru
    Route::get('/guru', [GuruController::class, 'index'])->name('guru');
    Route::get('/guru/tambah', [GuruController::class, 'tambah'])->name('guruTambah');
    Route::post('/guru/simpan', [GuruController::class, 'simpan'])->name('simpanGuru');
    Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus'])->name('hapusGuru');
    Route::get('/guru/edit/{id}', [GuruController::class, 'edit'])->name('editGuru');
    Route::put('/guru/update', [GuruController::class, 'update'])->name('updateGuru');
    //untuk Kelas
    Route::get('/kelas', [kelasController::class, 'index'])->name('kelas');
    Route::post('/kelas/simpan', [kelasController::class, 'simpan'])->name('kelasSImpan');
    Route::get('/kelas/hapus/{id}', [kelasController::class, 'hapus'])->name('hapusKelas');
    //untuk Buku
    Route::get('/buku', [bukuController::class, 'index'])->name('buku');
    Route::get('/buku/tambah', [bukuController::class, 'tambah'])->name('tambahBuku');
    Route::post('/buku/simpan', [bukuController::class, 'simpan'])->name('simpanBuku');
    Route::get('/buku/hapus/{id}', [bukuController::class, 'hapus'])->name('hapusBuku');
    Route::get('/baca/{id}', [bukuController::class, 'baca'])->name('baca');
    Route::get('/cetak/buku', [bukuController::class, 'LapBuku'])->name('lapBuku');
    Route::get('/buku/edit/{id}', [bukuController::class, 'edit'])->name('editBuku');
    Route::put('/buku/update', [bukuController::class, 'update'])->name('updateBuku');

    // transaksi anggota
    Route::get('/transaksi', [transaksiController::class, 'index'])->name('transaksi');
    Route::get('/transaksi/tambah', [transaksiController::class, 'tambah'])->name('tambahTransak');
    Route::post('/transaksi/simpan', [transaksiController::class, 'simpan'])->name('simpanTransak');
    Route::get('/transaksi/hapus/{id}', [transaksiController::class, 'hapus'])->name('hapusTransaksi');
    Route::get('/transaksi/kembali/{id}', [transaksiController::class, 'kembali'])->name('bukuKembali');

    //laporan
    Route::get('/laporan/guru', [transaksiController::class, 'historiGuru'])->name('lapGuru');
    Route::get('/laporan/siswa', [transaksiController::class, 'historiSiswa'])->name('historiSiswa');
    Route::get('/transaksi/cetak', [transaksiController::class, 'cetakGuru'])->name('cetakGuru');
    Route::get('/transaksi/cetak/siswa', [transaksiController::class, 'cetakSiswa'])->name('cetakSiswa');

    //transakiGuru
    Route::get('/transaksi/guru', [transaksiGuruController::class, 'index'])->name('transaksiGuru');
    Route::get('/transaksi/guru/tambah', [transaksiGuruController::class, 'tambah'])->name('tambahTransGuru');
    Route::post('/transaksi/guru/simpan', [transaksiGuruController::class, 'simpan'])->name('simpanTransGuru');
    Route::get('/transaksi/guru/hapus/{id}', [transaksiGuruController::class, 'hapus'])->name('hapusTransGuru');
    Route::get('/transaksi/guru/kembali/{id}', [transaksiGuruController::class, 'kembali'])->name('kembaliTransGuru');
    Route::get('/transaksi/guru/tolak/{id}', [transaksiGuruController::class, 'tolak'])->name('tolak');
    Route::get('/komfirmasi/{id}', [transaksiController::class, 'komfirmasi'])->name('komfirmasi');
});

// untuk akses Guru
Route::middleware(['auth', 'ceklevel:guru'])->group(function () {
    Route::get('/Guru/buku', [UserGuruController::class, 'index'])->name('guruBuku');
    Route::get('/guru/baca/{id}', [UserGuruController::class, 'baca'])->name('guruBaca');
    Route::get('/guru/pinjam/{id}', [UserGuruController::class, 'pinjam'])->name('guruPinjam');
    Route::get('/guru/transaksi', [UserGuruController::class, 'transaksi'])->name('guruTransaksi');
    Route::get('/guru/histori', [UserGuruController::class, 'histori'])->name('guruHistori');
});

//untuk akses siswa
Route::middleware(['auth', 'ceklevel:anggota'])->group(function () {
    Route::get('/siswa/buku', [siswaController::class, 'index'])->name('SiswaBuku');
    Route::get('/siswa/baca/{id}', [siswaController::class, 'baca'])->name('siswaBaca');
    Route::get('/siswa/pinjam/{id}', [siswaController::class, 'pinjam'])->name('siswaPinjam');
    Route::get('/siswa/transaksi', [siswaController::class, 'transaksi'])->name('siswaTransaksi');
    Route::get('/siswa/histori', [siswaController::class, 'histori'])->name('siswaHistori');
});
