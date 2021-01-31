@extends('adminlte.master')
@section('title','Show Pertanyaan')
@section('content')

<h2>Show Pertanyaan</h2><br>
<h4> {{$pertanyaan->judul}} </h4>
<p> {{$pertanyaan->isi}} </p>
<a href="/pertanyaan" class="btn btn-danger">back</a>

@endsection