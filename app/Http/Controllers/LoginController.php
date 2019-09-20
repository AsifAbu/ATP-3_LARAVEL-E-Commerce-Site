<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
    	return view('login');
    }

    public function logcheck(Request $req){
    	if($req->lemail == $req->lpassword){
    		return redirect()->route('index');
    	}else{
    		return redirect('/login');
    	}
    }
}
