<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('/thread/{id}/detail', 'ThreadController@detail');
Route::post('/comment/store', 'CommentController@store');

//search
Route::get('/search', 'SearchController@index');
Route::get('/search/{keyward}', 'SearchController@getResult');

Route::auth();

Route::group(['middleware' => ['auth']], function () {
	
	//home
	Route::get('home', function () {
	    return redirect('/');
	});

	//avatar
	Route::get('/avatar/edit', 'AvatarController@edit');
	Route::post('/avatar/update', 'AvatarController@update');

	//thread
	Route::get('/thread', 'ThreadController@index');
	Route::post('/thread/store', 'ThreadController@store');
	Route::get('/thread/{id}/edit', 'ThreadController@edit');
	Route::post('/thread/update', 'ThreadController@update');
	Route::get('/thread/{id}/delete', 'ThreadController@destroy');


	//comments
	Route::get('/comment/{id}/edit', 'CommentController@edit');
	Route::get('/comment/{id}/delete', 'CommentController@destroy');
	Route::post('/comment/update', 'CommentController@update');

});
