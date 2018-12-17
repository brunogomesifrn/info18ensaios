<!-- Subir o layout padrão -->

<html>
<head>
<title>Locais cadastrados</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
			<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>

<h1>Página Do Usuário</h1>

<h3>Olá {{Auth::user()->name}}</h3>

<p><a href="/espacos">Meus Locais<a/></p>
<p>Minhas Reservas</p>
<p>Meus dados pessoais</p>


<p><a href="/desconectar">Logout</a></p>

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>Sobre nós</h3>
					<p>Desenvolvedores: Anderson Freitas, Luiz Matheus e Wanderleia Klécia. <span>Para qualquer dúvida, entre em contato conosco.</span></p>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Contatos</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>IFRN-Campus Canguaretama,BR-101, Km 160. S/N. - Areia Branca, 59190-000. <span></span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">baboonphotos@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+55 84 991486554</li>
					</ul>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		
			<div class="copy-right animated wow slideInUp" >
				<p>&copy 2016 Catchy Carz. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p></p>
			</div>
		</div>
	</div>

<script src="js/jquery-1.11.1.min.js"></script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>
