<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'TasksController@index');
Route::post('tasks', 'TasksController@store');
Route::patch('tasks/{task}', 'TasksController@update');
Route::delete('tasks/{task}', 'TasksController@destroy');