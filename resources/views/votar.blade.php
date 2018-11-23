<!-- votar.blade.php -->
@extends('layouts.app')

@section('content')	
<div class="container">
      <h2><center>Votação</center></h2><br/>
      <form method="get" action="{{action('CandidateController@votar')}}">
        @csrf
			<div class="row">
         <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="numero_candidato">Número Do candidato:</label>
            <input type="text" class="form-control" placeholder="Número do candidato" name="numero_candidato"></br>
            <button type="submit" class="btn btn-success">Confirmar</button>
          </div>
      </div>
    </form>
    @endsection

    