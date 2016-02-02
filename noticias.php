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
				<div class="col-sm-6 col-md-4">			
					<div class="thumbnail">
				      <img src="http://lorempixel.com/242/200/business/" alt="...">
				      <div class="caption">
				        <h3>Noticia 1</h3>
				        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi repellendus quam, accusamus error aliquid, quos veritatis, nihil, ratione necessitatibus deleniti omnis impedit ipsa. Blanditiis placeat enim, ut quidem, perferendis commodi.</p>
				        <p><a href="#" class="btn btn-primary" role="button">Leer mas</a></p>
				      </div>
				    </div>
				</div>
				<div class="col-sm-6 col-md-4">			
					<div class="thumbnail">
				      <img src="http://lorempixel.com/242/200/business/" alt="...">
				      <div class="caption">
				        <h3>Noticia 2</h3>
				        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sit, minus animi eveniet et consectetur quas, in aliquam eius voluptas odit eum accusantium sequi ipsum itaque nesciunt culpa tempora repellendus.</p>
				        <p><a href="#" class="btn btn-primary" role="button">Leer mas</a></p>
				      </div>
				    </div>
				</div>
				<div class="col-sm-6 col-md-4">			
					<div class="thumbnail">
				      <img src="http://lorempixel.com/242/200/business/" alt="...">
				      <div class="caption">
				        <h3>Noticia 3</h3>
				        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ratione officia animi, est doloremque asperiores, voluptate accusamus, in a culpa eaque minima eveniet quibusdam! Iste amet, adipisci quas distinctio alias.</p>
				        <p><a href="#" class="btn btn-primary" role="button">Leer mas</a></p>
				      </div>
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