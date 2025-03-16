/*slip 6
Write PHP script to read “book.xml” file into simpleXML object. Display attributes and elements(simple_xml_load_file() function )*/

<?php

$xml=simplexml_load_file("slip6.xml");
if(!$xml)
	die("not fount");
foreach($xml->book as $v)
{

echo("<br>attributes display: ".$v['type']);

echo("<br>attributes display : ".$v['name']);

echo("<br> display=".$v->name);
echo("<br> display=".$v->code);
echo("<br> display=".$v->author);
echo("<br> display=".$v->price.'<br>');

}

?>