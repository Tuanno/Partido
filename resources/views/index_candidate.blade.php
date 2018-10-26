<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <a class="btn btn-primary" href="{{action('CandidateController@create')}}">Cadastrar candidato</a>
    <br />
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
        <th>NomeExibicao</th>
        <th>partido</th>
        <th>Numero</th>
        <th>Endereco</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($candidates as $candidate)
    
      <tr>
        <td>{{$broken['id']}}</td>
        <td>{{$broken['nome']}}</td>
        <td>{{$broken['nomeex']}}</td>
        <td>{{$broken['partido']}}</td>
        <td>{{$broken['numero']}}</td>
        <td>{{$broken['endereco']}}</td>
        
        <td><a href="{{action('CandidateController@edit', $candidate['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CandidateController@destroy', $candidate['id'])}}" method="post">
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