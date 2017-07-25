<?php

Auth::routes();

/* pinsRoutes */
Route::get('/','PinController@index')->name('home');
Route::get('/pins/new','PinController@new');
Route::post('/pins/store','PinController@store');
Route::get('pins/{pin}/delete','PinController@delete');
/* most recent 50 */
Route::get('/pins/recent','PinController@recent');

/* user routes*/
/* only if you are auth this is your pins */
Route::get('/yourboard','UserController@index');
/* this should be ajax */
Route::get('/pins/{id}/like','UserController');
/* this should be ajax */
Route::get('/pins/{id}/share','UserController');
