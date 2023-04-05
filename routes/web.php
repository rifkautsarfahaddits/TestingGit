<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::get('/welcome', [App\Http\Controllers\pembelianContror::class, 'welcome']);

Route::get('/tambah_pembelian', function () {
    return view('tambah_pembelian');
});


Route::get('/pembelian', [App\Http\Controllers\pembelianController::class, 'index']);
Route::get('/pembelian/tambah',[App\Http\Controllers\pembelianController::class, 'tambah']);
Route::post('/pembelian/store',[App\Http\Controllers\pembelianController::class, 'store']);
Route::get('/pembelian/edit/{id_pembelian}',[App\Http\Controllers\pembelianController::class, 'edit']);
Route::post('/pembelian/update',[App\Http\Controllers\pembelianController::class, 'update']);
Route::get('/pembelian/hapus/{id_pembelian}',[App\Http\Controllers\pembelianController::class, 'hapus']);
