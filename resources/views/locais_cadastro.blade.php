<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="csrf-token" content="{{csrf_token()}}" >
  </head>
  <body>


    <h1>Cadastar novo Espaço</h1>

    <form action="/espacos_salvar" method="post" enctype="multipart/form-data">
      @csrf
      <p>Apelido: <input type="text" name="apelido"></p>
      <p>Endereço: <input type="text" name="endereco"></p>
      <p>Descrição: <textarea  name="descricao"></textarea></p>
      <p>Foto: <input type="file" name="foto"></p>



    <input type="submit" value="Cadastar" />

    </form>

  </body>
</html>
