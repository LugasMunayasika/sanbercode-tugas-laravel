@extends('adminlte.master')
@section('title','List Pertanyaan')
@section('content')

<h2>List Pertanyaan</h2>
<a href="/pertanyaan/create" class="btn btn-primary mb-3">Tambah</a>
<table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($pertanyaan as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->judul}}</td>
                        <td>{{$value->isi}}</td>
                        <td>
                        <form action="/pertanyaan/{{$value->id}}" method="POST">
                            <a href="/pertanyaan/{{$value->id}}" class="btn btn-info">Show</a>
                            <a href="/pertanyaan/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>


@endsection