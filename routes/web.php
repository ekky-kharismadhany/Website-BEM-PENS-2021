<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\ProfileController;
use App\Models\Berita;
use App\Models\Kalender;
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
Route::get('/event', [KalenderController::class, 'getEvent']);
Route::get('/kontak', function () {
    return view('kontak');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/news', [BeritaController::class, 'index'])->name('news');
    Route::view('news/add', 'addNews')->name('news.add');
    Route::view('news/edit', 'editNews')->name('news.edit');
    Route::post('news/create', [BeritaController::class, 'create'])->name('news.create');
    Route::post('news/store', [BeritaController::class, 'store'])->name('news.store');
    Route::view('calendar', 'calendar')->name('calendar');
});
require __DIR__ . '/auth.php';
