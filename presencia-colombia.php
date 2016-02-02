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
			<div class="col-md-6">
				<h2 class="titulo-contenido-central">PRESENCIA EN COLOMBIA</h2>
				<p class="text-justify">
					En la actualidad contamos con 19 centros de Atención a aliados o socios estratégicos, ubicados estratégicamente en:
				</p>		
				<ul>
					<li><i class="fa fa-check vineta-check"></i>Bucaramanga</li>
					<li><i class="fa fa-check vineta-check"></i>Cúcuta</li>
					<li><i class="fa fa-check vineta-check"></i>Ocaña</li>
					<li><i class="fa fa-check vineta-check"></i>Pamplona</li>
					<li><i class="fa fa-check vineta-check"></i>Los Patios</li>
					<li><i class="fa fa-check vineta-check"></i>El Zulia</li>
					<li><i class="fa fa-check vineta-check"></i>Bogotá</li>
				</ul>
				<div class="container-fluid text-center">
					<img class="img-responsive" src="images/colombia2.png" alt="">
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