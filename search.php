<html>
<body>
<form method="post" action="search.php">
enter the name
<input type="text" name="t1">
<input type="button" value="search">
</form>
</body>
</html>

<?php
$p=$_POST["t1"];
$f=0;
$xml=simplexml_load_file("library.xml");
if(!$xml)
die("not found");
	foreach($xml->book as $v)
	{ 	
	
	if($v->name==$p)
		{
		echo(" NM=".$v->name);
		echo("<br>CODE=".$v->code);	
		echo("AU=".$v->author);
		echo("PR=".$v->price);
		$f=1;
		}
	}

	if($f==0)
	echo"not fooount";
?>