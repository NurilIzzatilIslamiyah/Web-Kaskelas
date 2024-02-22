<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembayaranController;

Route::get('/', function () {
    return view('welcome');
});

//route::resource
Route::resource('/siswa', \App\Http\Controllers\SiswaController::class);

Route::get('pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
Route::get('pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create');
Route::post('pembayaran/store', [PembayaranController::class, 'store'])->name('pembayaran.store');
Route::delete('pembayaran/{pembayaran}', [PembayaranController::class, 'destroy'])->name('pembayaran.destroy');

Route::get('/pembayaran/history/{id}', [PembayaranController::class, 'history'])->name('pembayaran.history');
