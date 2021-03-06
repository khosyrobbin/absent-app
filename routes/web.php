<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/cari', [HomeController::class, 'cari']);
Route::get('/home/pdf', [HomeController::class, 'pdf']);

Route::get('/tabel', [TabelController::class, 'index'])->name('tabel');
Route::get('/tabel/add', [TabelController::class, 'add']);
Route::post('/tabel/simpan', [TabelController::class, 'simpan']);
Route::get('/tabel/edit/{id_absen}', [TabelController::class, 'edit']);
Route::post('/tabel/update/{id_absen}', [TabelController::class, 'update']);
Route::get('/tabel/delete/{id_absen}', [TabelController::class, 'delete']);
Route::get('/tabel/cari', [TabelController::class, 'cari']);

Route::get('/report', [ReportController::class, 'index'])->name('report');

Route::get('/profil', [ProfileController::class, 'index'])->name('profil');
Route::get('/profil/edit/{id}', [ProfileController::class, 'edit']);
Route::post('/profil/update/{id}', [ProfileController::class, 'update']);
Route::get('/profil/delete/{id}', [ProfileController::class, 'delete']);
Route::get('/profil/add', [ProfileController::class, 'add']);
Route::post('/profil/simpan', [ProfileController::class, 'simpan']);
