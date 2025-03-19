<html>
	<body>
	<form method="post" action="slip24.php">
	enter the course name :
	<input type="text" name="t1">
	<input type="submit">
	</form>
	</body>
</html>

<?php
$s=$_POST["t1"];
$xml=simplexml_load_file("slip24.xml");
if(!$xml)
	echo("file not found.....");

foreach($xml->student as $v)
{
	if($v->course==$s)
		{
		echo("<table border=1>");
		echo("<tr><th>name<th>college<th>course</tr>");
		echo("<tr><td>".$v->name);
		echo("<td>".$v->college);
		echo("<td>".$v->course);
		}
}

?>

