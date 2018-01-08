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
    return view('index');
});

Route::get('insertArticle','Article\InsertArticleController@insertArticle');

Route::get('findArticle','Article\FindArticleController@findArticle');

Route::get('content/{id}','Article\FindArticleController@findArticleInContent');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');