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

Route::get('/', 'MainController@index');
Route::get('/team', 'MainController@team');
Route::get('/services', 'MainController@services');
Route::get('/contact', 'MainController@contact');
Route::get('/gallery', 'MainController@gallery');
Route::get('/about', 'MainController@about');
