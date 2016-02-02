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
			  ga('create', 'UA-73213302-1', 'none');
			  ga('send', 'pageview');
//------------------------------------
		</script>
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
include("submenu-envios.php");
?>				

			</div>
			<div class="col-md-6">
				<h2 class="titulo-contenido-central">MENSAJERÍA EXPRESA</h2>
				<p class="text-justify">Envientrega de Cooguasimales es una empresa de mensajería expresa, legalmente constituida con licencia de funcionamiento otorgada por el ministerio de comunicaciones según resolución 002548 de Diciembre 14 de 2010 La excelencia y calidad en la prestación de nuestro servicio, está avalada por organizaciones de larga trayectoria en el panorama nacional, departamental y local. Sabemos la importancia que representa para el Cliente el buen manejo de sus documentos y consolidados, el cual estamos seguros de satisfacer plena y oportunamente a nivel urbano. Bienvenidos a Envientrega de Cooguasimales, un mundo de servicios pensando en usted.
				<br>
				<br>
				</p>
				<p class="text-justify">
				 Nuestra oficina principal se encuentra ubicada en:
				<br>
				Calle 21 Nº 0-31 Barrio Blanco 
				<br>
				Teléfonos: 5 72 55 13 – Cel. 310 870 3481 – 310 316 1326
				<br>
				correo electrónico envientrega@cooguasimales.com
				</p>		
			
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