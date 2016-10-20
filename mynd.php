<head>
    <title>A Thing<?php if (isset($title)) {echo "&#8212;{$title}";} ?> </title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/stilsida.css">
</head>
<form method="POST" action="page1.php">
<?php
if($_GET['caption'] != "") {
	$caption = $_GET['caption'];
  echo"<input type='text' name='caption' value='" . $caption . "' /> <br>";
} else {
  echo"<input type='text' name='caption' value='missing' /> <br>";
}
if($_GET['image'] != "") {
	$image = $_GET['image'];
  echo"<input type='text' name='image' value='" . $image . "' /> <br>";
} else {
  echo"<input type='text' name='image' value='missing' /> <br>";
}
if($_GET['description'] != "") {
	$description = $_GET['description'];
  echo"<textarea rows='4' cols='50' name='description'>" . $description . "</textarea> <br>";
} else {
  echo"<textarea rows='4' cols='50' name='description'> missing </textarea> <br>";
}
?>
  <br>show
  <input type="radio" name="birta" value="yes">YES
  <input type="radio" name="birta" value="no">NO<br>
  <br>
  <input type="Submit" value="submit" />
</form>