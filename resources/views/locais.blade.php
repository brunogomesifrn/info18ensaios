<!DOCTYPE html>
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
							<form action="#" method="post">
								<input name="search" class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
						<!-- search-scripts -->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
					    <ul>
							
							<li>
							<a href="#" data-toggle="modal" data-target="#myModal4"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Select Your Location</a></li>
			
							<li><button id="showRight" class="navig">Login </button>
							 <div class="cbp-spmenu-push">
							<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
								<h3>Login</h3>
							<div class="login-inner">
								<div class="login-top">
								 <form action="#" method="post">
									<input type="text" name="email" class="email" placeholder="Email" required=""/>
									<input type="password" name="password" class="password" placeholder="Password" required=""/>	
									<input type="checkbox" id="brand" value="">
									<label for="brand"><span></span> Remember me</label>
								</form>
								<div class="login-bottom">
									<ul>
										<li>
											<a href="#">Forgot password?</a>
										</li>
										<li>
											<form action="#" method="post">
												<input type="submit" value="LOGIN"/>
											</form>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
													
							</div>
							<div class="social-icons">
							<ul> 
								<li><a href="#"><span class="icons"></span><span class="text">Facebook</span></a></li>
								<li class="twt"><a href="#"><span class="icons"></span><span class="text">Twitter</span></a></li>
								<li class="ggp"><a href="#"><span class="icons"></span><span class="text">Google+</span></a></li>
							</ul> 
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
		    <!--banner-info-->
			<div class="banner-info">
			  <h1><a href="index.html">MEUS <span class="logo-sub">LOCAIS</span> </a></h1>
			    <h2><span>CADASTRADOS </span> <span>! </span></h2>
			     
			</div>
		<!--//banner-info-->	
		</div>
	 </div>

		<!--//banner-section-->
				<!--/breadcrumb-->
		    <div class="service-breadcrumb">
				<div class="container">

					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		    <div class="tips w3l">
				<div class="container">
				 <div class="col-md-9 tips-info">

				 	@foreach($espacos as $a)

					 <div class="news-grid">
					    <div class="news-img up">
						  <a href="single.html"> <img src="/storage/{{$a->foto}}" alt=" " class="img-responsive"></a>
						</div>
					    <div class="news-text coming">
					    	<h3><a href="single.html">{{Auth::user()->name}}</a></h3>
						    <h3><a href="single.html">{{$a->apelido}}</a></h3>
							<h5>{{$a->descricao}}</h5>
							<p class="news">{{$a->endereco}}</p>
							<h6>Dias disponiveis para reserva: Segunda à Sexta</a></h6>
							<!--<ul class="p-t">
							  <li><a href="single.html">Mais Photos</a></li>
							  <li><a href="single.html">Fazer Modificações</a></li>
							</ul>-->
					
						</div>
		
						<div class="clearfix"></div>
					 </div>	

					 @endforeach

				

					 
				</div>	
			    <div class="col-md-3 advice-right w3-agile">
					<div class="blo-top1">
					<div class="agileits_twitter_posts">
					<h4>Numero de visitas aos locais cadastrados:</h4>
	
					<ul>
						<li> 01/09/2018<span>15 visitas.</span></li>
						<li> 02/09/2018<span>8 visitas.</span></li>
						<li> 03/09/2018<span>12 visitas.</span></li>
					</ul>
					</div>
				</div>

					</div>
					<div class="clearfix"> </div>
			</div>
		</div>
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

<!--
@foreach($espacos as $esp)
<p> {{$esp->apelido}}</p>
@endforeach
-->