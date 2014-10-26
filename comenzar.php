<!DOCTYPE html>
<html>
		<?php
			include('menu.php');
		?>
		<div id="wrapper">			
			<div id="core">
				<div id="page-header">
					<div class="container">
						<h1>Comenzar</h1>
						<ul class="breadcrumbs">
							<li><a href="index.php">Inicio</a></li>
							<li>Comenzar</li>
						</ul>
					</div>
				</div>
				<div class="container">
					<div class="col-md-4 item">
						<div class="product-type">
							<span>TAMPONS</span>
						</div>
						<div class="item-data">
							<select id="select-marca-tampon">
	                            <option value="0" data-imagesrc="http://dl.dropbox.com/u/40036711/Images/facebook-icon-32.png" data-description="Description">Item1</option>	                            
	                            <option value="1" data-imagesrc="http://dl.dropbox.com/u/40036711/Images/foursquare-icon-32.png" data-description="Description">Item2</option>
                        	</select>
						</div>
					</div>
					<div class="col-md-4 item">
						<div class="product-type">
							<span>PADS</span>							
						</div>
						<div class="item-data">
							<select id="select-marca-pad">
	                            <option value="0" data-imagesrc="http://dl.dropbox.com/u/40036711/Images/facebook-icon-32.png" data-description="Description">Item1</option>	                            
	                            <option value="1" data-imagesrc="http://dl.dropbox.com/u/40036711/Images/foursquare-icon-32.png" data-description="Description">Item2</option>
                        	</select>
						</div>
					</div>
					<div class="col-md-4 item">
						<div class="product-type">
							<span>PANTY </span>
						</div>
						<div class="item-data">
							<select id="select-marca-panty">
	                            <option value="0" data-imagesrc="http://dl.dropbox.com/u/40036711/Images/facebook-icon-32.png" data-description="Description">Item1</option>	                            
	                            <option value="1" data-imagesrc="http://dl.dropbox.com/u/40036711/Images/foursquare-icon-32.png" data-description="Description">Item2</option>
                        	</select>
						</div>
					</div>
			  	</div>
			</div>
	</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#select-marca-tampon').ddslick();
		$('#select-marca-pad').ddslick();
		$('#select-marca-panty').ddslick();
	})	
</script>