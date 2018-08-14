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

Route::get('/', 'HomepageController@show')->name('homepage');

Route::get('articles', 'ArticleController@index')->name('articles.index');
Route::get('articles/{article}', 'ArticleController@show')->name('articles.show');

Route::get('categories/{category}', 'CategoryController@show')->name('categories.show');

Route::get('tags/{slug}', 'TagController@show')->name('tags.show');