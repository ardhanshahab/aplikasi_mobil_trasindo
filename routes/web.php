<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mobilController;

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
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/datamobil', [App\Http\Controllers\mobilController::class, 'index'])->name('index.mobil');
Route::get('/createmobil', [App\Http\Controllers\mobilController::class, 'create'])->name('create.mobil');
Route::get('/showmobil', [App\Http\Controllers\mobilController::class, 'create'])->name('show.mobil');
Route::post('/storemobil', [App\Http\Controllers\mobilController::class, 'store'])->name('store.mobil');
Route::post('/hapusmobil', [App\Http\Controllers\mobilController::class, 'destroy'])->name('destroy.mobil');
Route::post('/editmobil', [App\Http\Controllers\mobilController::class, 'destroy'])->name('edit.mobil');

