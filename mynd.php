<?php ob_start( ); ?>
<html>
<head>
    <title>A Thing<?php if (isset($title)) {echo "&#8212;{$title}";} ?> </title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/stilsida.css">
</head>
<body>

<?php
// define variables and set to empty values
$send = true;
$captionErr = $imageErr = $descriptionErr = $showErr = "";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $caption = $_GET["caption"];
  $image = $_GET["image"];
  $description = $_GET["description"];
  $send = false;
  $numer = $_GET["numer"];
}
$show = "";
   if(isset($_COOKIE["photo"])){
      $cookie_value = $numer . $_COOKIE["photo"];
      if(strlen($cookie_value)>4){
           $cookie_value = substr($cookie_value,0,4);
      }
   }
   else
   {
     $cookie_value = $numer;
   }
   setcookie("photo", $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<h1>Photo</h1>
<form method="POST" action="index.php">

Photo: <?php echo "<input type='text' name='caption' size='35' value='" . $caption . "' />"; ?>
      <br><br>

Link: <input type='text' name='image' size='35' value=' <?php echo $image;?> ' />
      <br><br>

Description: <textarea rows='4' cols='50' name='description'> <?php echo $description;?> </textarea>
      <br><br>
        <input type="hidden" name="numer" value="<?= $numer; ?>" />
  <br>
  <br>
  <input type="Submit" value="Submit" />
</form>
</body>
</html>
<?php ob_end_flush( ); ?>