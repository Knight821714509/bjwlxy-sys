<?php

namespace App\Http\Controllers\Column;

use App\Column;
use App\Http\Controllers\Controller;

class FindColumnController extends Controller{
    function findColumn(){
        $column = Column::get();
        return $column;
    }
}