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

/*======================Route for Frontend========================*/

Route::get('/', 'Frontends\HomeController@index');
Route::get('insert', 'Frontends\HomeController@insert');












/*======================Route for backend=========================*/

Route::get('backend/', 'HomeController@index');
Route::get('backend/form', 'HomeController@form');

