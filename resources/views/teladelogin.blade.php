
@extends('baselogin.base')	
	<!-- Header area -->
@section('conteudo')
	<section id="login" class="section green">
		<div class="container">

			<!-- Four columns -->
			 <div id="countdown" ></div>
		  <div class="subcription-info text-center">
		  <h4>Faça seu login</h4>
          <form class="subscribe_form" action="telalogin.php" method="post">
            <input required="" value="" placeholder="Digite seu email" class="email" id="email" name="email" type="email"> <br/>
            <input required="" value="" placeholder="Digite sua senha" class="email" id="email" name="senha" type="password"> <br/>
            <input type="submit"  value="Entrar">
          </form>
          <a href="https://bootstrapmade.com/">Esqueceu sua senha?</a>
        </div>
      </div>
    </div>
		</div>
	</section>
	<!-- end section: services -->

@endsection