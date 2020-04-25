<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function list(){
        return view('userlist');
    }

    public function create(){
        return view('create');
    }

    public function login_submit(Request $req){
        return User::select('*')->where(
            [
                ['email', '=', $req->email],
                ['password', '=', $req->password]
            ]
            
        )->get();
        // print_r($req->input());
    }
    
}
