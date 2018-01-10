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

Route::get('/', 'Article\FindTitleController@findTitleForIndex');
Route::get('list/{name}','Article\FindTitleController@findTitleByColumn');
Route::get('list','Article\FindTitleController@findTitleInIndex');
Route::get('content/{id}','Article\FindArticleController@findArticleInContent');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin-nav',function (){
    return view('layouts.admin-nav');
});
Route::get('admin',function (){
    return view('layouts.admin');
});

Route::get('insertArticle','Article\InsertArticleController@insertArticle');



