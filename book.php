<?php
$o=simplexml_load_file("library.xml");
if(!$o)
die("eroorr");
echo("<table border=1>");
echo("<th>NAME");
echo("<th>CODE");
echo("<th>AUTHOR");
echo("<th>PRICE");

foreach($o->book as $v)	
	{
	echo("<tr><td>".$v->name);
	echo("<td>".$v->code);
	echo("<td>".$v->author);
	echo("<td>".$v->price);

	
	}
	

?>