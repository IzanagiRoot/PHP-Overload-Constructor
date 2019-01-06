<?php
include_once('class.php');
// The real interest is here
$object = new OverClass();

echo "<br/>";

$objet1 = new OverClass("first");

echo "<br/>";

$object2 = new OverClass("second","3.14159265358979323846264338327950...");

echo "<br/>";

//I don't know what i do
$goodToKnow = new OverClass("i know", "i don't know", "i like", "i don't like");
?>