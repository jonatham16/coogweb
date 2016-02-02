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
				<h2 class="titulo-contenido-central">TARIFAS VALOR A COBRAR</h2>
				<p class="text-justify">Será la tarifa mínima para autorizada por el <a target="_blank" href="http://www.mintic.gov.co/">Ministerio de Tecnologias de la Información y las Comunicaciones</a>, a través de la <a target="_blank" href="files/Ley1369de2009.pdf">Ley 1369 de 2009 (Régimen de los Servicios Postales)</a> .
				<br>
				<br>
				</p>		
				<div class="container-fluid text-center">
					<img class="img-responsive" src="images/tarifas2.jpg" alt="">
				</div>
				<div class="container-fluid text-center">
					<img class="img-responsive" src="images/tarifas1.jpg" alt="">
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