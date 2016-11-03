<!DOCTYPE html>
<html lang="is">
  
  
    <!-- Header -->
    <?php ob_start();
    try {
        include 'header.php';
	include 'menu.php';?> 

	<?php        
	$images = [           
 			['file'    => 'm2a',             'caption' => 'Happy with A Thing'],          
			['file'    => 'm1a',             'caption' => 'Life is better with A Thing'],
        		['file'    => 'm3a',             'caption' => 'More Things more happiness'],     
        		['file'    => 'm6a',             'caption' => 'A Thing of beauty is joy forever'],     
        		['file'    => 'm5a',             'caption' => 'A joy forever'],  
			['file'    => 'm4a',             'caption' => 'Happy, Happy'],          
			['file'    => 'm7a',             'caption' => 'Life is lovely'],
        		['file'    => 'm8a',             'caption' => 'More more ']     
        		   
        	  ];       
			$selectedImage1 = "images/{$images[0]['file']}.jpg";      
  			$caption1 = $images[0]['caption'];
			$description1 = $images[0]['caption'];
			$selectedImage2 = "images/{$images[1]['file']}.jpg";      
  			$caption2 = $images[1]['caption'];
  			$description2 = $images[1]['caption']; 
			$selectedImage3 = "images/{$images[2]['file']}.jpg";      
  			$caption3 = $images[2]['caption'];
			$description3 = $images[2]['caption'];
			$selectedImage4 = "images/{$images[3]['file']}.jpg";      
  			$caption4 = $images[3]['caption'];
  			$description4 = $images[3]['caption']; 
                        $selectedImage5 = "images/{$images[4]['file']}.jpg";      
  			$caption5 = $images[4]['caption'];
			$description5 = $images[4]['caption'];
			$selectedImage6 = "images/{$images[5]['file']}.jpg";      
  			$caption6 = $images[5]['caption'];
  			$description6 = $images[5]['caption']; 
			$selectedImage7 = "images/{$images[6]['file']}.jpg";      
  			$caption7 = $images[6]['caption'];
			$description7 = $images[6]['caption'];
			$selectedImage8 = "images/{$images[7]['file']}.jpg";      
  			$caption8 = $images[7]['caption'];
  			$description8 = $images[7]['caption']; 

?>
    <section>
        <h2>Pictures</h2>
        <form method="GET" action="mynd.php">
   
        <figure>
        <input type="hidden" name="caption" value="<?= $caption1; ?>" />
        <input type="hidden" name="description" value="<?= $description1; ?>" />
        <input type="hidden" name="image" value="<?= $selectedImage1; ?>" />
        <input type="hidden" name="numer" value="1" />
        	<input type="image" name="submit" src="<?= $selectedImage1; ?>"  alt="Submit" width="100" height="100" />
   			<figcaption><?= $caption1; ?></figcaption>    
      	</figure>
        </form>
	<form method="GET" action="mynd.php">
		<figure>
        <input type="hidden" name="caption" value="<?= $caption2; ?>" />
        <input type="hidden" name="description" value="<?= $description2; ?>" />
        <input type="hidden" name="image" value="<?= $selectedImage2; ?>" />
        <input type="hidden" name="numer" value="2" />
      		<input type="image" name="submit" src="<?= $selectedImage2; ?>" alt="Submit" width="100" height="100" />          
   			<figcaption><?= $caption2; ?></figcaption>    
      	</figure>
      	</form>

	<form method="GET" action="mynd.php">
	<figure>
        <input type="hidden" name="caption" value="<?= $caption3; ?>" />
        <input type="hidden" name="description" value="<?= $description3; ?>" />
        <input type="hidden" name="image" value="<?= $selectedImage3; ?>" />
        <input type="hidden" name="numer" value="3" />
      		<input type="image" name="submit" src="<?= $selectedImage3; ?>" alt="Submit" width="100" height="100" />          
   			<figcaption><?= $caption3; ?></figcaption>    
      	</figure>
      	</form>
	
	<form method="GET" action="mynd.php">
	<figure>
        <input type="hidden" name="caption" value="<?= $caption4; ?>" />
        <input type="hidden" name="description" value="<?= $description4; ?>" />
        <input type="hidden" name="image" value="<?= $selectedImage4; ?>" />
        <input type="hidden" name="numer" value="4" />
      		<input type="image" name="submit" src="<?= $selectedImage4; ?>" alt="Submit" width="100" height="100" />          
   			<figcaption><?= $caption4; ?></figcaption>    
      	</figure>
      	</form>

	<form method="GET" action="mynd.php">
	<figure>
        <input type="hidden" name="caption" value="<?= $caption5; ?>" />
        <input type="hidden" name="description" value="<?= $description5; ?>" />
        <input type="hidden" name="image" value="<?= $selectedImage5; ?>" />
        <input type="hidden" name="numer" value="5" />
      		<input type="image" name="submit" src="<?= $selectedImage5; ?>" alt="Submit" width="100" height="100" />          
   			<figcaption><?= $caption5; ?></figcaption>    
      	</figure>
      	</form>

	<form method="GET" action="mynd.php">
	<figure>
        <input type="hidden" name="caption" value="<?= $caption6; ?>" />
        <input type="hidden" name="description" value="<?= $description6; ?>" />
        <input type="hidden" name="image" value="<?= $selectedImage6; ?>" />
        <input type="hidden" name="numer" value="6" />
      		<input type="image" name="submit" src="<?= $selectedImage6; ?>" alt="Submit" width="100" height="100" />          
   			<figcaption><?= $caption6; ?></figcaption>    
      	</figure>
      	</form>

	<form method="GET" action="mynd.php">
	<figure>
        <input type="hidden" name="caption" value="<?= $caption7; ?>" />
        <input type="hidden" name="description" value="<?= $description7; ?>" />
        <input type="hidden" name="image" value="<?= $selectedImage7; ?>" />
        <input type="hidden" name="numer" value="7" />
      		<input type="image" name="submit" src="<?= $selectedImage7; ?>" alt="Submit" width="100" height="100" />          
   			<figcaption><?= $caption7; ?></figcaption>    
      	</figure>
      	</form>

	<form method="GET" action="mynd.php">
	<figure>
        <input type="hidden" name="caption" value="<?= $caption8; ?>" />
        <input type="hidden" name="description" value="<?= $description8; ?>" />
        <input type="hidden" name="image" value="<?= $selectedImage8; ?>" />
        <input type="hidden" name="numer" value="8" />
      		<input type="image" name="submit" src="<?= $selectedImage8; ?>" alt="Submit" width="100" height="100" />          
   			<figcaption><?= $caption8; ?></figcaption>    
      	</figure>
      	</form>

   </section>
    <section>
        <h2>Recent pictures</h2>
   <?php
    
   if(isset($_COOKIE["photo"])) {
      $value = $_COOKIE["photo"];
      for($i = 0; $i < strlen($value); $i++){
        $j = substr($value,$i,1);
        $j = $j - 1;
        $viewed = "images/{$images[$j]['file']}.jpg";  
        echo "<img src='" . $viewed . "' alt='viewed' style='width:100px;height:100px;'>";
     }
   }
   ?>

   </section>



     <?php include 'footer.php';?>
  </body>
</html>
<?php } catch (Exception $e) {
ob_end_clean();
header('Location: http://localhost/phpsols/error.php');
}
ob_end_flush();
?>

