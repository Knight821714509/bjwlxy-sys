<?php
/**
 * Created by PhpStorm.
 * User: artorias
 * Date: 2018/3/14
 * Time: 10:56
 */
namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Controllers\Controller;

class DeleteArticleController extends Controller{
    public function deleteArticleById($id){
        Article::where('id',$id)
            ->delete();
        echo '<script>alert("删除成功");history.go(-1);</script>';
    }
}