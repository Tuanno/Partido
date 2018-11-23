<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Laravel 5.6 CRUD </title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <h2><center>Editar Candidato</center></h2><br  />
    <form method="post" action="{{action('CandidateController@update', $id)}}" enctype="multipart/form-data">
      @csrf
      <input name="_method" type="hidden" value="PATCH">

      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="nomecompleto">NomeCompleto:</label>
          <input type="text" class="form-control" name="nomecompleto" value="{{$candidate->nomecompleto}}">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="nomeexibicao">NomeDeExibicao:</label>
          <input type="text" class="form-control" name="nomeexibicao" value="{{$candidate->nomeexibicao}}">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <input type="file" name="foto" value="{{$candidate->foto}}">    
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="partido_id">Partido:</label>
        <input type="text" class="form-control" name="partido_id" value="{{$candidate->partido_id}}">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="numero">Numero:</label>
        <input type="text" class="form-control" name="numero" value="{{$candidate->numero}}">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="endereco">Endereco:</label>
        <input type="text" class="form-control" name="endereco" value="{{$candidate->endereco}}">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4" style="margin-top:60px">
        <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>
