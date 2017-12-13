<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-13
 * Time: 11:37
 */
$zmienna ="MIAUUU...";
$pies = <<<PL

 Wow to rzeczywiscie <strong>dziala: </strong> $zmienna
 no sam nie wiem co wiecej
 moglbym powiedziec ale
 to naprawde dziala

PL;


echo nl2br($pies);

$a =5;
$b = "jakis tekst";
$c = 8;
$d= $a = $b =$c;
echo $d;
echo "<br><br><br><br><br>";

$a = 5;
$b = 10;
$c= $a + $b;
$d =$a - $b;
$e =$a *$b;
$f= $a /$b;
$g= $a % $b;

echo "<pre>";

var_dump($c, $d, $e, $f, $g);

echo "</pre>";
