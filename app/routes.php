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
| Method  | Route        | Description                  |
|-------- | ------------ | ---------------------------- |
| GET     | /            | index						|
| GET     | /text        | lore ipsum generator form    |
| POST    | /text        | handel lore ipsum generation |
| POST    | /user        | handle user generation       |
| GET     | /user        | user generator form          |
| POST    | /user/{$num} | return JSON with x users     |
| 
*/


Route::get('/', function()
{
	return View::make('index');
});

/*
*
* Laravel allows you to easily define a single route to handle every 
* action in a controller using simple, REST naming conventions. First, 
* define the route using the Route::controller method:
* 
* Use the Artisan CLI to create a scaffold of empty stub methods 
* corresponding to the CRUD verbs:	
*/
Route::resource('user','UserGeneratorController');
Route::resource('text','LoremIpsumController');
/*
* Laravel will let use display a good old 404, let's use that little guy. 
*/
App::missing(function($exception){
     return Response::make("Dang kid we don't got a page like that.", 404);
});