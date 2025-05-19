<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PrestasiController;
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

Route::resource('artikel', ArtikelController::class);

Route::resource('fasilitas', FasilitasController::class);

Route::resource('dosen', DosenController::class);

Route::resource('ukm', UkmController::class);

Route::resource('fakultas', FakultasController::class);

Route::resource('prestasi', PrestasiController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
