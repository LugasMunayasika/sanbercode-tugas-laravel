@extends('adminlte.master')
@section('title','Tambah pertanyaan')
@section('content')
<h2>Tambah Data</h2>
        <form action="/pertanyaan" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="judul" id="title" placeholder="Masukkan Title">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Isi</label>
                <textarea name="isi" id="body" class="form-control" cols="30" rows="10"></textarea>
                @error('body')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>

@endsection