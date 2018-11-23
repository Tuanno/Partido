<!-- index.blade.php -->
@extends('layouts.app')

@section('content')
    
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
        <th>foto</th>
        <th>partido</th>
        <th>votos</th>
        <th>Numero</th>
        <th>Endereco</th>
        <th colspan="2">Editar</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($candidates as $candidate)
    
      <tr>
        <td>{{$candidate['id']}}</td>
        <td>{{$candidate['nomecompleto']}}</td>
        <td>{{$candidate['nomeexibicao']}}</td>
        <td><img src="/images/{{$candidate['foto']}}" style="width:70px; height:70px;"></td>
        <td>{{$candidate['partido_id']}}</td>
        <td>{{$candidate['voto']}}</td>
        <td>{{$candidate['numero']}}</td>
        <td>{{$candidate['endereco']}}</td>
        
        <td><a href="{{action('CandidateController@edit', $candidate['id'])}}" class="btn btn-warning">Edit</a>

      </td>
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
  @endsection