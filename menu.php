<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vennuit | Suscripción de Productos Para Intimidad Femenina  </title>
    <link rel="shortcut icon" href="./images/favicon.ico">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700%7cMontserrat:400,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="./library/css/style.css">
        <link rel="stylesheet" href="library/js/metro-bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./library/css/skin/default.css">
	<link rel="stylesheet" type="text/css" href="./library/css/custom.css">
	<script src="library/js/jquery-1.9.1.min.js"></script>
	<link href="library/css/bootstrap.min.css" rel="stylesheet">
	<script src="library/js/bootstrap.min.js"></script>
	<script src="./library/js/modernizr.custom.min.js" type="text/javascript"></script> 
	<script src="library/js/metro/metro.min.js"></script>
    <script src="library/js/metro/metro-global.js"></script>
    <script src="library/js/metro/metro-locale.js"></script>
    <script src="library/js/metro/metro-calendar.js"></script>
     <script src="library/js/jquery.min.js"></script>
      <script src="library/js/metro/jquery.widget.min.js"></script>
      
</head>
	
<header id="header" class="m-animated">
			<div class="header-bg">
				<div class="header-inner">

					<!-- HEADER BRANDING : begin -->
					<div class="header-branding">
						<a href="./index.html"><img src="./images/logo.png" alt="Vennuit" data-hires="images/logo.2x.png" width="180"></a>
					</div>
					<!-- HEADER BRANDING : end -->

					<!-- HEADER NAVIGATION : begin -->
					<div class="header-navigation">

												<!-- HEADER MENU : begin -->
						<nav class="header-menu">
							<button class="header-menu-toggle" type="button"><i class="fa fa-bars"></i>MENU</button>
							<ul>
								<li>
									<span><a href="index.php">Inicio</a></span>
								</li>
								<li>
									<span><a href="comofunciona.html">Como Funciona</a></span>
								</li>	
								<li>
									<span><a href="regalos.html">Gift Cards & Regalos</a></span>
								</li>
							<br>
                            <br>
                            <br>	
							</ul>
						</nav>
						<!-- HEADER MENU : end -->

						<!-- HEADER CART : begin -->
						<div class="header-cart">
							<div class="header-cart-inner">
								<a href="./shop-cart.html"><i class="cart-ico fa fa-shopping-cart"></i><span class="cart-label">Cart</span><span class="cart-count">(3 items)</span></a>
							</div>
						</div>
						<!-- HEADER CART : end -->

						<!-- HEADER SEARCH : begin -->
						<div class="header-search">
							<div class="header-search-inner">
								<form class="search-form" action="http://demos.volovar.net/beautyspot.html/demo/search-results.html">
									<i class="search-ico fa fa-search"></i>
									<input class="search-input" type="text" placeholder="Search for...">
									<button class="search-submit" type="submit"><i class="fa fa-angle-right"></i></button>
									<button class="search-toggle" type="button">Search</button>
								</form>
							</div>
							<button class="search-toggle-mobile" type="button"><i class="fa"></i></button>
						</div>
						<!-- HEADER SEARCH : end -->

					</div>
					<!-- HEADER NAVIGATION : end -->

					<!-- HEADER PANEL : begin -->
					<div class="header-panel">

						<button class="header-panel-toggle" type="button"><i class="fa"></i></button>

						<!-- HEADER RESERVATION : begin -->
						<div class="header-reservation">
							<a href="./ajax/reservation-form.html" class="c-button m-open-ajax-modal">Comenzar</a>
						</div>
							<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
							  Login
							</button>
						<!-- HEADER RESERVATION : end -->
						<!-- HEADER SOCIAL : begin -->
						<div class="header-social">
							<ul>
								<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<!-- HEADER SOCIAL : end -->

					</div>
					<!-- HEADER PANEL : end -->

				</div>
			</div>
		</header>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  			<div class="modal-dialog">
    			<div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cancelar</span></button>
        				<h4 class="modal-title" id="myModalLabel">Login</h4>
      				</div>
      				<div class="modal-body ">
				        <div class="form-group row" >
						    <label class="col-sm-4 control-label">Email</label>
						    <div class="col-sm-4">			  
						      <input type="email" required="" id="mailuser"  class="form-control" placeholder="Email">
						    </div>
					  </div>
					  <div class="form-group row">
					  	<label for="inputPassword3" class="col-sm-4 control-label">Contraseña</label>
						<div class="col-sm-4">
							<input type="password" required="" class="form-control" id="passwordlogin" placeholder="Contraseña">
					    </div>
		  			  </div>
      				</div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		        <button type="button" id="login" class="btn btn-primary">Aceptar</button>
		      </div>
    		</div>
  		</div>
	</div>
	<script type="text/javascript">
	
	$(document).ready(function () {
		
		$('#login').click(function (argument) {
			var _mail = $('#mailuser').val();
			var _password = $('#passwordlogin').val();	
			$.post("ajax/Login.php",
			{
				mailuser:_mail,
				password:_password
			},
			function(data,status){				
				if(data == "false"){
					alert('noo');
				}else{
					alert('ok');
				}
			});
		  
		});
	 
	});
	
</script>