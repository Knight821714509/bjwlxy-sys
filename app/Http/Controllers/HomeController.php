<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = User::find(Auth::id());
        $ip = $user->last_ip;
        $time = $user->last_time;
        $user->last_ip = $request->getClientIp();
        $user->save();
        return view('home',['ip' => $ip,'time' => $time]);
    }

    public function updateIP(){
    }
}
