	
<?php
include("header.php");
?>		
	<section class="container-fluid">
		<div class="container contenido-central">
			<h2 class="titulo-contenido-central">REGISTRATE <small>en nuestra base de datos</small></h2></h2>
			<form class="form-horizontal">
					<div class="row">				  
					    <label for="inputEmail3" class="col-sm-2 control-label">Nombres y Apellidos:</label>
					    <div class="col-sm-3">
					      <input type="text" class="form-control" id="inputEmail3" placeholder="Nombres y Apellidos">
					    </div>

					    <label for="inputEmail3" class="col-sm-2 control-label">Sexo: </label>
					    <div class="col-sm-3">
					      <select class="form-control" id="select">
					      	  <option value="">Seleccione...</option>
					          <option value="1">Masculino </option>
					          <option value="2">Femenino</option>
	                      </select>
					    </div>
				  	</div>

				  <div class="row">
				    <label for="inputEmail3" class="col-sm-2 control-label">Tipo de Documento: </label>
				    <div class="col-sm-3">
				      <select class="form-control" id="select">
				      	  <option value="">Seleccione...</option>
				          <option value="1">Cedula </option>
				          <option value="2">Cedula de Extrangeria </option>
				          <option value="3">Pasaporte</option>
				          <option value="4">Tarjeta de Identidad </option>
                      </select>
				    </div>

				    <label for="inputEmail3" class="col-sm-2 control-label">Numero de Documento: </label>
				    <div class="col-sm-3">
				      <input type="number" class="form-control" id="inputEmail3" placeholder="Numero de Documento">
				    </div>
				  </div>
				  <div class="row">
				    <label for="inputEmail3" class="col-sm-2 control-label">Fecha de Nacimiento</label>
				    <div class="col-sm-3">
				      <input type="date" class="form-control" id="inputEmail3" placeholder="dd/mm/aaaa">
				    </div>
				    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-3">
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				    </div>
				  </div>				  
				<div class="row">
				    <label for="inputEmail3" class="col-sm-2 control-label">Departamento: </label>
				    <div class="col-sm-3">
				      <select class="form-control" id="select">
				      	  <option value="">Seleccione...</option>
				          <option value="1">Cundinamarca</option>
				          <option value="2">Norte de Santander</option>
                      </select>
				    </div>
				
				    <label for="inputEmail3" class="col-sm-2 control-label">Ciudad: </label>
				    <div class="col-sm-3">
				      <select class="form-control" id="select">
				      	  <option value="">Seleccione...</option>
				          <option value="1">Bogota</option>
				          <option value="2">Cucucta</option>
                      </select>
				    </div>
				</div>

				<div class="row">
				  	<label for="inputEmail3" class="col-sm-2 control-label">Contraseña</label>
				    <div class="col-sm-3">
				      <input type="text" class="form-control" id="inputPassword3" placeholder="Contraseña">
				    </div>
				    <label for="inputPassword3" class="col-sm-2 control-label">Confirme su contraseña</label>
				    <div class="col-sm-3">
				      <input type="password" class="form-control" id="inputPassword3" placeholder="Confirme su contraseña">
				    </div>
				</div>
				<div class="row">
				    <label for="inputEmail3" class="col-sm-2 control-label">Celular: </label>
				    <div class="col-sm-3">
				      <input type="number" class="form-control" id="inputEmail3" placeholder="Celular">
				    </div>				  
				    <label for="inputEmail3" class="col-sm-2 control-label">Telefono: </label>
				    <div class="col-sm-3">
				      <input type="number" class="form-control" id="inputEmail3" placeholder="Telefono">
				    </div>
				</div>

				  
				  
				    <div class="col-sm-offset-2 col-sm-4">
				      <button type="submit" class="btn btn-primary">Registrarme</button>
				    </div>
			</form>

		
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