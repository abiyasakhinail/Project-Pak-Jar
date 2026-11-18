<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->name('login');


Route::post('/', function () {
    return redirect()->route('dashboard');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/transaksi', function () {
    return view('transaksi');
})->name('transaksi');


Route::get('/tabungan', function () {
    return view('tabungan');
})->name('tabungan');


Route::get('/rekap', function () {
    return view('rekap');
})->name('rekap');


Route::get('/akun', function () {
    return view('akun');
})->name('akun');
