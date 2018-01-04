<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;

class FindArticleController extends Controller{
    public function findArticle(){
        return view('test')->with('Article',['title'=>'标题','auth'=>'管理员','content'=>'文章内容','date'=>'2018']);
    }
}