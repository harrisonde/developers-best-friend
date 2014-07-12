<?php

class UserGeneratorController extends \BaseController {
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// return the defalt view
		return View::make('user');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		echo('create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{		
		
		function makeUser($numUsers)
		{	
			// An array to hold all our user data
			$userGroup = array();
			
				// Make a new faker factory
				$userFactory = Faker\Factory::create();
				
				// build fake user data for each requested user
				for($i=0; $i < $numUsers; $i++)
				{
			
					
					// store said fake user data
					array_push($userGroup, array('name' => $userFactory->name, 'address' =>  $userFactory->address, 'image' => $userFactory->imageUrl(150, 150, 'people')));
					
					
				}
			
			return $userGroup;
		}
		
		// Nunmber of user set by form
		$numUsers = (int) Input::get('user');
		
		// Array of fake user information
		$singleUser = makeUser($numUsers);
		
		// return with fake user data
		return View::make('user')->with('users', $singleUser);
		
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		echo('show');
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
		echo('edit');
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
		echo('update');
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
		echo('detroy');
	}


}
