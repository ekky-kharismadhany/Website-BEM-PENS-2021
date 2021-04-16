<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KalenderController;
use App\Models\Berita;
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
    return view('landing');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/berita', [BeritaController::class, 'getAllNews']);
Route::get('/berita/{id}', [BeritaController::class, 'getNews']);
Route::get('/event', [KalenderController::class, 'getEvent']);

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/event', [KalenderController::class, 'getEvent']);
