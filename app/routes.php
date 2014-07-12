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
| Method  | Route | Description                  |
|-------- | ----- | ---------------------------- |
| GET     | /     | index						 |
| GET     | /text | lore ipsum generator form    |
| GET     | /user | user generator form          |
| POST    | /text | handel lore ipsum generation |
| POST    | /user | handle user generation       |
| 
*/


Route::get('/', function()
{
	return View::make('index');
});


//http://atomicplayboy.net/blog/2013/06/19/nested-resource-controllers-in-laravel/

/*
*
*Laravel allows you to easily define a single route to handle every action in a controller using simple, REST naming conventions. First, define the route using the Route::controller method:
*
* Use the Artisan CLI to create a scaffold of empty stub methods corresponding to the CRUD verbs:	
*/

Route::resource('user','UserGeneratorController');
Route::resource('text','LoremIpsumController@showParagraph');

//Route::post('/text', 'LoremIpsumController@showParagraph');	




App::missing(function($exception){
     return Response::make("Page not found", 404);
});