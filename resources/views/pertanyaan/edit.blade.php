@extends('adminlte.master')
@section('title','Edit pertanyaan')
@section('content')
<h1>Edit Pertanyaan</h1> <br>
        <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="judul" id="title" value='{{$pertanyaan->judul}}' placeholder="Masukkan Title">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Isi</label>
                <textarea name="isi" id="body" class="form-control" cols="30" rows="10">{{$pertanyaan->isi}}</textarea>
                @error('body')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

@endsection