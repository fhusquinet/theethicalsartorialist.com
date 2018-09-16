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

Route::get('pages/{slug}', 'PageController@show')->name('page');

Route::paginate('articles', 'ArticleController@index')->name('articles.index');

Route::get('articles/{article}', 'ArticleController@show')->name('articles.show');

Route::paginate('categories/{category}', 'CategoryController@show')->name('categories.show');

Route::paginate('tags/{slug}', 'TagController@show')->name('tags.show');

Route::paginate('/search', 'SearchController@show')->name('search');

Route::post('contact', 'ContactController@store')->name('contact');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login.show');
    Route::post('login', 'Auth\LoginController@login')->name('login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::group(['middleware' => ['auth', 'doNotCacheResponse'], 'namespace' => 'Admin',], function () {
        Route::get('/', 'DashboardController@show')->name('show');
        
        Route::resource('articles', 'ArticleController')->parameters([
            'articles' => 'admin_article'
        ]);
        Route::get('articles/{admin_article}/restore', 'ArticleController@restore')->name('articles.restore');
        
        Route::resource('categories', 'CategoryController')->parameters([
            'categories' => 'admin_category'
        ]);
        Route::get('categories/{admin_category}/restore', 'CategoryController@restore')->name('categories.restore');

        Route::resource('tags', 'TagController');

        Route::resource('medias', 'MediaController');
    });
});