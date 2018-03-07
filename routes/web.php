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

// 前台界面路由
Route::get('/', 'Article\FindTitleController@findTitleForIndex');
// 获取列表页面
Route::get('list/{name}','Article\FindTitleController@findTitleByColumn');
// 获取文章内容
Route::get('content/{id}','Article\FindArticleController@findArticleInContent');
// 登录路由
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// 后台功能路由
Route::get('admin-nav',function (){
    return view('layouts.admin-nav');
});
Route::get('admin',function (){
    return view('layouts.admin');
});
Route::get('in-col',function (){
    return view('admin.insert-column');
});
Route::get('sel-col',function (){
    return view('admin.select-column');
});
Route::get('add-mem',function (){
    return view('admin.add-member');
});
Route::get('del-mem',function (){
    return view('admin.del-member');
});
Route::get('permission',function (){
    return view('admin.permission');
});
Route::get('title',function (){
    return view('admin.title');
});
Route::get('banner',function (){
    return view('admin.banner');
});
Route::get('top',function (){
    return view('admin.top');
});
Route::get('friend',function (){
    return view('admin.friend-link');
});
Route::get('info',function (){
    return view('admin.up-info');
});
//初始化添加文章页面文章分类
Route::get('in-art','Article\InsertArticleController@initView');
//初始化编辑文章页面
Route::get('sel-art','Article\FindTitleController@newList');
//添加文章
Route::post('in-arti','Article\InsertArticleController@insertArticle');
