<?php

use Illuminate\Support\Facades\Route;




//$this->get('categories', 'Api\CategoryController@index');
Route::get('/categories', 'Api\CategoryController@index');
Route::post('/categories', 'Api\CategoryController@store');
Route::put('/categories/{id}', 'Api\CategoryController@update');




