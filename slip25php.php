<?php
	$doc=new DOMDocument();
        $cricketTeam=$doc->createElement("cricketTeam");

	$team=$doc->createElement("team");
	$team->setAttribute("country","australia");

	$player1=$doc->createElement("player","divya");
	$team->appendChild($player1);

	$runs1=$doc->createElement("runs","500");
	$team->appendChild($runs1);

	$wicket1=$doc->createElement("wicket","00");
	$team->appendChild($wicket1);
$cricketTeam->appendChild($team);	

	$team2=$doc->createElement("team");
	$team2->setAttribute("country","india");

	$player2=$doc->createElement("player","divyajiii");
	$team2->appendChild($player2);

	$runs2=$doc->createElement("runs","5000");
	$team2->appendChild($runs2);

	$wicket2=$doc->createElement("wicket","400");
	$team2->appendChild($wicket2);
$cricketTeam->appendChild($team2);

$doc->appendChild($cricketTeam);

$doc->save("slip25.xml");

echo("elements added sucessfully");

?>