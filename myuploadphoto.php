<?php

if ( isset( $_POST["sendPhoto"] ) ) {
  processForm();
} else {
  displayForm();
}

// MAN KAN IKKE SE AT MAN HAR VALGT EN FIL - FILNAVNET SKAL VISES

function processForm() {
  if ( isset( $_FILES["photo"] ) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK ) {
    if ( $_FILES["photo"]["type"] != "image/jpeg" ) {
      echo "<p>Vi tager kun imod JPEG-filer, tak!</p>";
    } elseif ( !move_uploaded_file( $_FILES["photo"]["tmp_name"], "bauhausuploads/" . basename( $_FILES["photo"]["name"] ) ) ) {
      echo "<p>Vi beklager - der opstod et problem.</p>" . $_FILES["photo"]["error"] ;
    } else {
      displayThanks();
    }
  } else {
    switch( $_FILES["photo"]["error"] ) {
      case UPLOAD_ERR_INI_SIZE:
        $message = "Billede-filen er for stor.";
        break;
      case UPLOAD_ERR_FORM_SIZE:
        $message = "Billede-filen er for stor.";
        break;
      case UPLOAD_ERR_NO_FILE:
        $message = "Ingen fil blev uploadet - er du sikker på, at du har valgt en?.";
        break;
      default:
        $message = "Noget er gået galt - kontakt os for hjælp.";
    }
    echo "<p>Vi beklager! $message</p>";
  }
}

function displayForm() {
?>  	
   	<form action="del.php" method="post" enctype="multipart/form-data">
      
    	<div class="col-xs-12 btn knap btn-outlined text-center">
     		<label for="photo" >Vælg billede</label>
        	<input type="file" name="photo" id="photo" value="" style="display: none"/>
		</div>
     	
        <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
             
        <div class="col-xs-12 beskrivendetekst">
        	<label for="visitorName">Dit fornavn:</label>
		</div>
      
       <div class="col-xs-12 text-center textbox textbox-wrap">
        	<input type="text" name="visitorName" id="visitorName" value="" placeholder="f.eks. Jonathan" />
		</div>
     
     <div class="col-xs-12 beskrivendetekst">
        	<label for="billedetekst">Hvad viser dit billede?</label>
		</div>
      
       <div class="col-xs-12 text-center textbox textbox-wrap">
        	<input type="text" name="billedetekst" id="billedetekst" value="" placeholder="f.eks.: Nymalet børnværelse" />
		</div>
      
       <div class="col-xs-12 btn knap btn-outlined text-center">
         <label for="sendPhoto" >send</label>
          <input type="submit" name="sendPhoto" id="sendPhoto" value="" style="display: none" />
      </div>
		
    </form>
    </div>
<?php
}

function displayThanks() {
	tilfCopy($_FILES["photo"]["name"]);
?>
   
    <div class="row">
    	<div class="col-xs-12">
    		<h2>Succes!</h2>
    	</div>
    </div>
    		
    <div class="row">
    	<div class="col-xs-12">
    		<p>Tak for at dele dit billede med os<?php if ( $_POST["visitorName"] ) echo ", " . $_POST["visitorName"] ?>!</p>
    		<p>Sådan vil dit billede blive vist:</p>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-xs-12 text-center">
   			<p><img src="bauhausuploads/<?php echo $_FILES["photo"]["name"] ?>" alt="Photo" class="imagestyle thumbnail" /></p>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-xs-12">
    		<p>Du kan allerede nu se dit eget billede i vores galleri:</p>
    		<a href="galleri.php" role="button" class=" btn knap btn-outlined text-center">Galleri</a>
    	</div>
    </div>
<?php
}

function tilfCopy($gemtbillede){
$myImage = imagecreatefromjpeg( "bauhausuploads/$gemtbillede" );
$myLogo = imagecreatefrompng( "images/bauhaushelper.png" );
$myLogo = imagescale($myLogo, 313,213);
//$myColor = imagecolorallocate( $myImage, 255, 255, 255 );

$destWidth = imagesx( $myImage );
$destHeight = imagesy( $myImage );
$srcWidth = imagesx( $myLogo );
$srcHeight = imagesy( $myLogo );

 // create a 300*200 image
$myImage = imagecreatetruecolor(400, 400);
echo imagesx($myImage); // 300
	
	//JEG KAN IKKE FÅ CROPPING TIL AT VIRKE
	
// next 7 lines to crop the image
// are from  http://php.net/manual/en/function.imagecrop.php
//$crop_measure = min($destHeight, $destWidth);
//$offsetX= ($destWidth-$crop_measure)/2;
//$offsetY= ($destHeight-$crop_measure)/2;
//$to_crop_array = array('x' => (0+$offsetX) , 'y' => (0+$offsetY), 'width' => $crop_measure, 'height'=> $crop_measure);
//$myImage = imagecrop($myImage, $to_crop_array);
//$destWidth = imagesx( $myImage );
//$destHeight = imagesy( $myImage );


// add white rectangles as borders make it look like polaroid (tm)
//imagefilledrectangle( $myImage, 0, 0, $destWidth, 30, $myColor );
//imagefilledrectangle( $myImage, 0, 0, 30, $destHeight, $myColor );
//imagefilledrectangle( $myImage, $destWidth-30, 0, $destWidth, $destHeight, $myColor ); 

$destX = $destWidth-$srcWidth; 
$destY = $destHeight-$srcHeight;

imagecopy( $myImage, $myLogo, $destX, $destY, 0, 0, $srcWidth, $srcHeight); 

//$white = imagecolorexact( $myLogo, 255, 255, 255 );
//imagecolortransparent( $myLogo, $white );


//imagefilledrectangle( $myImage, 0, $destY-$srcHeight, $destWidth, $destHeight, $myColor );


//imagecopymerge( $myImage, $myLogo, $destX+10, $destY-1, 0, 0, $srcWidth, $srcHeight, 79 );

//$black = imagecolorallocate( $myImage, 0, 0, 0 );
//imagestring( $myImage, 4 , 285, $destY+0.5*$srcHeight, "image (c) Matt Doyle", $black);


// This is to make browser believe an image is coming
//header( "Content-type: image/jpeg" );
// This sends the image to the browser 
// (it could have been saved on the server instead)
//imagejpeg( $myImage );

imagejpeg($myImage, "./bauhausuploads/".$gemtbillede );

// Cleaning up
imagedestroy( $myImage );
imagedestroy( $myLogo );

}


?>