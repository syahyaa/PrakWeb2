<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Selamat Siang Pa Rojul";
});

Route::get('/about', function () {
    return view('about', [
        // membuat array assosiatif dan dikirim ke views
        "nama" => "Saya",
        "umur" => 17,
        "mahasiswa" => "STT NF"
    ]);

});

Route::get('/nf', function () {
    return view('nf', [
        // membuat array assosiatif dan dikirim ke views
        "nama" => "Saya",
        "alamat" => "Jakarta Selatan",
        "prodi" => "Sistem Informasi"
    ]);

});

Route::get('/table', function () {
    return view('table', [
        // membuat array assosiatif dan dikirim ke views
        "darah" => "120/80",
        "pria" => "< 7 mg/dl",
        "wanita" => "< 6 mg/dl",
        "kolestrol" => "< 200 mg/dl",
        "puasa" => 70 - 110,
        "obat" => 100 - 150,
        "acak" => 70 - 125
    ]);

});

