<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuestionsController extends Controller
{
    public function create(){
        return view('questions.create');
    }

    public function store(Request $request ){
        dd($request->all());
    }
}
       