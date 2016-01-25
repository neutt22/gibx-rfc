<?php

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/news', function()
{
	return View::make('news');
});

Route::get('/blogs', function()
{
	return View::make('blogs');
});

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('/contacts', function()
{
	return View::make('contacts');
});

Route::get('/cars', array('uses' => 'HomeController@getCars'));
Route::get('/years', array('uses' => 'HomeController@getYears'));
Route::get('/models', array('uses' => 'HomeController@getModels'));

Route::get('/compare', array('uses' => 'HomeController@getCompare'));

Route::get('/okc', function(){
	return View::make('okc');
});
