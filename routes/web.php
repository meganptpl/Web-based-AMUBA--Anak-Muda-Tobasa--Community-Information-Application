<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\SumbanganController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfilController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create somethin g great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('awal');
Auth::routes(['verify'=>true]);
Route::get('/', [HomeController::class, 'index'])->name('awal');
Route::get('galeris', [HomeController::class, 'galeri']);
Route::get('/aboutUs', [AboutUsController::class, 'aboutUs']);
Route::get('profils', [HomeController::class, 'profil']);
Route::get('informasis', [HomeController::class, 'informasi']);
Route::get('tambah', [HomeController::class, 'create']);
Route::post('tambah', [HomeController::class, 'store']);
Route::get('/lihat/{informasiId}', [App\Http\Controllers\HomeController::class, 'show'])->name('lihat');
Route::get('/lihatgaleri/{galeriId}', [App\Http\Controllers\HomeController::class, 'show2'])->name('lihatgaleri');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
        Route::resource('users', UserController::class);
        Route::resource('informasi', InformasiController::class);
        Route::resource('sumbangan', SumbanganController::class);
        Route::post('sumbangan/{sumbangan}/ditolak',[SumbanganController::class, 'ditolak'])->name('sumbangan.ditolak');
        Route::post('sumbangan/{sumbangan}/diterima',[SumbanganController::class, 'diterima'])->name('sumbangan.diterima');
        Route::resource('galeri', GaleriController::class);
        Route::resource('profil', ProfilController::class);
});

