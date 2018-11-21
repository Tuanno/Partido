<!-- create.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <div class="container">
      </head>
  <body>
      <h2>Cadastro da Eleição</h2><br/>
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
      </div>
      <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </html>
  </body>