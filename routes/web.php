<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use App\Models\Berita;
use App\Models\Kalender;
use Illuminate\Support\Facades\DB;
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
    $articles = Berita::limit(3)->get();
    return view('landing', ['articles' => $articles]);
});
// Route::get('/profil', function () {
//     return view('profil');
// });
Route::get('/berita', [BeritaController::class, 'index_berita']);
Route::get('/berita/{id}', [BeritaController::class, 'getNews']);
Route::get('/event', [KalenderController::class, 'getEvent']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::post('/kontak/send', [KontakController::class, 'sendMail'])->name('kontak.mail');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/news', [BeritaController::class, 'index'])->name('news');
    Route::get('news/add', [BeritaController::class, 'show'])->name('news.add');
    Route::post('news/create', [BeritaController::class, 'create'])->name('news.create');
    Route::get('news/edit/{id}', [BeritaController::class, 'edit'])->name('news.edit');
    Route::post('news/store', [BeritaController::class, 'store'])->name('news.store');
    Route::put('news/update', [BeritaController::class, 'update'])->name('news.update');
    Route::delete('news/destroy', [BeritaController::class, 'destroy'])->name('news.destroy');

    Route::get('calendar', [KalenderController::class, 'index'])->name('calendar');
    Route::get('calender/add', [KalenderController::class, 'add'])->name('calendar.add');
    Route::post('calender/create', [KalenderController::class, 'create'])->name('calendar.create');
    Route::get('calendar/edit/{id}', [KalenderController::class, 'edit'])->name('calendar.edit');
    Route::post('calendar/store', [KalenderController::class, 'store'])->name('calendar.store');
    Route::put('calender/update', [KalenderController::class, 'update'])->name('calendar.update');
    Route::delete('calendar/destroy', [KalenderController::class, 'destroy'])->name('calendar.destroy');
});
require __DIR__ . '/auth.php';
