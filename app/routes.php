<?php

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/news', function()
{
	return View::make('news');
});

Route::get('/services', function()
{
	return View::make('services');
});

Route::get('/products', function()
{
	return View::make('products');
});

Route::get('/contacts', function()
{
	return View::make('contacts');
});

Route::get('/cars', array('uses' => 'HomeController@getCars'));
Route::get('/years', array('uses' => 'HomeController@getYears'));
Route::get('/models', array('uses' => 'HomeController@getModels'));

Route::get('/compare', array('uses' => 'HomeController@getCompare'));
