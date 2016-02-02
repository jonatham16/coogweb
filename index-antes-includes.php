<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Document</title>
		<!-- Local bootstrap CSS & JS -->
		<link rel="stylesheet" media="screen" href="css/bootstrap2.css">
		<link href="css/carousel.css" media="screen" rel="stylesheet">
		<link rel="stylesheet" href="css/ripple.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href="images/logo-ico-azul.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	</head>
	<body>
	<header>
		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper">
			<div class="container">
				<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<!--
							<a class="navbar-brand" href="#">Grupo Cooguasimales</a>
							-->
							<div class="logo-cooguasimales"><img src="images/logo-cooguasimales.png"></div>
							
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Inicio</a></li>
								<li><a href="#about">Nosotros</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empresas <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Pago Facil</a></li>
										<li><a href="#">Envientrega</a></li>
										<li><a href="#">Cobranzas</a></li>
										<li role="separator" class="divider"></li>
										<li class="dropdown-header">ONG</li>
										<li><a href="#">Creer Colombia</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contacto <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Ubicanos</a></li>
										<li><a href="#">PQR</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Trabaja <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Registrate</a></li>
										<li><a href="#">Iniciar Session</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Aplicaciones <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Correo</a></li>
										<li><a href="#">GLPI</a></li>
										<li><a href="#">NAS</a></li>
									</ul>
								</li>
								<li><a href="#about">Noticias</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<div class="container-fluid espacio_menu">
		</div>
	</header>
		<!-- Carousel
		================================================== -->
		<div class="container-fluid">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img class="first-slide img-responsive" src="http://lorempixel.com/1200/560/business/" alt="First slide">
						<div class="container">
							<div class="carousel-caption">
								<h1>Bienvenido! </h1>
								<p  class="carousel-texto-con_fondo">Cooguasimales es el grupo empresarial más importantes de la región, con ocho líneas de negocio prestadoras de servicios de recaudo, giros, contact center, mensajeria especializada, cobro de cartera, asesoria juridica, bienes raices e inmobiliaria y bonos multiusos. </p>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Compañía</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img class="second-slide img-responsive" src="images/multiusos.jpg" alt="Second slide">
						<div class="container">
							<div class="carousel-caption">
								<h1>Multiusos Pass S.A.S.</h1>
								<p class="carousel-texto-con_fondo">Brinda alternativas para beneficiar al comercio, los empleados, empresarios regionales y al sector oficial, ofreciéndoles una novedosa y segura forma de utilizar bien su dinero.</p>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Obtén más información aquí</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img class="third-slide img-responsive" src="images/cobranzas.jpg" alt="Third slide">
						<div class="container">
							<div class="carousel-caption">
								<h1>Cobranzas</h1>
								<p class="carousel-texto-con_fondo">La filosofía de gestión de cobro, la habilidad de negociación y conciliación de nuestros ejecutivos de cobranza, con procesos y estrategias claramente definidas, nos permiten alcanzar altos indicadores en la recuperación de la cartera vencida.</p>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Obtén más información aquí</a></p>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="container-fluid">
			<div class="container-fluid aliados">
				<h1>ALIADOS ESTRATÉGICOS</h1>
				<div class="row">
					<div class="col-sm-2 col-sm-offset-1"><a target="_blank" href="#"><img class="img-responsive" src="images/logo_claro2.png" alt="" width="130" height="62"></a></div>
					<div class="col-sm-2"><a target="_blank" href="#"><img class="img-responsive" src="images/logo_directv.png" alt="" width="130" height="62"></a></div>
					<div class="col-sm-2"><a target="_blank" href="#"><img class="img-responsive" src="images/logo_movistar.png" alt="" width="130" height="62"></a></div>
					<div class="col-sm-2"><a target="_blank" href="#"><img class="img-responsive" src="images/logo_tigo2.png" alt="" width="130" height="62"></a></div>
					<div class="col-sm-2"><a target="_blank" href="#"><img class="img-responsive" src="images/logo_cens.png" alt="" width="130" height="62"></a></div>
				</div>
			</div>
			
		</div>
		<div class="container-fluid">
			<footer id="footer" class="footer container-fluid">
				<div class="container-fluid">
					<div class="container-fluid footer_social text-center">
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-1  col-md-offset-3"><a class="fa fa-twitter fa-2x" href="" title="Cooguasimales en Twitter" target="blank"></a></div>
							<div class="col-xs-4 col-sm-4 col-md-1 "><a class="fa fa-facebook fa-2x" href="" title="Cooguasimales en Facebook" target="blank"></a></div>
							<div class="col-xs-4 col-sm-4 col-md-1 "><a class="fa fa-youtube fa-2x" href="" title="Cooguasimales en YouTube" target="blank"></a></div>
							<div class="clearfix visible-xs"></div>
							<div class="col-xs-4 col-sm-4 col-md-1 "><a class="fa fa-linkedin fa-2x" href="" title="Cooguasimales en Linkedin" target="blank"></a></div>
							<div class="col-xs-4 col-sm-4 col-md-1 "><a class="fa fa-google-plus fa-2x" href="" title="Cooguasimales en Google+" target="blank"></a></div>
							<div class="col-xs-4 col-sm-4 col-md-1 "><a class="fa fa-instagram fa-2x" href="" title="Cooguasimales en Instagram" target="blank"></a></div>
						</div>
					</div>
				</div>
				<div class="container-fluid footer_social footer-inf-adicional">
					<div class="container">
						<div class="row">
							<div class="col-sm-4 "><h2><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Acerca de nosotros</h2>
								<div class="container-fluid">
									<img class="img-responsive" src="images/LogoIcontec.png" width="69" height="69"></img>
									<img class="img-responsive" src="images/IQNetf.png" width="69" height="69"></img>
								</div>
							</div>
							<div class="col-sm-4 "><h2><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contactanos</h2>
								<div class="container-fluid">
									<p>+57 01-8000-185714<br>+57 (7) 572.77.77 <br>(7) 572.96.21<br>(1) 745.28.64</p>
								</div>
							</div>
							<div class="col-sm-4 "><h2><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Ubicanos</h2>
								<div class="container-fluid">
									<p><i>Bogotá: </i>Calle 79A Nª 18-23 Ofic. 201 Edif. Unilago<br><i>Cúcuta: </i>Calle 9 Nº 4-52 Local 223 a 226 C.C. River Plaza</p>
								</div>
							</div>
				
				
						</div>
					</div>
				</div>
				<div class="container">
        			<p class="text-muted text-center">© Copyright 2016, Grupo Cooguasimales. Todos los derechos resevados</p>
      			</div>
			</footer>

		</div>
<!-- /.carousel -->
<!-- Local bootstrap CSS & JS -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
/*$('.carousel').carousel({
interval: 16000
});
		*/
</script>
</body>
</html>