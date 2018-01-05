<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Controllers\Controller;

class FindArticleController extends Controller{
    public function findArticleInContent($id){
        $article = Article::where('id',$id)->get();
//        return view('content')->with('content',['title'=>$id,'auth'=>$id,'content'=>$id]);
        return view('content')->with('article',['title'=>$article[0]->title,'auth'=>$article[0]->uid,'content'=>$article[0]->content]);
    }
}