<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/home', [HomeController::class, 'index']);
Route::delete('/logout', [LoginController::class, 'logout'])->name('logout');

//user
Route::get('/user', [UserController::class, 'index']);
Route::post('/user/store', [UserController::class, 'store']);
Route::post('/user/edit/{id}', [UserController::class, 'edit']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

//barang
Route::get('/barang', [BarangController::class, 'index']);
Route::post('/barang/store', [BarangController::class, 'store']);
Route::post('/barang/edit/{id}', [BarangController::class, 'edit']);
Route::get('/barang/hapus/{id}', [BarangController::class, 'hapus']);

//kasir
Route::get('/kasir', [KasirController::class, 'index']);

//transaksi
Route::get('/transaksi', [TransaksiController::class, 'index']);
