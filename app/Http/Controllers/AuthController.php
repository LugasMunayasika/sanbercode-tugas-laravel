<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('form');
    }
    public function form(Request $request){
        $first = $request->fname;
        $last = $request->lname;

        return view('selamat',compact('first','last'));
    }
}
