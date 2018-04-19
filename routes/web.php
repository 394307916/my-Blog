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

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/articles','ArticlePagesController@index')->name('articles.index');
Route::get('/articles/{article}','ArticlePagesController@show')->name('articles.show');
Route::get('/moods','MoodController@show')->name('moods.show');

Route::post('/search','ArticlePagesController@search')->name('search');
Route::get('/address','LinkController@link')->name('link.show');

Route::post('/comment','CommentController@store')->name('comment.store');
Route::get('/comment','CommentController@show')->name('comment.show');

Route::get('login','SessionsController@create')->name('login');
Route::post('login','SessionsController@store')->name('login');

Route::get('myadmin','SessionsController@home')->name('myadmin');

Route::delete('logout','SessionsController@destroy')->name('logout');

Route::post('/linksearch','LinkController@search')->name('link.search');




