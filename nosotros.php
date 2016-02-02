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
include("submenu-sobrenosotros.php");
?>				

			</div>
			<div class="col-md-6">
				<h2 class="titulo-contenido-central">SOBRE NOSOTROS</h2>
				<p class="text-justify">Somos una entidad sin ánimo de lucro vigilada por la Superintendencia de Economía
					Solidaria, constituida en Colombia el 17 de Octubre de 1995 bajo la Resolución No.500-003 de DANCOOP e identificada con Nit.807.000.949-1, con domicilio principal en la ciudad de San José de Cúcuta - Departamento Norte de Santander. Contamos con dos Direcciones de Zona en las ciudades de Bogotá D. C. y Bucaramanga (Santander).
				</p>
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
				<br>
				<p class="text-justify">
					Nuestra naturaleza Multiactiva nos permite desarrollar una variedad destacada de proyectos empresariales con diversas líneas de negocio, de conformidad con la normatividad vigente.
					Inspiramos nuestros proyectos a la satisfacción de nuestros aliados o socios estratégicos y sus clientes, empeñados en construir y fortalecer relaciones de largo plazo con los mismos.
					Nuestra operación se soporta en un equipo humano profesional y altamente especializado, enfocado al logro de las metas propuestas y la excelencia en el servicio a clientes y usuarios, lo cual constituye nuestra razón de ser.
					</p>
				<p class="text-justify">
					El conocimiento interdisciplinario de nuestros líderes, nos compromete a la generación de valor para nuestros aliados o socios estratégicos y colaboradores, garantizando equilibrio en el flujo de caja y el logro de sus objetivos empresariales y personales.

					COOGUASIMALES fue inscrita en la Cámara de Comercio el 29 de Marzo de 1996 bajo
					radicación 00000005, del Libro de Personas Jurídicas sin ánimo de lucro. PAGO FACIL es una de sus marcas.
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