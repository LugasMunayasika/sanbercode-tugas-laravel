<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function create(){
        return view('pertanyaan.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:post',
            'isi' => 'required',
        ]);
        $query = DB::table('questions')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);
        return redirect('/pertanyaan');
    }
    public function index(){
        return view('pertanyaan.index');
    }
}


