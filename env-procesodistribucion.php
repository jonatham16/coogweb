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
				<h2 class="titulo-contenido-central">PROCESO DE DISTRIBUCION</h2>
				<p class="text-justify">Para el manejo de sus envíos a nivel urbano y regional contamos con una infraestructura que nos permite una cobertura para manejar altos volúmenes de correo, por esto manejamos con absoluta eficiencia, responsabilidad y cumplimiento la entrega de correspondencia, Tenemos dividida el área metropolitana de Cúcuta en 31 zonas, y los mensajeros necesarios para cubrirlas y supervisores para coordinar el proceso. En las oficinas regionales contamos con un supervisor y los mensajeros necesarios en cada una de ellas para la realización del proceso de distribución. 
				<br>
				<br>
				</p>
				<p class="text-justify">
					Nuestra red de comunicación permite estar en inmediato contacto con todo el personal operativo, ofreciendo a nuestros clientes solución rápida a sus inconvenientes. 
					El departamento de telemercadeo actualiza su base de datos en el momento que esto sea necesario, suministrando un listado de actualizaciones y devoluciones, para que haya una retroalimentación continua de la base de datos. La base de datos de los usuarios debe ser suministrada por LOS CLIENTES desde el momento en el que sea enviada la correspondencia.
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