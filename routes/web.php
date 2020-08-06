<?php

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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');

//Post Controller
Route::get('/createpost', 'PostController@create')->name('createpost');
Route::post('/storepost', 'PostController@store')->name('store');
Route::get('/list', 'PostController@list')->name('list');