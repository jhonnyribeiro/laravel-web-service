<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




//$this->get('categories', 'Api\CategoryController@index');
Route::get('/categories', 'Api\CategoryController@index');
Route::post('/categories', 'Api\CategoryController@store');




