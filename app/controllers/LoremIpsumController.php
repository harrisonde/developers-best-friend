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
	| To allow a call for text without using the form, user can pass @pram to
	| showParagraph( ) - if none is provided @pram is set to 0; 
	|
	| http://localhost:8888/text/4 - returns 4 paragraphs of lorem ipsum
	|
	|					
	*/
	
	public function showParagraph($pram_url = 0)
	{
		// Nunmber of lines set by form
		$numlines = (int) Input::get('lines');
		
		// gets Lorem Ipsum as a html in paragraphs - return as string.
		function getIpsum($numParagraphs)
		{
			//Create paragraphs
			$generator = new Badcow\LoremIpsum\Generator();
			$paragraphs = $generator->getParagraphs($numParagraphs);
			$htmlAsString = implode('<p>', $paragraphs);
			
			return $htmlAsString;

		}
		
		if($numlines !== 0){
			echo('aa');
			//Create paragraphs
			$html = getIpsum($numlines);

			// Passing Data To View
			return View::make('text')->with('text', $html);

		}
		// Requested Lorem Ipsum via query string
		else if($pram_url > 0)
		{
				echo('a');
				
				//Create paragraphs
				$html = getIpsum($pram_url);
				
				// Passing Data To View
				return View::make('text')->with('text', $html);
		}
		// return just the default view.
		else{
		
				echo('c');
				
				// return the default view;
				return View::make('text');
			
		}
		
		
	}
	
}