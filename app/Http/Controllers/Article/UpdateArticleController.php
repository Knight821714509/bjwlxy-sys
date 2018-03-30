<?php
/**
 * Created by PhpStorm.
 * User: artorias
 * Date: 2018/3/15
 * Time: 18:35
 */
namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Controllers\Column\FindColumnController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateArticleController extends Controller{
    public function fillUpdateArticleForm($id){
        $article = FindArticleController::findArticleById($id);
        $col = FindColumnController::findAllColumn();
        return view('admin.update-article',['article' => $article,'col' => $col]);
    }
    public function updateContent(Request $request){
        $id = $request->input('id');
        $title = $request->input('title');
        $description = $request->input('description');
        $keywords = $request->input('keywords');
        $category = $request->input('category');
        $category_id = FindColumnController::findColumnByName($category)->id;
        $content = $request->input('content');
        Article::where('id',$id)
            ->update(['title' => $title,'description' => $description,'keywords' => $keywords,'category_id' => $category_id,'content' => $content]);
        return redirect()->route('sel-art');
    }
}