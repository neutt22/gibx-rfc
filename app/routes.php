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
