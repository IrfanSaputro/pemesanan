<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\IndexController;

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
    return view('user.home');
});

Route::get('logout', [LoginController::class,'logout']);

// Route::get('/produk', [ProdukController::class, 'index']);
// Route::post('/tambah-produk', [ProdukController::class, 'tambah']);
// Route::post('/tambah-produk', [ProdukController::class, 'tambah']);
// Route::post('/edit-produk', [ProdukController::class, 'edit']);
Route::group(['middleware' => 'revalidate'], function()
{
    Auth::routes();

    Route::resource('dashboard', DashboardController::class)->middleware('auth');

    Route::resource('produk', ProdukController::class)->middleware('auth');

    Route::resource('pemesan', PemesanController::class)->middleware('auth');
});

Route::resource('index', IndexController::class);

// Route::get('/halaman-pesan/{id_produk}',[IndexController::class,'pesan']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
