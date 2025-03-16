/* 
SLIP 7
Write a PHP script to read “Movie.xml” file and print all MovieTitle and ActorName of file using 
DOMDocument Parser. “Movie.xml” file should contain following information with at least 5 records 
with values. MovieInfoMovieNo, MovieTitle, ActorName ,ReleaseYear
*/<br><br>


<?php
$xml=new DOMDocument();
$xml->load("slip7.xml");

if(!$xml)
	die("not found");

$value=$xml->getElementsByTagName('movie');
foreach($value as $v)
{
echo("movie title=".$v->getElementsByTagName('title')[0]->textContent.'<br>');
echo("actor name =".$v->getElementsByTagName('name')[0]->textContent.'<br>');
}






?>