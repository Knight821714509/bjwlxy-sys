<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Controllers\Column\FindColumnController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FindTitleController extends Controller{
    public function findTitleByColumn(Request $request,$name){
        $column = FindColumnController::findColumnByName($name);
        $list = Article::where('category_id',$column->id)
            ->orderBy('create_time','desc')
            ->paginate(10);
        $nav = FindColumnController::findAllColumnByPid(0);
        return view('list')->with('titleList',$list)
            ->with('nav',$nav)
            ->with('list',FindArticleController::findHotList($request,'view'))
            ->with('newList',FindArticleController::findHotList($request,'create_time'));
    }

    /**返回首页并传递首页文章列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View 返回首页
     */
    public function findTitleForIndex(){
        $xydt = FindColumnController::findColumnByName('xydt');
        $xydtList = Article::where('category_id',$xydt->id)
            ->orderBy('create_time','desc')
            ->limit(4)
            ->get();
        $zzjg = FindColumnController::findColumnByName('zzjg');
        $zzjgList = Article::where('category_id',$zzjg->id)
            ->orderBy('create_time','desc')
            ->limit(4)
            ->get();
        $nav = FindColumnController::findAllColumnByPid(0);
        return view('index',['xydt' => $xydtList,'zzjg' => $zzjgList,'nav' => $nav]);
    }

    public function newList(){
        $article =  Article::orderBy('create_time','desc')
        ->paginate(10);
        return view('admin.select-article',['newList' => $article]);
    }
}