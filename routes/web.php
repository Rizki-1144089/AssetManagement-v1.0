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

Route::get('/', 'IndexController@index')->middleware('auth');

Route::group(['prefix' => 'user','middleware' => 'auth'], function () {
	Route::get('/', 'UserController@index');
});


Route::group(['prefix' => 'Barang','middleware' => 'auth'], function () {
	Route::get('/', 'BarangController@index');
	Route::get('create', 'BarangController@create')->middleware('role:1');
	Route::post('store','BarangController@store');
	Route::get('{id?}', 'BarangController@edit');
	Route::put('update/{id?}','BarangController@update');
	Route::delete('delete/{id}', 'BarangController@destroy');
	
});

Route::group(['prefix' => 'Barangdetail','middleware' => 'auth'], function () {
	Route::get('{id?}', 'BarangController@show');
});

Route::group(['prefix' => 'Kategori','middleware' => 'auth'], function () {
	Route::get('/', 'KategoriBarangController@index');
});

Route::group(['prefix' => 'Lokasi','middleware' => 'auth'], function () {
	Route::get('/', 'LokasiController@index');
});

Route::get('/role', 'Auth.RegisterController@add');

Auth::routes();

Route::get('/home', 'HomeController@index');
