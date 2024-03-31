<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('beranda');
});

Route::middleware(['auth', 'status'])->group(function () {
    Route::resource('kategori', KategoriController::class);
    Route::resource('post', PostController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
});

Route::get('beranda', [BerandaController::class, 'index']);
Route::get('beranda/detail/{id}', [BerandaController::class, 'detail']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
