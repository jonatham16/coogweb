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
				<h2 class="titulo-contenido-central">CLIENTES</h2>	
				<ul>
					<li><i class="fa fa-check vineta-check"></i>Computec S.A. (Comcel Soporte - Inversión Pichincha – Banco Santander - Leasing Bolívar – Directv – Coldecon)</li>
					<li><i class="fa fa-check vineta-check"></i>CADENA S.A (Bancolombia, Tarjeta Éxito, Protección, otros)</li>
					<li><i class="fa fa-check vineta-check"></i>Servicios funerarios cooperativos del N de S. (SERFUNORTE)</li>
					<li><i class="fa fa-check vineta-check"></i>Funeraria los Olivos.</li>
					<li><i class="fa fa-check vineta-check"></i>Servilla: (Popular – Protección – Instituto de Seguros Sociales – Tarjeta Éxito – Suramericana, Telmex)</li>
					<li><i class="fa fa-check vineta-check"></i>Bonos Multiusos.</li>
					<li><i class="fa fa-check vineta-check"></i>Contacto Empresarial.</li>
					<li><i class="fa fa-check vineta-check"></i>Wnetworks.</li>
					<li><i class="fa fa-check vineta-check"></i>Ecoopsos Ocaña.</li>
					<li><i class="fa fa-check vineta-check"></i>Tránsito de los Patios.</li>
					<li><i class="fa fa-check vineta-check"></i>Gases del Oriente S.A. ESP</li>
					<li><i class="fa fa-check vineta-check"></i>Anderson Consulting (Convenio Universidad Libre )</li>
					<li><i class="fa fa-check vineta-check"></i>Fundación Progresar.</li>
					<li><i class="fa fa-check vineta-check"></i>Metropolitan Express.</li>
					<li><i class="fa fa-check vineta-check"></i>Centrales Eléctricas del N de S (Pamplona).</li>
					<li><i class="fa fa-check vineta-check"></i>Velaciones San José S.A.</li>
					<li><i class="fa fa-check vineta-check"></i>Cobranzas de Cooguasimales.</li>
					<li><i class="fa fa-check vineta-check"></i>Banco Occidente</li>
				</ul>
				
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