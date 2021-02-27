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

Route::get('/', 'PageController@index')->name('home');
Route::get('blog', 'PageController@blog')->name('blog');
Route::get('article_api', 'PageController@articles_api')->name('articles_api');

// Resource Controller

Route::resource('articles', 'ArticleController');
Route::resource('categories', 'CategoryController');
Route::resource('tags', 'TagController');

