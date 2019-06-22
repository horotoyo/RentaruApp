<?php

Auth::routes();

Route::get('/home', 'Admin\HomeController@index')->name('home.index');
