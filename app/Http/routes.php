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
use Illuminate\Pagination\LengthAwarePaginator;

Route::get('/','Flow@index');
Route::get('/add','AddNews@index');


Route::get('/tj/','Flow@indexTj');
Route::get('/create/','AddNews@create');
Route::get('/webproject/','Flow@indexWp');
