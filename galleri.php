 <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galleri</title>
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
        
        <div class="overskrift">
  			<div class="row">
  				<div class="col-xs-offset-1 col-xs-10">
  						<h3>Se andres billeder</h3>
  				</div>
  			</div>
  		</div>

       <?php 
	$sti = $_SERVER['DOCUMENT_ROOT'].'/yourfoldernamehere/Pics/small';
	$sti = "./bauhausuploads"; // delete this line if your PHP 
					//  requires more specific folder id (as in line 3)
	
?>
       
        <div id="article_list">
			<?php
			// find files in folder  and sort by filename
			$allFiles = scandir($sti,1);
			sort($allFiles);
			shuffle($allFiles);
			// and show them BUT only if they are jpg
			$howMany = count($allFiles);
			for($i=0;$i<$howMany;$i++){
			
				
				if (".jpg"==substr($allFiles[$i],-4)) {
				echo "
				<article class='show' onClick=\" swop(this) \">		
					<img src=\"$sti/$allFiles[$i]\" />
					<div class='cover' onClick=\" swop2(this) \"></div>
				</article>	";
				} else {
					//echo("<!-- ".$allFiles[$i]."-->");
				}
			}

			?>
        </div>
        
        <div class="row">
    	<div class="col-xs-12">
    		<p>Upload selv et billede:</p>
    		<a href="del.php" role="button" class=" btn knap btn-outlined text-center">Vælg billede</a>
    	</div>
    </div>
        
        <footer>
		 <section>
    		<p>© 2017 bauhaus.dk - Tlf.: 8626 0606 - CVR: 19555305 - All Rights Reserved</p>
  		</section>
	</footer>	
        
	</div>
	
  
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
  </body>
</html>