<!-- create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
      <h2><center>Cadastro da Eleição</center></h2><br/>
      <form method="post" action="{{url('elections')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="ano">Ano:</label>
            <input type="text" class="form-control" name="ano">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" name="nome">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Confirmar</button>
          </div>
        </div>
      </form>
    </div>
     @endsection