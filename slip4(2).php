<html>
	<body>
	<form method="post" action="slip4(3).php">
	basic =
	<input type="text" name="w1">
	da =
	<input type="text" name="w2">
	hra =
	<input type="text" name="w3">
	<input type="submit">
	</form>
	</body>
</html>

<?php
session_start();
$_SESSION["n"]=$_POST["t1"];
$_SESSION["nm"]=$_POST["t2"];
$_SESSION["ad"]=$_POST["t3"];

?>