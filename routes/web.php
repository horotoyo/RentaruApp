<?php

Auth::routes();

Route::prefix('admin')->group(function(){
	Route::get('/', 'Admin\HomeController@index')->name('admin');
	Route::resource('/member', 'Admin\MemberController');
	Route::resource('/order', 'Admin\OrderController');
	Route::resource('/payment', 'Admin\PaymentOrderController');
	Route::resource('/product', 'Admin\ProductController');
	Route::resource('/role', 'Admin\RoleController');
	Route::resource('/user', 'Admin\UserController');
	Route::resource('/type', 'Admin\TypeProductController');
});