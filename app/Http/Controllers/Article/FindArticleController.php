<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Column\FindColumnController;
use App\User;
use Illuminate\Http\Request;

class FindArticleController extends Controller{
    public function findArticleInContent($id,Request $request){
        $article = Article::where('id',$id)->first();
        $auth = User::where('id',$article->uid)->first();
        Article::increment('view');
        $nav = FindColumnController::findAllColumnByLayout(0);
        return view('content')
            ->with('nav',$nav)
            ->with('article',$article)
            ->with('auth',$auth->name)
            ->with('list',self::findHotList($request,'view'))
            ->with('newList',self::findHotList($request,'create_time'));
    }
    public static function findArticleById($id){
        $article = Article::where('id',$id)->first();
        $auth = User::where('id',$article->uid)->first();
        $articleArr = array($article,$auth);
        return $articleArr;
    }
    public static function findHotList(Request $request,$flag){
        if ($request->session()->has('hotList')){
            $list = $request->session()->get('hotList');
        }else{
            $list = Article::orderBy($flag,'desc')->limit(5)->get();
        }
        return $list;
    }
}