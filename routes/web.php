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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Divisi
Route::get('/divisi/index', 'DivisiController@index');
Route::get('/divisi/add', 'DivisiController@addNew');
Route::post('/divisi/store', 'DivisiController@store');
Route::get('/divisi/edit/{id}', 'DivisiController@edit');
Route::post('/divisi/update', 'DivisiController@update');
Route::get('/divisi/delete/{id}', 'DivisiController@delete');

//Anggota
Route::get('/anggota/index', 'AnggotaController@index');
Route::get('/anggota/add', 'AnggotaController@addNew');
Route::post('/anggota/store', 'AnggotaController@store');
Route::get('/anggota/edit/{id}', 'AnggotaController@edit');
Route::post('/anggota/update', 'AnggotaController@update');
Route::get('/anggota/delete/{id}', 'AnggotaController@delete');

//Proker dan Agenda
Route::get('/kegiatan/index', 'KegiatanController@index');
Route::get('/kegiatan/add', 'KegiatanController@addNew');
Route::post('/kegiatan/store', 'KegiatanController@store');
Route::get('/kegiatan/edit/{id}', 'KegiatanController@edit');
Route::post('/kegiatan/update', 'KegiatanController@update');
Route::get('/kegiatan/delete/{id}', 'KegiatanController@delete');

//Proker dan Agenda
Route::get('/jadwal/index', 'JadwalController@index');
Route::get('/jadwal/add', 'JadwalController@addNew');
Route::post('/jadwal/store', 'JadwalController@store');
Route::get('/jadwal/edit/{id}', 'JadwalController@edit');
Route::post('/jadwal/update', 'JadwalController@update');
Route::get('/jadwal/delete/{id}', 'JadwalController@delete');
