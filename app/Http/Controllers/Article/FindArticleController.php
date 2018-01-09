<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class FindArticleController extends Controller{
    public function findArticleInContent(Request $request,$id){
        $article = Article::where('id',$id)->first();
        $auth = User::where('id',$article->uid)->first();
        Article::increment('view');
        return view('content')
            ->with('article',$article)
            ->with('auth',$auth->name)
            ->with('list',self::findHotList($request));
    }
    public static function findHotList(Request $request){
        if ($request->session()->has('hotList')){
            $list = $request->session()->get('hotList');
        }else{
            $list = Article::orderBy('view','desc')->limit(5)->get();
        }
        return $list;
    }
}