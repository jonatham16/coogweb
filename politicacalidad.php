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
	
<?php
include("header.php");
?>		
	<section class="container-fluid">
		<div class="container contenido-central">
			<div class="row">
			<div class="col-md-3">
<?php
include("submenu-sobrenosotros.php");
?>				

			</div>
			<div class=" col-md-6">
				<h2 class="titulo-contenido-central">POLITICAS DE CALIDAD</h2>
				<p class="text-justify">LA COOPERATIVA MULTIACTIVA GUASIMALES tiene como política satisfacer las necesidades de las empresas clientes y usuarios de los servicios públicos y privados, entregando la mejor calidad EN CADA UNA DE SUS ACTIVIDADES.
				</p>
				<p class="text-justify">
				COOGUASIMALES está comprometida en el desarrollo del Talento Humano, para ello se ha fijado objetivos que cumple mediante el trabajo en equipo, la mejora continua y la contribución a la generación de empleo.
				</p>
				<p class="text-justify">
				Ser líderes EN CADA SERVICIO PRESTADO A LA COMUNIDAD, logrando excelencia empresarial e innovando en la prestación del servicio con la aplicación de las mejores prácticas. En su carácter de Cooperativa auténticamente colombiana propender por el bienestar social de nuestros asociados y trabajadores, cumpliendo con las normas legales y logrando una mejora permanente en la prestación del servicio.
				</p>
				<p class="text-justify">
				<br>
				MARIELA AREVALO ALVAREZ
				<br>
				Gerente General
				</p>
				<div class="container-fluid text-center">
					<img class="img-responsive" src="images/calidad.png" alt="">
				</div>
				<h2 class="titulo-contenido-central">CERTIFICACIÓN ISO 9001</h2>
				<p class="text-justify">El grupo empresarial Cooguasiamles cuenta con la certificación ISO 9001:2008 para actividades de recaudo de servicios públicos y privados.
				</p>
				<div class="container-fluid text-center">
					<img class="img-responsive" src="images/LogoIcontec.png" alt="" width="150" height="150">
					<img class="img-responsive" src="images/IQNetf.png" alt="" width="150" height="150">
				</div>
			</div>
		</div>
		</div>
	</section>

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