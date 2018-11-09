<!-- index.blade.php -->
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
  
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Sigla</th>
        <th>Numero</th>
        <th>Endereco</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($brokens as $broken)
    
      <tr>
        <td>{{$broken['id']}}</td>
        <td>{{$broken['nome']}}</td>
        <td>{{$broken['sigla']}}</td>
        <td>{{$broken['numero']}}</td>
        <td>{{$broken['endereco']}}</td>
        
        <td><a href="{{action('BrokenController@edit', $broken['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('BrokenController@destroy', $broken['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection