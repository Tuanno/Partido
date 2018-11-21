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
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Ano</th>
        <th>Nome</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($elections as $election)
      
      <tr>
        <td>{{$passport['id']}}</td>
        <td>{{$passport['ano']}}</td>
        <td>{{$passport['nome']}}</td>
        
        <td><a href="{{action('ElectionController@edit', $election['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ElectionController@destroy', $election['id'])}}" method="post">
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
  </body>
</html>
@endsection