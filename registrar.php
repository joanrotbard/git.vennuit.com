<?php
	include('menu.php');
	include('classes/usuario.php');	
	include('classes/provincia.php');
	include('classes/localidad.php');	
	
	$provincias = Provincia::obtenerProvincias();
	$localidades = Localidad::obtenerLocalidadPorProvincia(1);
	if(isset($_POST["Registrate"]))
	{
		$nuevoUsuario = new Usuario();
		$nuevoUsuario->nombre = $_POST["nombre"];
		$nuevoUsuario->apellido = $_POST["apellido"];
		$nuevoUsuario->mailusuario = $_POST["mailusuario"];
		$nuevoUsuario->contraseña = $_POST["contraseña"];
		$nuevoUsuario->telefono = $_POST["telefono"];
		$nuevoUsuario->celular = $_POST["celular"];
		$nuevoUsuario->dni = $_POST["dni"];
		$nuevoUsuario->provinciaid = $_POST["provincia"];
		$nuevoUsuario->localidadid = $_POST["localidad"];
		$nuevoUsuario->calle = $_POST["calle"];
		$nuevoUsuario->numero = $_POST["numero"];
		$nuevoUsuario->departamento = $_POST["departamento"];
		$nuevoUsuario->codigopostal = $_POST["codigopostal"];
		if(isset($_POST['recibemail']))
			$nuevoUsuario->recibemail = true;
		else 
			$nuevoUsuario->recibemail = false;
		$nuevoUsuario->registrarUsuario($nuevoUsuario);
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<!DOCTYPE html>
<html>		
		<div id="wrapper">
			<br>
			<form method="post" action="registrar.php" class="form-horizontal" role="form">
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Nombre</label>
			    <div class="col-sm-4">
			      <input type="text" required="" name="nombre" class="form-control"  placeholder="Nombre">
			    </div>
			  </div>
			   <div class="form-group">
			    <label class="col-sm-2 control-label">Apellido</label>
			    <div class="col-sm-4">
			      <input type="text" required="" name="apellido" class="form-control"  placeholder="Apellido">
			    </div>
			  </div>
			  <div class="form-group" id="divemail" >
			    <label class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-4">			  
			      <input type="email" required="" id="mailuser" name="mailusuario" class="form-control" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
			    <div class="col-sm-4">
			      <input type="password" required="" class="form-control" name="contraseña" placeholder="Contraseña">
			    </div>
			  </div>			  
			   <div class="form-group">
			    <label class="col-sm-2 control-label">Telefono</label>
			    <div class="col-sm-4">
			      <input type="text" required="" name="telefono" class="form-control"  placeholder="Telefono">
			    </div>
			  </div>			  
			   <div class="form-group">
			    <label class="col-sm-2 control-label">Celular</label>
			    <div class="col-sm-4">
			      <input type="text" required="" name="celular" class="form-control"  placeholder="Celular">
			    </div>
			  </div>			  
			   <div class="form-group">
			    <label class="col-sm-2 control-label">DNI</label>
			    <div class="col-sm-4">
			      <input type="text" required="" name="dni" class="form-control"  placeholder="DNI">
			    </div>
			  </div>			  			  
			  <div class="form-group">
		  		<label class="col-sm-2 control-label">Provincia</label>
			    <div class="col-sm-4">			      
					<select required="" name="provincia" id="provincia" class="form-control">
					<?										
					foreach ($provincias as $provincia) {
					?>
						<option value="<?=$provincia['ID'];?>"><?=$provincia['Nombre'];?></option>	
					<?
					}
					?>									
				</select>
			    </div>
			  </div>		  			  
			  <div class="form-group">
		  		<label class="col-sm-2 control-label">Localidad</label>
			    <div class="col-sm-4">			      
					<select required="" name="localidad" id="localidad" class="form-control">
						<?
						foreach ($localidades as $localidad) {
						?>
							<option value="<?=$localidad['ID'];?>"><?=$localidad['Nombre'];?></option>	
						<?
						}
						?>
					</select>
			    </div>
			  </div>			  			  
			   <div class="form-group">
			    <label class="col-sm-2 control-label">Calle</label>
			    <div class="col-sm-4">
			      <input type="text" required="" name="calle" class="form-control"  placeholder="Calle">
			    </div>
			  </div>			  
			   <div class="form-group">
			    <label class="col-sm-2 control-label">Numero</label>
			    <div class="col-sm-4">
			      <input type="text" required="" name="numero" class="form-control"  placeholder="Numero">
			    </div>
			  </div>			  
			   <div class="form-group">
			    <label class="col-sm-2 control-label">Departamento</label>
			    <div class="col-sm-4">
			      <input type="text" required="" name="departamento" class="form-control"  placeholder="Departamento">
			    </div>
			  </div>			  			  
			   <div class="form-group">
			    <label class="col-sm-2 control-label">Codigo postal</label>
			    <div class="col-sm-4">
			      <input type="text" required="" name="codigopostal" class="form-control"  placeholder="Codigo postal">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-4">
			      <div class="checkbox">
			        <label>
			          <input type="checkbox" name="recibemail"> ¿Desea recibir mails de vennuit?
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-4">
			      <button type="submit" name="Registrate" class="btn btn-default">Registrate</button>
			    </div>
			  </div>
			</form>
			
			<!-- FOOTER : begin -->
			<footer id="footer">
				<div class="container">

					<!-- FOOTER TWITTER : begin -->
					<div class="footer-twitter m-paginated" data-id="LubosBudkovsky" data-limit="3" data-interval="12000">
						<div class="footer-twitter-inner">
							<i class="ico fa fa-twitter"></i>
							<h4 class="twitter-title"><a href="https://twitter.com/LubosBudkovsky">@LubosBudkovsky</a></h4>
							<div class="twitter-feed">
								<span class="c-loading-anim"><span></span></span>
							</div>
						</div>
					</div>
					<!-- FOOTER TWITTER : end -->

					<!-- FOOTER BOTTOM : begin -->
					<div class="footer-bottom">
						<div class="row">
							<div class="col-md-6 col-md-push-6">

								<!-- FOOTER MENU : begin -->
								<nav class="footer-menu">
									<ul>
										<li><a href="./index.html">Home</a></li>
										<li><a href="./services.html">Services</a></li>
										<li><a href="./documentation.html">Documentation</a></li>
									</ul>
								</nav>
								<!-- FOOTER MENU : end -->

							</div>
							<div class="col-md-6 col-md-pull-6">

								<!-- FOOTER TEXT : begin -->
								<div class="footer-text">
									<p>

©2014 Vennuit. All rights reserved.
								</div>
								<!-- FOOTER TEXT : end -->

							</div>
						</div>
					</div>
					<!-- FOOTER BOTTOM : end -->

				</div>
			</footer>
			<!-- FOOTER : end -->

		</div>
		<!-- WRAPPER : end -->

		<!-- SCRIPTS : begin -->
		<script src="./library/js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="./library/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
		<script src="./library/js/jquery.ba-outside-events.min.js" type="text/javascript"></script>
		<script src="./library/js/owl.carousel.min.js" type="text/javascript"></script><!-- Carousel -->
		<script src="./library/js/jquery.magnific-popup.min.js" type="text/javascript"></script><!-- Lightbox -->
		<script src="./library/twitter/jquery.tweet.min.js" type="text/javascript"></script><!-- Twitter Feed -->
		<script src="./library/js/library.js" type="text/javascript"></script>
		<script src="./library/js/scripts.js" type="text/javascript"></script>
		<!-- SCRIPTS : end -->

	</body>
</html>
<script type="text/javascript">
	
	$(document).ready(function () {
		
		$('#provincia').change(function (argument) {
			var _provinciaID = $('#provincia option:selected').val();	
			$.post("ajax/obtenerLocalidadesPorProvincia.php",
			{
				provinciaID:_provinciaID,
			},
			function(data,status){
				$('#localidad').html('');
				data = JSON.parse(data);
				for(var i  = 0;i < data.length;i++){
					var option = '<option value="'+data[i].ID+'">'+data[i].Nombre+'</option>';
					$('#localidad').append(option);
				}
			});
		  
		});
	  $('#mailuser').keyup(function (argument) {
			var _mail = $(this).val();	
			$.post("ajax/ExisteMailRegistrado.php",
			{
				mail:_mail,
			},
			function(data,status){
				$('#divemail').removeClass('has-success');
				$('#divemail').removeClass('has-error');
				$('#divemail').removeClass('has-feedback');
				$('#divemail span').remove();
				if(data == "false"){
					$('#divemail').addClass('has-success');
					$('#divemail').addClass('has-feedback');
					$('#divemail div').append('<span class="glyphicon glyphicon-ok form-control-feedback"></span>');
				}else{
					$('#divemail').addClass('has-error');
					$('#divemail').addClass('has-feedback');
					$('#divemail div').append('<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>');
				}
				
			});
		  
		});
	});
	
</script>