<?php 
session_start();

$enumber=$_SESSION['n'];
$ename=$_SESSION['nm'];
$eadd=$_SESSION['ad'];

$basic=$_POST["w1"];
$da=$_POST["w2"];
$hra=$_POST["w3"];

$total=$basic+$da+$hra;

echo("<br> emp deataislss.....");
echo("<br>".$enumber."<br>".$ename."<br>".$eadd."<br>".$basic."<br>".$da."<br>".$hra."<br>".$total);


?>



