<head>
    <title>A Thing<?php if (isset($title)) {echo "&#8212;{$title}";} ?> </title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/stilsida.css">
    <style>
    .error {color: #FF0000;}
     </style>
</head>
<body>
<?php include 'process.php';?>

<?php
// define variables and set to empty values
$send = true;
$captionErr = $imageErr = $descriptionErr = $showErr = "";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
$caption = $_GET["caption"];
$image = $_GET["image"];
$description = $_GET["description"];
}
$show = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $send = true;
  if (empty($_POST["caption"])) {
    $captionErr = 'You need to fill out Caption';
    $send = false;
  } else {
    $caption = clean($_POST["caption"]);
  }
  if (empty($_POST["image"])) {
    $imageErr = 'You need to fill out Image';
    $send = false;
  } else {
    $image = clean($_POST["image"]);
  }
  if (empty($_POST["description"])) {
    $descriptionErr = 'You need to fill out Description';
    $send = false;
  } else {
    $description = clean($_POST["description"]);
  }
  if (empty($_POST["show"])) {
    $showErr = 'You need to select to show or not';
    $send = false;
  } else {
    $show = clean($_POST["show"]);
  }
}
?>

<h1>Photo</h1>
<p><span class="error">* required field.</span></p>
<form method="POST" action="mynd1.php">

Photo: <?php echo "<input type='text' name='caption' size='35' value='" . $caption . "' />"; ?>
       <span class='error'>* <?php echo $captionErr;?></span>
      <br><br>

Link: <input type='text' name='image' size='35' value=' <?php echo $image;?> ' />
      <span class='error'>* <?php echo $imageErr;?></span>
      <br><br>

Description: <textarea rows='4' cols='50' name='description'> <?php echo $description;?> </textarea>
      <span class='error'>* <?php echo $descriptionErr;?></span>
      <br><br>

Show photo?
  <input type="radio" name="show" value="yes">YES
  <input type="radio" name="show" value="no">NO
  <span class="error">* <?php echo $showErr;?></span>
  <br>
  <br>
  <input type="Submit" value="Submit" />
</form>

</body>