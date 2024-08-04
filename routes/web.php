<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;


Route::get('/', function () {
    return view('welcome', ['title' => 'Aplikasi penjualan barang berbasis web dengan Framework Laravel']);
});

Route::get('home', function () {
    return view('home');
});

//Buku
Route::get('buku', [BukuController::class, 'index'])->name('buku.index');

Route::get('buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('buku', [BukuController::class, 'store'])->name('buku.store'); 
Route::get('buku/{id_buku}/edit', [BukuController::class, 'edit'])->name('buku.edit');  
Route::put('buku/{id_buku}', [BukuController::class, 'update'])->name('buku.update');
Route::delete('buku/{id_buku}', [BukuController::class, 'destroy'])->name('buku.destroy');
Route::get('buku/show', [BukuController::class, 'show'])->name('buku.show');

//Jenis
Route::get('jenis', [JenisController::class, 'index'])->name('jenis.index');

Route::get('jenis/create', [JenisController::class, 'create'])->name('jenis.create');
Route::post('jenis', [JenisController::class, 'store'])->name('jenis.store'); 
Route::get('jenis/{id_jenis}/edit', [JenisController::class, 'edit'])->name('jenis.edit');  
Route::put('jenis/{id_jenis}', [JenisController::class, 'update'])->name('jenis.update');
Route::delete('jenis/{id_jenis}', [JenisController::class, 'destroy'])->name('jenis.destroy');
Route::get('jenis/show', [JenisController::class, 'show'])->name('jenis.show');

//penerbit
Route::get('penerbit', [PenerbitController::class, 'index'])->name('penerbit.index');

Route::get('penerbit/create', [PenerbitController::class, 'create'])->name('penerbit.create');
Route::post('penerbit', [PenerbitController::class, 'store'])->name('penerbit.store'); 
Route::get('penerbit/{id_penerbit}/edit', [PenerbitController::class, 'edit'])->name('penerbit.edit');  
Route::put('penerbit/{id_penerbit}', [PenerbitController::class, 'update'])->name('penerbit.update');
Route::delete('penerbit/{id_penerbit}', [PenerbitController::class, 'destroy'])->name('penerbit.destroy');
Route::get('penerbit/show', [PenerbitController::class, 'show'])->name('penerbit.show');

//anggota
Route::get('anggota', [AnggotaController::class, 'index'])->name('anggota.index');

Route::get('anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
Route::post('anggota', [AnggotaController::class, 'store'])->name('anggota.store'); 
Route::get('anggota/{id_anggota}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');  
Route::put('anggota/{id_anggota}', [AnggotaController::class, 'update'])->name('anggota.update');
Route::delete('anggota/{id_anggota}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');
Route::get('anggota/show', [AnggotaController::class, 'show'])->name('anggota.show');

//Peminjaman
Route::get('peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');

Route::get('peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::post('peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store'); 
Route::get('peminjaman/{id_peminjaman}/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');  
Route::put('peminjaman/{id_peminjaman}', [PeminjamanController::class, 'update'])->name('peminjaman.update');
Route::delete('peminjaman/{id_peminjaman}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');
Route::get('peminjaman/show', [PeminjamanController::class, 'show'])->name('peminjaman.show');

//Pengembalian
Route::get('pengembalian', [PengembalianController::class, 'index'])->name('pengembalian.index');

Route::get('pengembalian/create', [PengembalianController::class, 'create'])->name('pengembalian.create');
Route::post('pengembalian', [PengembalianController::class, 'store'])->name('pengembalian.store'); 
Route::get('pengembalian/{id_pengembalian}/edit', [PengembalianController::class, 'edit'])->name('pengembalian.edit');  
Route::put('pengembalian/{id_pengembalian}', [PengembalianController::class, 'update'])->name('pengembalian.update');
Route::delete('pengembalian/{id_pengembalian}', [PengembalianController::class, 'destroy'])->name('pengembalian.destroy');
Route::get('pengembalian/show', [PengembalianController::class, 'show'])->name('pengembalian.show');