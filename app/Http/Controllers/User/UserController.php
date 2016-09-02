<?php

namespace blackoutsLibManager\Http\Controllers\User;

use Illuminate\Foundation\Auth\User;
use blackoutsLibManager\Http\Controllers\Controller;

class UserController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function lista(){
        $users = User::all();
        return view('users.lista')->with('users',$users);
    }
}
