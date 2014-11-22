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

Route::get('/', array(
		'as' => 'cv', 
		'uses' => 'CvController@cv'
));

Route::get('/bootstrap', array(
		'as' => 'cv', 
		'uses' => 'CvController@bootstrap'
));


// Route::get('/', function()
// {
// return Redirect::route('cv');

// });

// Route::get('/cv', array(
// 		'as' => 'cv', 
// 		'uses' => 'CvController@cv'
// ));
