<?php

use App\Http\Controllers\DosenController;
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
