<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
  	<div class="container">
      <h2><center>Editar Eleição</center></h2><br  />
        <form method="post" action="{{action('ElectionController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
  	 <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="ano">Ano:</label>
              <input type="text" class="form-control" name="ano" value="{{$election->ano}}">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" name="nome" value="{{$election->nome}}">
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