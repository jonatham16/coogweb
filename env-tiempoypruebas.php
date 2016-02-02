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
				<h2 class="titulo-contenido-central">TIEMPO DE ENTREGA</h2>
				<p class="text-justify">El servicio se ofrece para la totalidad de los municipios del Norte de Santander. De acuerdo las localidades de cubrimiento, los envíos urbanos Masivos, serán entregados por los mensajeros en un plazo de 5 días en el Área Metropolitana de Cúcuta, y para el resto del Departamento 5 días después de la recepción del físico en estas poblaciones. 
				<br>
				<br>
				</p>
				<h2 class="titulo-contenido-central">PRUEBAS DE ENTREGA</h2>
				<p class="text-justify">
					Contamos con un sistema de escaneo, conformado por equipos (escáneres de alto rendimiento) y el software especializado para digitalizar las pruebas de entrega, generando archivos digitales en formatos gráficos .jpg y .tif, los cuales pueden ser enviados a un servidor FTP acordado o a través de CD ó DVD. Igualmente éstas pruebas serán relacionadas en archivos planos ó en el formato que se acuerde. Adicionalmente contamos con el más sofisticado sistema de control para el despacho, recepción y seguimiento de los envíos mediante lectores ópticos de código de barras. El reporte final e informes están completamente sistematizados y serán entregados en medio magnético y / o CD ROOM ó mediante correo electrónico con las pruebas de entrega digitalizadas. Para la realización de las guías de entrega por parte de Envientrega es fundamental el envío de la base de datos correspondiente, ya sea por correo electrónico o a través de la descarga de un servidor FTP, en un formato Excel o archivo plano, relacionando los datos necesarios para el correcto diligenciamiento de la misma.
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