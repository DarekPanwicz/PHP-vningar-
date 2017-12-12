<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-12
 * Time: 08:34
 */

$tableOne = Array ("hund", "katt", "Häst", "Hippopotam", "Björn");



$tableTwo= Array(

    "Djur"=>"Elg",
    "fisk"=> "Lax",
    "Djur"=> "Elephant",
    "Fågel"=> "En ö",

);

$addText =" Tekst dodany do tabelki XX";






print_r ("<pre>Przed dodaniem nowych elementow ".$tableOne."</pre>") ;

    "<br> <br> <br> ";

print_r ("<pre>Po dodaniu nowych elementow </pre>") ;
$ar1 = array_push($tableOne, $addText);



echo "<pre>";
var_export($arr1);
echo "</pre>";

// unset - usuniecie tablicy, zmiennej itd


//zamiana stringa na tabelke

$string =" hmm no nie wiem § co dzis sobie zjem na § sniadanie";

$zamiana = explode("§",$string);
echo "<pre>"."print_r";
print_r($zamiana);
echo "</pre>";
"<hr><br>";

echo "<pre>"."var dump";
var_dump($zamiana);
echo "</pre>";
"<hr><br>";

echo "<pre>";
echo "echo".$zamiana;
echo "</pre>";
"<hr><br>";

$naString = implode("", $zamiana);

echo "<pre>";
print_r("Print r: ".$naString);
echo "</pre>";
"<hr><br>";



