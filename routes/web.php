<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomoditaController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\LaporanController;

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

Route::middleware('auth')->group(function(){
    Route::resource('/komoditas', KomoditaController::class);
    Route::resource('/produksi', ProduksiController::class);
    Route::get('/laporan', [LaporanController::class,'index'])->name('laporan.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
