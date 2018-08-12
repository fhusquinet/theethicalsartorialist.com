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

Route::get('/', function () {
    return view('welcome');
});

Route::get('medias', function() {
    site()->addImage('https://www.styleforum.net/content/type/61/id/2247191');
});

Route::get('articles/{article}', 'ArticleController@show')->name('articles.show');