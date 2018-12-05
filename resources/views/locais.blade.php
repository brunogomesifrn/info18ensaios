<h1>Meus Espaços</h1>

<p><a href="/espacos_cadastro">Cadastar um novo espaço</a></p>

@foreach($espacos as $esp)
<p> {{$esp->apelido}}</p>
@endforeach
