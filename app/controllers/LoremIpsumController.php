<?php

class LoremIpsumController extends BaseController {
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// return the defalt view
		return View::make('text');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{		
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
					
		//Create paragraphs
		$html = getIpsum($numlines);

		// Passing Data To View
		return View::make('text')->with('text', $html);
		
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	
		// gets Lorem Ipsum as a html in paragraphs - return as string.
		function getIpsum($numParagraphs)
		{
			//Create paragraphs
			$generator = new Badcow\LoremIpsum\Generator();
			$paragraphs = $generator->getParagraphs($numParagraphs);
			$htmlAsString = implode('<p>', $paragraphs);
			
			return $htmlAsString;

		}
					
		//Create paragraphs
		$html = getIpsum($id);

		return Response::json($html);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		
	}


}
