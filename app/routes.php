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
	return View::make('landing');
});
Route::get('/text', function()
{
	return View::make('text');
});
Route::get('/user', function()
{
	return View::make('text');
});

Route::post('/text', 'LoremIpsumController@showParagraph');	

Route::get('/user', function()
{
	return View::make('text');
});
App::missing(function($exception){
     return Response::make("Page not found", 404);
});