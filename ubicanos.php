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
	<section class="container-fluid">
		<div class="container contenido-central">
			<div class="row">
			<div class="col-md-4">
				<h2 class="titulo-contenido-central">Ubicanos</h2>
				<address>
					<p>
						<i>Cúcuta: </i>Calle 9 Nº 4-52 Local 223 a 226 C.C. River Plaza.
						<br>
						<br>
						<i>Bogotá: </i>Calle 79A Nª 18-23 Ofic. 201 Edif. Unilago.
					
					</p>
				</address>
				<h2 class="titulo-contenido-central">Contactanos</h2>
				<address>
					<p>+57 01-8000-185714<br>+57 (7) 572.77.77 <br>(7) 572.96.21<br>(1) 745.28.64</p>
				</address>

			</div>
			<div class="col-md-8">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.069688172233!2d-72.50605813832455!3d7.88777818433267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xdb417002a63f63f8!2sRiver+Plaza!5e0!3m2!1sen!2sve!4v1454373548594" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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