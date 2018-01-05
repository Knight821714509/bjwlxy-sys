<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Controllers\Controller;

class FindArticleController extends Controller{
    public function findArticleInContent($id){
        $article = Article::find()->where('id',$id);
        return view('content')->with('article',['title'=>$article[0]->title,'auth'=>$article[0]->uid]);
    }
}