<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::resource('musica', 'musicController');
//Route::post('/store', 'musicController@s');

Route::get('/', function()
{
	return View::make('music/music');
});
