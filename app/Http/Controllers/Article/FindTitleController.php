<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FindTitleController extends Controller{
    public function findTitleInIndex(Request $request){
        $artlist = Article::paginate(10);
        return view('list')->with('titleList',$artlist)
            ->with('list',FindArticleController::findHotList($request));
    }
}