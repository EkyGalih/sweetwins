<?php

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::group(['prefix' => 'produk'], function(){
        Route::get('/', 'ProdukController@index')->name('produk-admin');
        Route::post('store', 'ProdukController@store')->name('produk-admin.store');
        Route::put('update/{id}', 'ProdukController@update')->name('produk-admin.update');
        Route::get('destroy/{id}', 'ProdukController@destroy')->name('produk-admin.destroy');
    });
    Route::resource('home', 'AdminController');
    Route::resource('komentar','KomentarController');
    Route::resource('penjualan','PenjualanController');
    // Specific of controller
    Route::get('users', 'AdminController@users');
});