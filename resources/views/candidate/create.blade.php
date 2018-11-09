<!-- create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Cadastro do Candidato</h2><br/>
      <form method="post" action="{{url('candidates')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="nomecompleto">NomeCompleto:</label>
            <input type="text" class="form-control" name="nomecompleto">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="nomeexibicao">NomeDeExibicao:</label>
              <input type="text" class="form-control" name="nomeexibicao">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="file" name="foto">    
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="partido_id">Partido:</label>
              <input type="text" class="form-control" name="partido_id">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="numero">Numero:</label>
              <input type="text" class="form-control" name="numero">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="endereco">Endereco:</label>
              <input type="text" class="form-control" name="endereco">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Enviar</button>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  @endsection