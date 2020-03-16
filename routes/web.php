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


Route::group(['middleware' => 'auth'], function(){

//--------------------------------------TABEL MAHASISWA-------------------------------------
	
Route::get('/mahasiswa', 'mahasiswaController@index');

Route::get('/mahasiswa/tambah', 'mahasiswaController@tambah');

Route::post('/mahasiswa/store', 'mahasiswaController@store');

Route::get('/mahasiswa/edit/{id}', 'mahasiswaController@edit');

Route::put('/mahasiswa/update/{id}', 'mahasiswaController@update');

Route::get('/mahasiswa/hapus/{id}', 'mahasiswaController@delete');

Route::get('/mahasiswa/export_excel', 'mahasiswaController@export_excel');

Route::get('/dashboard', 'mahasiswaController@dashboard');

Route::get('/dashboard', 'mahasiswaController@hitungtable');

//-----------------------------------TABEL JURUSAN---------------------------------------------

Route::get('/jurusan', 'JurusanController@index');

Route::get('/jurusan/tambah', 'JurusanController@tambah');

Route::post('/jurusan/store', 'JurusanController@store');

Route::get('/jurusan/edit/{id}', 'JurusanController@edit');

Route::put('/jurusan/update/{id}', 'JurusanController@update');

Route::get('/jurusan/hapus/{id}', 'JurusanController@delete');



});

Auth::routes();

Route::get('/home', 'mahasiswaController@dashboard')->name('home');

Route::get('/home', 'mahasiswaController@hitungtable');


Route::get('/','landingpageController@index');
