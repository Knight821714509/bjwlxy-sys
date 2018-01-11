<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Controllers\Column\FindColumnController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InsertArticleController extends Controller{
    public function insertArticle(Request $request){
        $article = new Article();
        $article->uid = Auth::id();
        $article->title = $request->input('title');
        $article->keywords = $request->input('keywords');
        $article->description = $request->input('description');
        $category = FindColumnController::findColumnByName($request->input('category'));
        $article->category_id = $category->id;
        $article->content = $request->input('content');
        $article->save();
        return view('admin.insert-article');
    }
    public function initView(){

    }
}