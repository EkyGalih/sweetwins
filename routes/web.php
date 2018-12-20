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

// Route::get('/', function () {
//     return view('welcome','ProdukController@welcome');
// });
Route::group(['middleware' => 'auth'], function(){
	Route::group(['middleware' => 'superadmin'], function(){
		// Resouce of controller
		Route::resource('home', 'AdminController');
		Route::resource('produk','ProdukController');
		Route::resource('komentar','KomentarController');
		Route::resource('penjualan','PenjualanController');
		// Specific of controller
		Route::get('users', 'AdminController@users');
	});
});
Route::get('all_produk','SweetwinsController@all_produk');
Route::get('about','SweetwinsController@about');
Route::get('beli', 'SweetwinsController@beli');
Route::get('beli/{token_produk}/{id}','PenjualanController@beli');
Route::get('/','SweetwinsController@welcome');
Route::post('postLogin', 'AdminController@postLogin');
Route::group(['middleware' => 'guest'], function(){
	Route::get('login', 'AdminController@login')->name('login');
	Route::get('regis', 'AdminController@regis')->name('regis');
	Route::post('register', 'AdminController@register')->name('register');
});
	Route::get('logout', 'AdminController@logout');