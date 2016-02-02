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
				<h2 class="titulo-contenido-central">VALORES</h2>
				<ol class="list extra2 list-pad "><br>
		              <li>HONESTIDAD</li>
		              <li>SENTIDO DE PERTENENCIA</li>
		              <li>AMOR</li>
		              <li>RESPONSABILIDAD</li>
		              <li>ACTITUD DE SERVICIO</li>
		              <li>LEALTAD</li>
		              <li>SABIDURÍA</li>
		              <li>INTEGRIDAD</li>
		              <li>TRABAJO EN EQUIPO</li>
		              <li>DISCIPLINA</li>
          		</ol>
				<div class="container-fluid text-center">
					<img class="img-responsive" src="images/valores.png" alt="">
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