<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', 'HomeController@index');

Route::get('/manage', 'ManagementController@index');

Route::get('/about', 'AboutController@index');

//Route::resource('/', 'CarsController');

Route::get('/', 'CarsController@index');
Route::get('/create', 'CarsController@create');

Route::post('/submit', 'CarsController@add');
Route::get('/edit/{id}', 'CarsController@edit');
Route::post('/edit', 'CarsController@subedit');
Route::get('/delete/{id}', 'CarsController@delete');
