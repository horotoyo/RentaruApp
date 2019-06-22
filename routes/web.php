<?php

Auth::routes();

Route::prefix('admin')->group(function(){
	Route::get('/home', 'Admin\HomeController@index')->name('home.index');
	Route::get('/payment', 'Admin\PaymentOrderController@index');
});