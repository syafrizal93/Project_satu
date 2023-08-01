<?php

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
    return view('welcome');
});
Route::get('katalog', 'App\Http\Controllers\KatalogController@index');
Route::get('katalog/tambah', 'App\Http\Controllers\KatalogController@tambah');
Route::post('katalog/tambah_proses', 'App\Http\Controllers\KatalogController@tambah_proses');
Route::get('katalog/edit/{id}', 'App\Http\Controllers\KatalogController@edit');
Route::post('katalog/edit_proses', 'App\Http\Controllers\KatalogController@edit_proses');
Route::get('katalog/delete/{id}', 'App\Http\Controllers\KatalogController@delete');

Route::get('pengembalian', 'App\Http\Controllers\PengembalianController@index');
Route::get('pengembalian/tambah', 'App\Http\Controllers\PengembalianController@tambah');
Route::post('pengembalian/tambah_proses', 'App\Http\Controllers\PengembalianController@tambah_proses');
Route::get('pengembalian/edit/{id}', 'App\Http\Controllers\PengembalianController@edit');
Route::post('pengembalian/edit_proses', 'App\Http\Controllers\PengembalianController@edit_proses');
Route::get('pengembalian/delete/{id}', 'App\Http\Controllers\PengembalianController@delete');