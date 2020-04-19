<?php

use Illuminate\Support\Facades\Route;

/**
 * //$this->get('categories', 'Api\CategoryController@index');
 * Route::get('/categories', 'Api\CategoryController@index');
 * Route::post('/categories', 'Api\CategoryController@store');
 * Route::put('/categories/{id}', 'Api\CategoryController@update');
 * Route::delete('/categories/{id}', 'Api\CategoryController@delete');
 */

Route::post('auth', 'Auth\AuthApiController@authenticate');
Route::post('auth-refresh', 'Auth\AuthApiController@refreshToken');
Route::get('me', 'Auth\AuthApiController@getAuthenticatedUser');

Route::prefix('v1')->group(function () {

    Route::namespace('Api\v1')->group(function () {

        Route::resource('categories', 'CategoryController', [
            'except' => ['edit', 'create']
        ]);

        Route::resource('products', 'ProductController');

        Route::get('categories/{id}/products', 'CategoryController@products');

    });

});
