<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\User;

class InsertUsersController extends Controller{
    public function InsertUser(){
        $user = new User();
        $user->user = '1234';
        $user->pwd = '1111';
        $user->name = 'airso';
        $user->save();
    }
}