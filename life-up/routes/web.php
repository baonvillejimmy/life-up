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

Route::get('/', 'IndexController@index');

/*
* Service route
*/
Route::get('/service', 'ServiceController@index');

/*
* pictures routes
*/
Route::get('/pictures', 'PicturesController@index');
Route::get('/pictures/{categoryId}', 'PictureController@show');

/*
/news routes*/
Route::get('/news', 'NewsController@index');
Route::get('/news/{articleId}', 'NewsController@show');

Route::get('/aboutUs', 'AboutUsController@index');
Route::get('/contact', 'ContactController@index');
Route::post('/contact','ContactController@store')->name('contact.store');
