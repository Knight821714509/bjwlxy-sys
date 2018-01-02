<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Users;

class FindUserController extends Controller{
    public function findUser(){
        $user = Users::all();
        dd($user);
    }
}