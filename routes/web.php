<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenggunaController;
use Database\Seeders\PegawaiSeeder;
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
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);
// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

// create
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('pegawai/store', [PegawaiController::class, 'store']);

// edit
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);

// hapus
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);


// Form Controller
Route::get('/input', [FormController::class, 'input']);
Route::post('/proses', [FormController::class, 'proses']);

// Karyawan Controller
Route::get('/karyawan', [KaryawanController::class, 'index']);


// CRUD Karyawan - eloquent
// create
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);

// edit
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::put('/karyawan/update/{id}', [KaryawanController::class, 'update']);

// delete
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'delete']);

Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus']);
Route::get('/guru/trash', [GuruController::class, 'trash']);

Route::get('/guru/kembalikan/{id}', [GuruController::class, 'kembalikan']);
Route::get('/guru/kembalikan_semua', [GuruController::class, 'kembalikan_semua']);

Route::get('/guru/hapus_permanen/{id}', [GuruController::class, 'hapus_permanen']);
Route::get('/guru/hapus_permanen_semua', [GuruController::class, 'hapus_permanen_semua']);

// Relasi one to one
Route::get('/pengguna', [PenggunaController::class, 'index']);
