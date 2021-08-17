<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

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
    return view('mainpage');
    // return view('welcome');
});

// Route::get('anotherpage', function () {
//     return view('anotherpage');
// });

Route::get('dosen', [DosenController::class, 'index']);
// Route::get('dosen', 'DosenController@index'); //old style of laravel

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//CRUD - Query Builder
Route::get('/pegawai', [PegawaiController::class, 'index']);
// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

// create
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('pegawai/store', [PegawaiController::class, 'store']);

// edit
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);

// hapus
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
