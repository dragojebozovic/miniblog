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
Route::get('home', 'HomeController@index');

Route::get('/contact', 'WelcomeController@contact');

// Route::get('/articles', 'ArticlesController@index');
// Route::get('/articles/{id}','ArticlesController@show')->where(array('id' => '[1-9][0-9]*'));
// Route::get('/articles/create','ArticlesController@create');
// Route::post('/articles', 'ArticlesController@store');
// Route::get('/articles/{id}/edit', 'ArticlesController@edit');

Route::resource('articles','ArticlesController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
