<?php

namespace App\Http\Controllers\Column;

use App\Column;
use App\Http\Controllers\Controller;

class FindColumnController extends Controller{

    public static function findAllColumn($layout){
        $column = Column::where('pid' ,$layout)
        ->get();
        return $column;
    }

    public static function findColumnByName($name){
        $column = Column::where('url' ,$name)
            ->first();
        return $column;
    }
}