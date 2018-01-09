<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Controllers\Column\FindColumnController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FindTitleController extends Controller{
    public function findTitleInIndex(Request $request){
        $artlist = Article::paginate(10);
        return view('list')->with('titleList',$artlist)
            ->with('list',FindArticleController::findHotList($request,'view'))
            ->with('newList',FindArticleController::findHotList($request,'create_time'));
    }
    public function findTitleByColumn($name){
        $column = FindColumnController::findColumnByName($name);
        $list = Article::where('category_id',$column->id)
            ->get();
        return view('list')->with('list',$list);
    }
    public function findTitleForIndex(){
        $xydt = FindColumnController::findColumnByName('xydt');
        $xydtList = Article::where('category_id',$xydt->id)
            ->limit(4)
            ->get();
        return view('index',['xydt'=>$xydtList]);
    }
}