<!-- votar.blade.php -->
@extends('layouts.app')

@section('content')	
<div class="container">
      <h2>Votação</h2><br/>
      <form method="post" action="{{action('CandidateController@view_votar')}}" >
        @csrf
			<div class="row">
         <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="voto">Votar:</label>
            <input type="text" class="form-control" placeholder="Número do candidato" name="voto">
            <button type="submit" class="btn btn-success">Confirmar</button>
          </div>
      </div>
    </form>
    @endsection

    