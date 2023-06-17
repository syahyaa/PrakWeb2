<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FromController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardFrontendController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;



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

// Route::get('/input', function () {
//     return view('input');
// });

// Route::get('/output', function () {
//     return view('output');
// });

Route::get('/input', [UserController::class, 'index']);

Route::post('/output', [UserController::class, 'output']);

Route::post('/from', [FromController::class, 'index']);
Route::post('/from', [FromController::class, 'from']);


// ini route untuk backend/admin
Route::prefix('admin')->group(function() {
Route::get('/dashboard',[DashboardController::class,'index']);

//produk
Route::get('/produk',[ProdukController::class,'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::get('/produk/edit/{id}',[ProdukController::class, 'edit']);
Route::post('/produk/update/{id}',[ProdukController::class, 'update']);
Route::get('/produk/delete/{id}',[ProdukController::class, 'destroy']);

//pesanan
Route::get('/pesanan', [PesananController::class, 'index']);
Route::get('/pesanan/create', [PesananController::class, 'create']);
Route::post('/pesanan/store', [PesananController::class, 'store']);
Route::get('/pesanan/edit/{id}',[PesananController::class, 'edit']);
Route::post('/pesanan/update/{id}', [PesananController::class, 'update']);
Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);

});

// ini route untuk frontend
Route::prefix('user')->group(function() {
    Route::get('/dashboard',[DashboardFrontendController::class,'index']);
    });

//
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');