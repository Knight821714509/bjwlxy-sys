<?php
/**
 * Created by PhpStorm.
 * User: artorias
 * Date: 2018/3/15
 * Time: 18:35
 */
namespace App\Http\Controllers\Article;

use App\Http\Controllers\Column\FindColumnController;
use App\Http\Controllers\Controller;

class UpdateArticleController extends Controller{
    public function fillUpdateArticleForm($id){
        $article = FindArticleController::findArticleById($id);
        $col = FindColumnController::findAllColumn();
        return view('admin.update-article',['article' => $article,'col' => $col]);
    }
}