<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DosenController;

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

Route::get('/error', function () {
    return "<h1>Server Error : Ada Kesalahan di Server</h1>";
});

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog2', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

//Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');


//use App\Http\Controllers\MaskerDBController;
//request:Illuminate\Http\Request

Route::get('/masker','App\Http\Controllers\MaskerController@indexmasker');
Route::get('/masker/tambah','App\Http\Controllers\MaskerController@tambahmasker');
Route::post('/masker/store','App\Http\Controllers\MaskerController@store');
Route::get('/masker/edit/{id}','App\Http\Controllers\MaskerController@editmasker');
Route::post('/masker/update','App\Http\Controllers\MaskerController@update');
Route::get('/masker/hapus/{id}','App\Http\Controllers\MaskerController@hapus');
Route::get('/masker/cari','App\Http\Controllers\MaskerController@cari');

Route::get('/keranjangbelanja', 'App\Http\Controllers\KeranjangBelanjaController@index');
Route::get('/keranjangbelanja/create', 'App\Http\Controllers\KeranjangBelanjaController@create');
Route::post('/keranjangbelanja/store', 'App\Http\Controllers\KeranjangBelanjaController@store');
Route::delete('keranjangbelanja/destroy/{ID}', 'App\Http\Controllers\KeranjangBelanjaController@destroy');
