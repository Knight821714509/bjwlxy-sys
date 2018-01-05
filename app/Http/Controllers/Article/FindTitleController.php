<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;

class FindTitleController extends Controller{
    public function findTitleInIndex(){
        return view('index')->with('titleList','');
    }
}