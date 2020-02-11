<?php

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

Route::get('/mahasiswa', 'mahasiswaController@index');

Route::get('/mahasiswa/tambah', 'mahasiswaController@tambah');

Route::post('/mahasiswa/store', 'mahasiswaController@store');

Route::get('/mahasiswa/edit/{id}', 'mahasiswaController@edit');

Route::put('/mahasiswa/update/{id}', 'mahasiswaController@update');

Route::get('/mahasiswa/hapus/{id}', 'mahasiswaController@delete');

Route::get('/mahasiswa','mahasiswaController@index');

Route::get('/mahasiswa/cari','mahasiswaController@cari');

Route::get('/stisla', function() {
	return view('index');

});

