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
			<div class="Registro">
				<form method="post" action="registrar.php">
					<table>
						<tr>
							<td><input type="text" required="" name="nombre" placeholder="Nombre" autocomplete="off"> </td>
							<td><input type="text" required="" name="apellido" placeholder="Apellido" autocomplete="off"></td>
							<td><input type="text" id="email"  name="mailusuario" required="" placeholder="Mail" autocomplete="off"> </td>
							<td><input type="password" name="contraseña" name="password" id="password" required="" placeholder="Contraseña" autocomplete="off"></td>
						</tr>
						<tr>
							<td><input type="text" name="telefono" required="" placeholder="Telefono" autocomplete="off"></td>
							<td><input type="text" name="celular" required="" placeholder="Celular" autocomplete="off"></td>
							<td><input type="text" name="dni" required="" placeholder="DNI" autocomplete="off"></td>							
							<td>
								<select required="" name="provincia" id="provincia" class="select">
									<option value="0">Provincia</option>
									<?										
									foreach ($provincias as $provincia) {
									?>
										<option value="<?=$provincia['ID'];?>"><?=$provincia['Nombre'];?></option>	
									<?
									}
									?>									
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<select required="" name="localidad" id="localidad" class="select">
									<option value="0">Localidad</option>
									<?
									foreach ($localidades as $localidad) {
									?>
										<option value="<?=$localidad['ID'];?>"><?=$localidad['Nombre'];?></option>	
									<?
									}
									?>
								</select>
							</td>
							<td><input type="text" name="calle" required="" placeholder="Calle" autocomplete="off"></td>
							<td><input type="text" name="numero" required="" placeholder="Numero" autocomplete="off"></td>
							<td><input type="text" name="departamento" required="" placeholder="Departamento" autocomplete="off"></td>
						</tr>
						<tr>
							<td><input type="text" required="" name="codigopostal" placeholder="Cod.Postal" autocomplete="off"> </td>
							<td  style="text-align: left;" ><label ><input type="checkbox" class="checkbox-element" name="recibemail" />Mails de vennuit</label></td>
							<td></td><td></td>
						</tr>
					</table>
					<input type="submit" name="Registrate"  value="Registrar" title="Registra tu cuenta"></td>
					<script src="http://codepen.io/assets/editor/live/css_live_reload_init.js"></script>
				</form>
			</div>
			<!-- CORE : begin -->
			<div id="core">

				<!-- PAGE CONTENT : begin -->
				<div id="page-content">
					<div class="various-content">

						<!-- SERVICES SECTION : begin -->
						<section>

							<!-- SECTION HEADER : begin -->
							<header>
								<div class="container">
									<h2>Our Services</h2>
									<p class="subtitle">We offer a wide range of beauty services</p>
									<p class="more"><a href="./services.html" class="c-button m-type-2">See all Services</a></p>
								</div>
							</header>
							<!-- SECTION HEADER : end -->

							<!-- SERVICE LIST : begin -->
							<div class="c-service-list m-paginated" data-items="4" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
								<div class="container">
									<div class="service-list-inner">
										<div class="service-list-item">

											<!-- SERVICE : begin -->
											<div class="c-service">
												<div class="service-image">
													<a href="./services.html#cosmetics"><img src="./images/service_01.jpg" alt=""></a>
												</div>
												<h3 class="service-title"><a href="./services.html#cosmetics">Cosmetics</a></h3>
												<div class="service-description">
													<p>Facials, Eyebrow & Eyelashes, Microdermabrasion, Acne Treatments, Anti-Aging</p>
												</div>
											</div>
											<!-- SERVICE : end -->

										</div>
										<div class="service-list-item">

											<!-- SERVICE : begin -->
											<div class="c-service">
												<div class="service-image">
													<a href="./services.html#hairdressing"><img src="./images/service_02.jpg" alt=""></a>
												</div>
												<h3 class="service-title"><a href="./services.html#hairdressing">Hairdressing</a></h3>
												<div class="service-description">
													<p>Wash, Cut & Finish, Blow Dries, Hair Colouring & Highlights, Evening Hairdressing</p>
												</div>
											</div>
											<!-- SERVICE : end -->

										</div>
										<div class="service-list-item">

											<!-- SERVICE : begin -->
											<div class="c-service">
												<div class="service-image">
													<a href="./services.html#body-treatments"><img src="./images/service_03.jpg" alt=""></a>
												</div>
												<h3 class="service-title"><a href="./services.html#body-treatments">Body Treatments</a></h3>
												<div class="service-description">
													<p>Body Wraps, Body Exfoliation Treatments, Cellulite Treatments, Lipo Laser, Depilation</p>
												</div>
											</div>
											<!-- SERVICE : end -->

										</div>
										<div class="service-list-item">

											<!-- SERVICE : begin -->
											<div class="c-service">
												<div class="service-image">
													<a href="./services.html#massages"><img src="./images/service_04.jpg" alt=""></a>
												</div>
												<h3 class="service-title"><a href="./services.html#massages">Massages</a></h3>
												<div class="service-description">
													<p>Exotic Massages, Swedish Massage, Hot Stone Massage, Aromatherapy Massage</p>
												</div>
											</div>
											<!-- SERVICE : end -->

										</div>
										<div class="service-list-item">

											<!-- SERVICE : begin -->
											<div class="c-service">
												<div class="service-image">
													<a href="./services.html"><img src="./images/service_05.jpg" alt=""></a>
												</div>
												<h3 class="service-title"><a href="./services.html">Nails</a></h3>
												<div class="service-description">
													<p>Nail Art, Paraffin Wax Treatment, Shellac Manicure, Gel Nails, French Manicure</p>
												</div>
											</div>
											<!-- SERVICE : end -->

										</div>
									</div>
								</div>
							</div>
							<!-- SERVICE LIST : end -->

						</section>
						<!-- SERVICES SECTION : end -->

						<!-- GALLERY SECTION : begin -->
						<section>

							<!-- SECTION HEADER : begin -->
							<header>
								<div class="container">
									<h2>Gallery</h2>
									<p class="subtitle">See how it looks inside our studio</p>
									<p class="more"><a href="./gallery.html" class="c-button m-type-2">Enter Gallery</a></p>
								</div>
							</header>
							<!-- SECTION HEADER : end -->

							<!-- GALLERY : begin -->
							<div class="c-gallery m-paginated" data-items="4" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
								<div class="thumb-list">
									<div class="thumb"><a href="./images/gallery_01.jpg" class="lightbox" data-lightbox-group="gallery"><img src="./images/gallery_01.jpg" alt=""></a></div>
									<div class="thumb"><a href="./images/gallery_02.jpg" class="lightbox" data-lightbox-group="gallery"><img src="./images/gallery_02.jpg" alt=""></a></div>
									<div class="thumb"><a href="./images/gallery_03.jpg" class="lightbox" data-lightbox-group="gallery"><img src="./images/gallery_03.jpg" alt=""></a></div>
									<div class="thumb"><a href="./images/gallery_04.jpg" class="lightbox" data-lightbox-group="gallery"><img src="./images/gallery_04.jpg" alt=""></a></div>
									<div class="thumb"><a href="./images/gallery_05.jpg" class="lightbox" data-lightbox-group="gallery"><img src="./images/gallery_05.jpg" alt=""></a></div>
									<div class="thumb"><a href="./images/gallery_06.jpg" class="lightbox" data-lightbox-group="gallery"><img src="./images/gallery_06.jpg" alt=""></a></div>
									<div class="thumb"><a href="./images/gallery_07.jpg" class="lightbox" data-lightbox-group="gallery"><img src="./images/gallery_07.jpg" alt=""></a></div>
									<div class="thumb"><a href="./images/gallery_08.jpg" class="lightbox" data-lightbox-group="gallery"><img src="./images/gallery_08.jpg" alt=""></a></div>
								</div>
							</div>
							<!-- GALLERY : end -->

						</section>
						<!-- GALLERY SECTION : end -->

						<!-- BLOG SECTION : begin -->
						<section>

							<!-- SECTION HEADER : begin -->
							<header>
								<div class="container">
									<h2>Blog</h2>
									<p class="subtitle">Read about latest health trends</p>
									<p class="more"><a href="./blog.html" class="c-button m-type-2">Read Blog</a></p>
								</div>
							</header>
							<!-- SECTION HEADER : end -->

							<div class="container">
								<div class="row">
									<div class="col-sm-3">

										<!-- ARTICLE : begin -->
										<article class="c-article">
											<div class="article-image"><a href="./blog-image.html"><img src="./images/article_thumb_01.jpg" alt=""></a></div>
											<h3 class="article-title"><a href="./blog-image.html">Far far away, behind the word mountains</a></h3>
										</article>
										<!-- ARTICLE : end -->

									</div>
									<div class="col-sm-3">

										<!-- ARTICLE : begin -->
										<article class="c-article">
											<div class="article-image"><a href="./blog-image.html"><img src="./images/article_thumb_02.jpg" alt=""></a></div>
											<h3 class="article-title"><a href="./blog-image.html">The Big Oxmox advised her not to do so</a></h3>
										</article>
										<!-- ARTICLE : end -->

									</div>
									<div class="col-sm-3">

										<!-- ARTICLE : begin -->
										<article class="c-article">
											<div class="article-image"><a href="./blog-image.html"><img src="./images/article_thumb_03.jpg" alt=""></a></div>
											<h3 class="article-title"><a href="./blog-image.html">A small river named Duden flows by their place</a></h3>
										</article>
										<!-- ARTICLE : end -->

									</div>
									<div class="col-sm-3">

										<!-- ARTICLE : begin -->
										<article class="c-article">
											<div class="article-image"><a href="./blog-image.html"><img src="./images/article_thumb_04.jpg" alt=""></a></div>
											<h3 class="article-title"><a href="./blog-image.html">Right at the coast of the Semantics</a></h3>
										</article>
										<!-- ARTICLE : end -->

									</div>
								</div>
							</div>

						</section>
						<!-- BLOG SECTION : end -->

						<!-- TESTIMONIALS SECTION : begin -->
						<section>

							<!-- SECTION HEADER : begin -->
							<header>
								<div class="container">
									<h2>Our Clients</h2>
									<p class="subtitle">Read why they love us so much</p>
									<p class="more"><a href="./contact.html" class="c-button m-type-2">Become Our Client</a></p>
								</div>
							</header>
							<!-- SECTION HEADER : end -->

							<!-- TESTIMONIAL LIST : begin -->
							<div class="c-testimonial-list m-paginated">
								<div class="container">
									<div class="testimonial-list-inner">
										<div class="testimonial-list-item">

											<!-- TESTIMONIAL : begin -->
											<div class="c-testimonial m-has-portrait">
												<div class="testimonial-inner">
													<p class="testimonial-portrait"><span><img src="./images/client_01.jpg" alt=""></span></p>
													<blockquote>
														<p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.</p>
														<footer><strong>Floor Simons</strong>, Startup CEO</footer>
													</blockquote>
												</div>
											</div>
											<!-- TESTIMONIAL : end -->

										</div>
										<div class="testimonial-list-item">

											<!-- TESTIMONIAL : begin -->
											<div class="c-testimonial m-has-portrait">
												<div class="testimonial-inner">
													<p class="testimonial-portrait"><span><img src="./images/client_02.jpg" alt=""></span></p>
													<blockquote>
														<p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean imperdiet.</p>
														<footer><strong>Nikki Neil</strong>, Blogger</footer>
													</blockquote>
												</div>
											</div>
											<!-- TESTIMONIAL : end -->

										</div>
										<div class="testimonial-list-item">

											<!-- TESTIMONIAL : begin -->
											<div class="c-testimonial m-has-portrait">
												<div class="testimonial-inner">
													<p class="testimonial-portrait"><span><img src="./images/client_03.jpg" alt=""></span></p>
													<blockquote>
														<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Aenean imperdiet. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Nam quam nunc.</p>
														<footer><strong>Tarja Lee</strong>, Writer</footer>
													</blockquote>
												</div>
											</div>
											<!-- TESTIMONIAL : end -->

										</div>
									</div>
								</div>
							</div>
							<!-- TESTIMONIAL LIST : end -->

						</section>
						<!-- TESTIMONIALS SECTION : end -->

						<!-- BRANDS SECTION : begin -->
						<section>

							<!-- SECTION HEADER : begin -->
							<header>
								<div class="container">
									<h2>Our Favourite brands</h2>
									<p class="subtitle">We use only the high quality original products</p>
								</div>
							</header>
							<!-- SECTION HEADER : end -->

							<div class="container">
								<div class="row">
									<div class="col-sm-3">
										<p class="textalign-center">

											<!-- BRAND LOGO : begin -->
											<a href="#" class="no-border"><img src="./images/brand_01.png" alt=""></a>
											<!-- BRAND LOGO : end -->

										</p>
									</div>
									<div class="col-sm-3">
										<p class="textalign-center">

											<!-- BRAND LOGO : begin -->
											<a href="#" class="no-border"><img src="./images/brand_02.png" alt=""></a>
											<!-- BRAND LOGO : end -->

										</p>
									</div>
									<div class="col-sm-3">
										<p class="textalign-center">

											<!-- BRAND LOGO : begin -->
											<a href="#" class="no-border"><img src="./images/brand_03.png" alt=""></a>
											<!-- BRAND LOGO : end -->

										</p>
									</div>
									<div class="col-sm-3">
										<p class="textalign-center">

											<!-- BRAND LOGO : begin -->
											<a href="#" class="no-border"><img src="./images/brand_04.png" alt=""></a>
											<!-- BRAND LOGO : end -->

										</p>
									</div>
								</div>
							</div>

						</section>
						<!-- BRANDS SECTION : end -->

					</div>
				</div>
				<!-- PAGE CONTENT : end -->

			</div>
			<!-- CORE : end -->

			<!-- BOTTOM PANEL : begin -->
			<div id="bottom-panel">
				<div class="bottom-panel-inner">
					<div class="container">
						<div class="row">
							<div class="col-md-6">

								<!-- BOTTOM TEXT : begin -->
								<div class="bottom-text various-content">

									<h3>About Beautyspot</h3>
									<p><strong>BEAUTYSPOT</strong> is an ideal template for <strong>beauty salon, hairdressers, wellness or spa</strong>. Clean code and top-notch web design techniques are wrapped with <strong>several gorgeous color schemes</strong> to choose from.</p><p>You can buy this responsive HTML5/CSS3 template on <a href="http://themeforest.net/user/ShakespeareThemes/portfolio?ref=LubosVolovar">ThemeForest</a>.</p>

								</div>
								<!-- BOTTOM TEXT : end -->

							</div>
							<div class="col-md-6">

								<!-- BOTTOM SUBSCRIBE : begin -->
								<div class="bottom-subscribe various-content">

									<h3>Newsletter</h3>
									<p>BEAUTYSPOT supports MailChimp integration.</p>
									<form id="subscribe-form" action="http://volovar.us8.list-manage.com/subscribe/post-json?u=76a50c9454ec8ab78914d1bf2&amp;id=49e892f53d&amp;c=?" method="get">

										<!-- VALIDATION ERROR MESSAGE : begin -->
										<p style="display: none;" class="c-alert-message m-warning m-validation-error"><i class="ico fa fa-exclamation-circle"></i>Email address is required.</p>
										<!-- VALIDATION ERROR MESSAGE : end -->

										<!-- SENDING REQUEST ERROR MESSAGE : begin -->
										<p style="display: none;" class="c-alert-message m-warning m-request-error"><i class="ico fa fa-exclamation-circle"></i>There was a connection problem. Try again later.</p>
										<!-- SENDING REQUEST ERROR MESSAGE : end -->

										<!-- SUCCESS MESSAGE : begin -->
										<p style="display: none;" class="c-alert-message m-success"><i class="ico fa fa-check-circle"></i><strong>Sent successfully.</strong></p>
										<!-- SUCCESS MESSAGE : end -->

										<div class="form-fields">
											<input class="m-required m-email" name="EMAIL" type="text" data-placeholder="Your email address" title="Your email address">
											<button class="c-button submit-btn" type="submit" data-label="Subscribe" data-loading-label="Sending...">Subscribe</button>
										</div>
									</form>

								</div>
								<!-- BOTTOM SUBSCRIBE : end -->

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- BOTTOM PANEL : end -->

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
	  
	});
	
</script>