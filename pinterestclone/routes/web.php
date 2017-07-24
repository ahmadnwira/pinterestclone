<?php

/* pinsRoutes */

/*Display 5 most popular pins and master-template*/
Route::get('/', function () {
    return 'welcome to foodiespinteris';
})->name('home');

/* only if you are auth this is your pins */
Route::get('/pins/{id}/user', function () {
    return 'this the your pins -the most recent 30 you can see older by pager-';
});

Route::get('/pins/recent', function () {
    return 'this the most recent pins -the most recent 50-';
});

/*only if you are auth this is your pins */
Route::get('/pins/new',function(){
	return 'only if you are auth load form to add new function';
});

/*this will be post request*/
Route::get('/pins/store',function(){
	return 'this will be post request to store pin';
});

/*delte a bin this should be ajax*/
Route::get('pins/{id}/delete',function(){
	return 'delete this';
});

/* this should be ajax */
Route::get('/pins/{id}/like',function(){
	return 'like this';
});

/* this should be ajax */
Route::get('/pins/{id}/share',function(){
	return 'like this';
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
