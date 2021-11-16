<?php

Route::get('/', 'RecipeController@index');
Route::get('/recipes', 'RecipeController@recipes');
Route::get('/show', 'RecipeController@show');
Route::get('/create', 'RecipeController@create');
Route::get('/recipe/{recipe}/edit', 'RecipeController@edit');
Route::put('/recipe/{recipe}', 'RecipeController@update');
Route::delete('/recipe/{recipe}', 'PostController@delete');
Route::get('/recipe/{recipe}', 'RecipeController@show');
Route::post('/recuoe', 'RecipeController@store');
