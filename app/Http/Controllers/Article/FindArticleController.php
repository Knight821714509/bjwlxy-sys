<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Controllers\Controller;

class FindArticleController extends Controller{
    public function findArticle(){
        $article = Article::all();
        return view('test')->with('Article',['title'=>$article[1] ->title,'auth'=>$article[1] ->uid,'content'=>$article[1] ->content,'date'=>'2018']);
    }
}