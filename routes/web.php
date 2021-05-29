<?php

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
	Route::get('/', 'AdminController@index')->name('admin');
});

Route::group(['prefix' => 'user', 'middleware' => ['auth', 'user']], function () {
	Route::get('/', 'AdminController@index')->name('user');
});

Route::get('show/{id}', 'ProdukController@show')->name('produk.show');
Route::group(['prefix' => 'user', 'middleware' => ['auth', 'user']], function () {
	Route::get('beli/{token_produk}/{id}','PenjualanController@beli')->name('produk.beli');
	Route::post('store', 'PenjualanController@store')->name('penjualan.store');
	Route::post('komentar', 'KomentarController@store')->name('produk.komentar');
});

Route::get('all_produk','SweetwinsController@all_produk');
Route::get('about','SweetwinsController@about');
Route::get('/','SweetwinsController@welcome');
Route::post('postLogin', 'AdminController@postLogin');
Route::get('login', 'AdminController@login')->name('login');
Route::get('regis', 'AdminController@regis')->name('regis');
Route::post('register', 'AdminController@register')->name('register');
Route::get('logout', 'AdminController@logout');