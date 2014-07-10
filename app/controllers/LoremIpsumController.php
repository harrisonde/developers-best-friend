<?php

class LoremIpsumController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Lorem Ipsum Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controller to build paragraphs of lorem ipsum, Closure
	| based routes. That's great! Here is an a controller method to return a
	| bunch of lorem ipsum. To route to this controller, just add the route:
	|
	|	Route::get('/', 'LoremIpsumController@showWelcome');
	|
	*/

	public function showParagraph()
	{
		//Create paragraphs
		$numlines = Input::get('lines');
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($numlines);
		$html = implode('<p>', $paragraphs);
		//Passing Data To Views
		return $html;
	}

}
