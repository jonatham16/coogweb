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
		<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

// Para localhost---------------------
			  //ga('create', 'UA-73213302-1', 'none');
			  ga('create', 'UA-73213302-1', {'cookieDomain': 'none'}); 
			  ga('send', 'pageview');
//------------------------------------

		</script>
	</head>
	<body>
<?php
include("header.php");
?>
	
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
		
			<section class="container-fluid servicios text-center">
				<h1 class="titulo-seccion">NUESTROS SERVICIOS</h1>
				<p class="text-muted subtitulo-seccion"><i>Ofrecemos un portafolio amplio de servicios</i></p>
				<div class="row">
					<article class="col-sm-6 col-md-3">
						<a target="_blank" href="#"><img class="img-responsive" src="images/cobranzas.png" alt="" width="100" height="62"></a>
						<h3>Cobranzas</h3>
						<p class="text-muted">Brindamos mensajería expresa, con excelencia y calidad, avalada por organizaciones de larga trayectoria en el panorama nacional, departamental y local. </p>
					</article>
					<article class="col-sm-6 col-md-3">
						<a target="_blank" href="#"><img class="img-responsive" src="images/envios.png" alt="" width="100" height="100"></a>
						<h3>Envios</h3>
						<p class="text-muted">Brindamos mensajería expresa, con excelencia y calidad, avalada por organizaciones de larga trayectoria en el panorama nacional, departamental y local. </p>
					</article>
					<article class="col-sm-6 col-md-3">
						<a target="_blank" href="#"><img class="img-responsive" src="images/pago-facturas.png" alt="" width="100" height="100"></a>
						<h3>Recaudos</h3>
						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis illo, ipsam ea ipsa repellendus maiores, cupiditate sunt tenetur? Eos voluptatum assumenda recusandae laborum porro unde ut libero suscipit et excepturi.</p>
					</article>
					<article class="col-sm-6 col-md-3">
						<a target="_blank" href="#"><img class="img-responsive" src="images/pagos2.png" alt="" width="100" height="100"></a>
						<h3>Multiusos Pass</h3>
						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis illo, ipsam ea ipsa repellendus maiores, cupiditate sunt tenetur? Eos voluptatum assumenda recusandae laborum porro unde ut libero suscipit et excepturi.</p>
					</article>
					
				</div>
			</section>
			
		
		<div class="container-fluid">
			<div class="container-fluid aliados">
				<h1 class="titulo-seccion">ALIADOS ESTRATÉGICOS</h1>
				<div class="row">
					<div class="col-sm-2 col-sm-offset-1"><a target="_blank" href="#"><img class="img-responsive" src="images/logo_claro2.png" alt="" width="130" height="62"></a></div>
					<div class="col-sm-2"><a target="_blank" href="#"><img class="img-responsive" src="images/logo_directv.png" alt="" width="130" height="62"></a></div>
					<div class="col-sm-2"><a target="_blank" href="#"><img class="img-responsive" src="images/logo_movistar.png" alt="" width="130" height="62"></a></div>
					<div class="col-sm-2"><a target="_blank" href="#"><img class="img-responsive" src="images/logo_tigo2.png" alt="" width="130" height="62"></a></div>
					<div class="col-sm-2"><a target="_blank" href="#"><img class="img-responsive" src="images/logo_cens.png" alt="" width="130" height="62"></a></div>
				</div>
			</div>
			
<?php
include("footer.php");
?>
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