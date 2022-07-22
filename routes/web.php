<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SbController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\SlotController;

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
    return view('welcome');
});

// route basic
Route::get('/hello', function () {
    echo "<center>";
    echo "<u>";
    echo "Hello semuanya, apa kabar?<br>";
    echo "Pada kali ini kita sedang belajar route basic";
    echo "</u>";
    echo "</center>";
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pages1', function () {
    return view('pages1.index');
});

Route::get('/pages2', function () {
    return view('pages2.index');
});

Route::get('/pages3', function () {
    return view('pages3.index');
});

// route parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jk}/{hobi}', function ($nama, $umur, $alamat, $jk, $hobi) {
    return view('pages1.biodata', compact ('nama', 'umur', 'alamat', 'jk', 'hobi'));
});

// route optional parameter
Route::get('/pesanan/{minuman?}', function ($minuman = 'kosong') {
    return view('pages1.pesanan', compact ('minuman'));
});

Route::get('/bangunan/{material?}/{material2?}', function ($material = 'Mohon maaf material anda tidak ada', $material2 = 'Mohon maaf material anda tidak ada') {
    return view('pages1.bangunan', compact ('material', 'material2'));
});

Route::get('/pengenalan', [App\Http\Controllers\PengenalanController::class, 'pengenalan']);

Route::get('/intro/{nama}/{alamat}/{umur}', [PengenalanController::class, 'intro']);

Route::get('/siswa', [PengenalanController::class, 'siswa']);

Route::get('/menu', [LatihanController::class, 'menu']);

Route::get('/dosen', [LatihanController::class, 'dosen']);

Route::get('/televisi', [LatihanController::class, 'televisi']);

Route::get('/challenge', [LatihanController::class, 'challenge']);

Route::get('/sbs', [SbController::class, 'index']);

Route::get('/staff', [SbController::class, 'index2']);

Route::get('/branch', [SbController::class, 'index3']);

Route::get('/staffbranch', [SbController::class, 'index4']);

Route::get('/hotel', [HotelController::class, 'index']);

Auth::routes();

Route::resource('slot', SlotController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');