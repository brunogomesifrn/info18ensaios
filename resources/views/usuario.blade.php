
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

<!--/banner-section-->
		<div id="demo-1" class="banner-inner">
	 <div class="banner-inner-dott">
       <div class="header-top">
		    <!-- /header-left -->
		          <div class="header-left">
				  
					  <div class="tag"><a href="/espacos_cadastro"><span class="glyphicon glyphicon-tag"></span> Cadastrar novos locais </a></div>
					  <div class="tag"><a href="/desconectar"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></div>
					</div>
				  <!-- //header-left -->
		             <div class="search-box">
						<div id="sb-search" class="sb-search">
							
						</div>
						
					    <ul>
	
			
						
							 <div class="cbp-spmenu-push">
							<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
								<h3>Login</h3>
							<div class="login-inner">
								<div class="login-top">
								<div class="login-bottom">
									<ul>
										
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
													
							</div>
				
							 
					
							</div> 
							</nav>
						</div> 
					<script src="js/classie2.js"></script>
						<script>
							var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
								showRight = document.getElementById( 'showRight' ),
								body = document.body;
				
							showRight.onclick = function() {
								classie.toggle( this, 'active' );
								classie.toggle( menuRight, 'cbp-spmenu-open' );
								disableOther( 'showRight' );
							};
				
							function disableOther( button ) {
								if( button !== 'showRight' ) {
									classie.toggle( showRight, 'disabled' );
								}
							}
						</script>
						<!--Navigation from Right To Left-->
						    </li>
						</ul>
						
					</div>
				   
						
					</div>
					<div class="clearfix"></div>
	<div class="banner-info">
			  <h1><a href="index.html">Página <span class="logo-sub"> do Usuário</span> </a></h1>
			    <h2><span>Olá {{Auth::user()->name}} </span> <span>! </span></h2>
			     <h3><a href="/espacos">Meus Locais<a/></h3>
				 <h3>Minhas Reservas</h3>
				 <!--<h3>Meus dados pessoais</h3> -->
			</div>

			</div>
	 </div>







<!-- <p><a href="/desconectar">Logout</a></p> -->

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>Sobre nós</h3>
					<p>Desenvolvedores: Alisson Rodrigues, Anderson Freitas, Luiz Matheus e Wanderleia Klécia. <span>Para qualquer dúvida, entre em contato conosco.</span></p>
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
