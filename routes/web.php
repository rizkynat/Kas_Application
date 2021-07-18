<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;



Route::get('/', function () {
    return view('welcome');
});
//login,auth & registration
Route::get('/auth', [App\Http\Controllers\KontrolAuth::class, 'showFormLogin'])->name('login');
Route::get('login', [App\Http\Controllers\KontrolAuth::class, 'showFormLogin'])->name('login');
Route::post('login', [App\Http\Controllers\KontrolAuth::class, 'login']);
Route::get('register', [App\Http\Controllers\KontrolAuth::class, 'showFormRegister'])->name('register');
Route::post('register', [App\Http\Controllers\KontrolAuth::class, 'register']);
 
Route::group(['middleware' => 'auth'], function () {
 //pengeluaran
    Route::get('dashboard', [App\Http\Controllers\KontrolPengeluaran::class, 'index'])->name('home');
    Route::get('logout', [App\Http\Controllers\KontrolAuth::class, 'logout'])->name('logout');
    Route::get('data', [App\Http\Controllers\KontrolPengeluaran::class,'show']);
    Route::get('data/cari', [App\Http\Controllers\KontrolPengeluaran::class,'cari']);
    Route::get('/input', [App\Http\Controllers\KontrolPengeluaran::class,'create']);
    Route::post('/storePengeluaran', [App\Http\Controllers\KontrolPengeluaran::class,'store']);
    Route::get('/edit/{id_brg}', [App\Http\Controllers\KontrolPengeluaran::class,'edit']);
    Route::get('/hapus/{id_brg}', [App\Http\Controllers\KontrolPengeluaran::class,'destroy']);
    Route::post('/updatePengeluaran', [App\Http\Controllers\KontrolPengeluaran::class,'update']);
    Route::get('cari',[App\Http\Controllers\KontrolPengeluaran::class,'cari']);
    //Kas
    Route::get('kas', [App\Http\Controllers\KontrolKas::class,'index']);
    Route::get('/tambahKas', [App\Http\Controllers\KontrolKas::class,'create']);
    Route::post('/storeKas', [App\Http\Controllers\KontrolKas::class,'store']);
    Route::get('/editKas/{id_kas}', [App\Http\Controllers\KontrolKas::class,'edit']);
    Route::get('/hapusKas/{id_kas}', [App\Http\Controllers\KontrolKas::class,'destroy']);
    Route::post('/updateKas', [App\Http\Controllers\KontrolKas::class,'update']);
    
    //hasil
    Route::get('hasil', [App\Http\Controllers\KontrolHasil::class,'index']);
});
//pengeluaran
