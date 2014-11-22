<?php

class CvController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function cv()
	{
		$educations = Education::orderBy('id', 'DESC')->get();
		$employments = Employment::orderBy('id', 'DESC')->get();
		$commitments = Commitment::orderBy('id', 'DESC')->get();
		return View::make('index')
		->with('educations', $educations)
		->with('employments', $employments)
		->with('commitments', $commitments);
	}

	public function bootstrap(){
		return View::make('layout.bootstrap');
	}

	
			
}
