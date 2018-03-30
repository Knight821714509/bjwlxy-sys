<?php

namespace App\Http\Controllers\Column;

use App\Column;
use App\Http\Controllers\Controller;

class FindColumnController extends Controller{

    public static function findAllColumnByPid($pid){
        $column = Column::where('pid' ,$pid)
        ->get();
        return $column;
    }

    public function initInsertCol(){
        $col = self::findAllColumnByPid(0);
        return view('admin.insert-column',['col' => $col]);
    }

    public static function findAllColumn(){
        $column = Column::get();
        return $column;
    }

    public static function findColumnByName($name){
        $column = Column::where('url' ,$name)
            ->first();
        return $column;
    }
}