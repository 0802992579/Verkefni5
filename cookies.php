    <?php
if (isset($_COOKIE["visited"])) {
	echo "welcome back";
}
else {
	echo "Hi";
	setcookie("visited", "true", time() + (60 * 60 * 24 * 30));
}
?>