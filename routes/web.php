<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\ProdukController;

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

Route::get('/', function () {return view('welcome');});
Route::get('/halaman-login', [AuthController::class, 'index'])->name('halaman-login');
Route::post('/halaman-login/auth', [AuthController::class, 'auth'])->name('login.auth');

Route::get('/dashboard', [AdministratorController::class, "dashboard"]);

Route::get('/produks', [ProdukController::class, 'index'])->name('data.produks');
Route::get('/produks-create', [ProdukController::class, 'create'])->name('produks.create');
Route::post('/produks-store', [ProdukController::class, 'store'])->name('produks.store');
Route::get('/produks-edit/{id}', [ProdukController::class, 'edit'])->name('produks.edit');
Route::put('/produks-update/{id}', [ProdukController::class, 'update'])->name('produks.update');
Route::delete('/produks-delete/{id}', [ProdukController::class, 'destroy'])->name('produks.delete');