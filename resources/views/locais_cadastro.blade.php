<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <meta name="csrf-token" content="{{csrf_token()}}" >

  <title>Cadastro de Locais</title>

  </head>

<body>

<div class="container">
  <div class="row">
    <h1>BABOON PHOTOS </h1>
  </div>

  <div class="row">

  <div class="col-md-3">
    <h2>Cadastar novo espaço</h2>
  </div>

  <div class="col-md-9">
    <form action="/espacos_salvar" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
        <label for="nome_completo">Nome do Local:</label>
        <input type="text" class="form-control" name="nome_completo" required>
      </div>

      <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" name="endereco" required>
      </div>

          <div class="form-group">
            <label for="descricao">Descricao:</label>
            <input type="text" class="form-control" name="descricao"  required>
          </div>
      
        <div class="col-md-4">
          <div class="form-group">
            <label for="foto">Escolha uma foto do local:</label>
            <input type="file" class="form-control" name="foto" required>
          </div>
        </div>

      <div class="form-group" align="center">
      <br/>
          <input type="submit" value="Cadastar" />
      </div>


    </form>
  </div>
</div>
</body>

</html>
   <!-- <h1>Cadastar novo Espaço</h1>

    <form action="/espacos_salvar" method="post" enctype="multipart/form-data">
      @csrf
      <p>Apelido: <input type="text" name="apelido"></p>
      <p>Endereço: <input type="text" name="endereco"></p>
      <p>Descrição: <textarea  name="descricao"></textarea></p>
      <p>Foto: <input type="file" name="foto"></p>



    <input type="submit" value="Cadastar" />

    </form>
-->
  

