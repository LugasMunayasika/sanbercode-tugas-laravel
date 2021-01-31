<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function create(){
        return view('pertanyaan.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:questions',
            'isi' => 'required',
        ]);
        $query = DB::table('questions')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);
        return redirect('/pertanyaan');
    }
    public function index(){
        $pertanyaan = DB::table('questions')->get();
        return view('pertanyaan.index', compact('pertanyaan'));
    }
    public function show($id)
    {
        $pertanyaan = DB::table('questions')->where('id', $id)->first();
        return view('pertanyaan.show', compact('pertanyaan'));
    }
    public function edit($id)
    {
        $pertanyaan = DB::table('questions')->where('id', $id)->first();
        return view('pertanyaan.edit', compact('pertanyaan'));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:questions',
            'isi' => 'required',
        ]);

        $query = DB::table('questions')
            ->where('id', $id)
            ->update([
                'judul' => $request["judul"],
                'isi' => $request["isi"]
            ]);
        return redirect('/pertanyaan');
    }
    public function destroy($id)
    {
        $query = DB::table('questions')->where('id', $id)->delete();
        return redirect('/pertanyaan');
    }


}


