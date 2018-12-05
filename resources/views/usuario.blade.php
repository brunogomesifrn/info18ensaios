<!-- Subir o layout padrão -->

<h1>Página Do Usuário</h1>

<h3>Olá {{Auth::user()->name}}</h3>

<p><a href="/espacos">Meus Locais<a/></p>
<p>Minhas Reservas</p>
<p>Meus dados pessoais</p>


<p><a href="/desconectar">Logout</a></p>
