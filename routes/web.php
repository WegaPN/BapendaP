<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BaratController;
use App\Http\Controllers\TimurController;
use App\Http\Controllers\UtaraController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SelatanController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/beutara', [WelcomeController::class, 'beutara'])->name('beutara');
Route::get('/betimur', [WelcomeController::class, 'betimur'])->name('betimur');
Route::get('/betengah', [WelcomeController::class, 'betengah'])->name('betengah');
Route::get('/bebarat', [WelcomeController::class, 'bebarat'])->name('bebarat');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['prefix' => 'berita'], function () {
    Route::get('/', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/{slug}', [BeritaController::class, 'show'])->name('berita.show');
    Route::get('/edit/{slug}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/{slug}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/{slug}', [KategoriController::class, 'show'])->name('kategori.show');
    Route::get('/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
});

// Rute untuk wilayah timur
Route::group(['prefix' => 'timur'], function () {
    Route::get('/', [TimurController::class, 'index'])->name('timur.index');
    Route::get('/create', [TimurController::class, 'create'])->name('timur.create');
    Route::post('/', [TimurController::class, 'store'])->name('timur.store');
    Route::get('/{slug}', [TimurController::class, 'show'])->name('timur.show');
    Route::get('/edit/{slug}', [TimurController::class, 'edit'])->name('timur.edit');
    Route::put('/{slug}', [TimurController::class, 'update'])->name('timur.update');
    Route::delete('/{id}', [TimurController::class, 'destroy'])->name('timur.destroy');
});

// Rute untuk wilayah utara
Route::group(['prefix' => 'utara'], function () {
    Route::get('/', [UtaraController::class, 'index'])->name('utara.index');
    Route::get('/create', [UtaraController::class, 'create'])->name('utara.create');
    Route::post('/', [UtaraController::class, 'store'])->name('utara.store');
    Route::get('/{slug}', [UtaraController::class, 'show'])->name('utara.show');
    Route::get('/edit/{slug}', [UtaraController::class, 'edit'])->name('utara.edit');
    Route::put('/{slug}', [UtaraController::class, 'update'])->name('utara.update');
    Route::delete('/{id}', [UtaraController::class, 'destroy'])->name('utara.destroy');
});

// Rute untuk wilayah barat
Route::group(['prefix' => 'barat'], function () {
    Route::get('/', [BaratController::class, 'index'])->name('barat.index');
    Route::get('/create', [BaratController::class, 'create'])->name('barat.create');
    Route::post('/', [BaratController::class, 'store'])->name('barat.store');
    Route::get('/{slug}', [BaratController::class, 'show'])->name('barat.show');
    Route::get('/edit/{slug}', [BaratController::class, 'edit'])->name('barat.edit');
    Route::put('/{slug}', [BaratController::class, 'update'])->name('barat.update');
    Route::delete('/{id}', [BaratController::class, 'destroy'])->name('barat.destroy');
});
Route::group(['prefix' => 'selatan'], function () {
    Route::get('/', [SelatanController::class, 'index'])->name('selatan.index');
    Route::get('/create', [SelatanController::class, 'create'])->name('selatan.create');
    Route::post('/', [SelatanController::class, 'store'])->name('selatan.store');
    Route::get('/{slug}', [SelatanController::class, 'show'])->name('selatan.show');
    Route::get('/edit/{selatan}', [SelatanController::class, 'edit'])->name('selatan.edit');
    Route::put('/{id}', [SelatanController::class, 'update'])->name('selatan.update');
    Route::delete('/{id}', [SelatanController::class, 'destroy'])->name('selatan.destroy');
});

Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('fullcalender', [FullCalenderController::class, 'index']);
Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);