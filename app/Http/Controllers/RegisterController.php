<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function home(){
        return view("home");
    }

    public function sapa_post(Request $request){
        $namadepan = $request->fname;
        $namablkng = $request->lname;
        return view('sapa_post',compact('fname','lname'));
    }
}
