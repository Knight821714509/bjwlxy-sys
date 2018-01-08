<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Controllers\Controller;
use App\User;

class FindArticleController extends Controller{
    public function findArticleInContent($id){
        $article = Article::where('id',$id)->first();
        $auth = User::where('id',$article->uid)->first();
        $list = Article::orderBy('view','desc')->limit(5)->get();
        Article::increment('view');
        return view('content')
            ->with('article',['title'=>$article->title,'auth'=>$auth->name,'content'=>$article->content])
            ->with('list',$list);
    }
}