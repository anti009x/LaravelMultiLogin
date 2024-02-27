<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login(){
        return view('login');
    }

    public function postlogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            // 'email.required'=>'email dont null',
            // 'password.required'=>'password dont null',
        ]);
    }
    
}
