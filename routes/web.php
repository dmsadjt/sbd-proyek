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

Route::get('/divisi/index', 'DivisiController@index');
Route::get('/divisi/add', 'DivisiController@addNew');
Route::post('/divisi/store', 'DivisiController@store');
Route::get('/divisi/edit/{id}', 'DivisiController@edit');
Route::post('/divisi/update', 'DivisiController@update');
Route::get('/divisi/delete/{id}', 'DivisiController@delete');

