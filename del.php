<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Del dine billeder</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/d27985072c.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
  </head>
  <body>
  
  <div class="container">
  		<header>
  			<div class="row">
  				<div class="col-xs-offset-2 col-xs-8">
  					<a href="index.php"><img src="images/bauhauslogo.png" class="logo" alt="Bauhaus logo"></a>
  				</div>
  					<!--<div class="col-xs-offset-1 col-xs-4 aabningstider"> 
  						<div class="row">
  							<div class="col-xs-1">
  								<a href="https://www.bauhaus.dk/storelocator/"><i class="fa fa-map-marker" aria-hidden="true" id=""></i> </a>
  							</div>
  							<div class="col-xs-7">
  								<a href="#"><p>ÅBNINGSTIDER</p></a>
  							</div>
  						</div>
  					</div>
  			</div>-->
  		</header>
  		
  		<!--<nav>
  			<div class="row">
  				<div class="col-xs-5 col-sm-offset-7 col-sm-2">
  					<img src="images/sog.gif" id="sogefelt"> 
  				</div>
  				<div class="col-xs-2 col-sm-1 kurv">
  				<i class="fa fa-shopping-cart" aria-hidden="true"></i>
  				</div>
  				<div class="col-xs-5 col-sm-2">
  					<div class="row">
  						<div class="col-xs-1 menu">
  							<i class="fa fa-bars" aria-hidden="true"></i>
  						</div>
  						<div class="col-xs-5 menu">
  							<p>MENU</p>
  						</div>
  					
  					</div>
  				</div>
  			</div>
  		</nav> -->
  		
  	<div class="overskrift">
  		<div class="row">
  			<div class="col-xs-offset-1 col-xs-10">
  				<h3>Upload dit billede til vores galleri!</h3>
  			</div>
  		</div>
  	</div>
  
  <section>
			
			<?php
			include("myuploadphoto.php");
			?>
			
		<!--<div class="row">
			<div class="col-xs-6 text-center thumbnails2">
				<form action="upload.php" method="post" id="formID" enctype="multipart/form-data">
  				<label for="fileToUpload" class="btn knap btn-outlined">Vælg billede</label>
    			<input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" style="display: none">
    			</form>
			</div>
		</div>
		
		<div class="row">
	  		<div class="col-xs-11">
	  			<p class="beskrivendetekst">Hvad viser dit billede? <br> <i>(Nyt køkken, nymalet børnværelse etc.)</i></p>
	  		</div>
	  	</div>
	  
		<div class="row">
			<div class="col-xs-11 text-center textbox-wrap">
				<input type="text" name="beskrivelse" value="Billedebeskrivelse" class="tekstbox" form="formID">
			</div>
	  </div>
	  
		<div class="row">
	  		<div class="col-xs-11">
	  			<p class="beskrivendetekst">Dit fornavn:<br><i>(Dit navn vil blive vist under dit billede)</i></p>
	  		</div>
	  	</div>
	  
		<div class="row">
			<div class="col-xs-11 text-center textbox-wrap">
				<input type="text" name="firstname" value="Dit fornavn" class="tekstbox" form="formID">
			</div>
	  </div>
		
	<section>
		<div class="row">
			<div class="col-xs-11 text-center textbox-wrap">
				<form action="upload.php">  
   				<input type="submit" value="Send" class="btn knap btn-outlined text-center tekstbox send" name="submit" form="formID">
				</form>
			</div>
		</div>
</section>
	-->
		
	<footer>
		 <section>
    		<p>© 2017 bauhaus.dk - Tlf.: 8626 0606 - CVR: 19555305 - All Rights Reserved</p>
  		</section>
	</footer>			
  </div>
  
  
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>