<?php

Route::get('/', function () {
    return view('login');
});


	Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');	

	Route::get('/moveDetails', 'GroupMovController@moveDetails')->name('moveDetails')->middleware('auth');	
	Route::get('/movcreate', 'GroupMovController@index')->name('movcreate')->middleware('auth');	
	Route::post('/movcreate', 'GroupMovController@store')->name('movcreate.store');	
	Route::get('/movcreate/{id}', 'GroupMovController@edit')->name('movcreate.edit')->middleware('auth');	
	Route::post('/movcreate/{id}', 'GroupMovController@update')->name('movcreate.update');

	Route::get('/mov/{id}', 'GroupMovController@sendedit')->name('movcreate.sendedit')->middleware('auth');	
	Route::post('/mov/{id}', 'GroupMovController@sendupdate')->name('movcreate.sendupdate');	

	Route::get('/movprintpreview/{id}', 'GroupMovController@printpreview')->name('movprintpreview')->middleware('auth');	

	Route::get('/movsearch', 'GroupMovController@movSearch')->name('movsearch')->middleware('auth');	
	
	Route::get('/originatorcreate', 'OriginatorController@index')->name('originatorcreate')->middleware('auth');
	Route::post('/originatorcreate', 'OriginatorController@store')->name('originatorcreate.store');	
	Route::get('/originatorcreate/{id}', 'OriginatorController@edit')->name('originatorcreate.edit')->middleware('auth');	
	Route::post('/originatorcreate/{id}', 'OriginatorController@update')->name('originatorcreate.update');

	Route::get('/originatorinfo', 'OriginatorController@originatorInfo')->name('originatorinfo')->middleware('auth');
	
	Route::get('/category', 'CategoryController@index')->name('category')->middleware('auth');	
	Route::post('/category', 'CategoryController@store')->name('category.store');
		
	Route::get('/product', 'ProductController@index')->name('product')->middleware('auth');	
	Route::post('/product', 'ProductController@store')->name('product.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

