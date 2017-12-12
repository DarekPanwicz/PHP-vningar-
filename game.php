<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-12
 * Time: 18:32
 */

$tabelka1 = array(

    "Zwierzatko" => "Piesola",
    "Zwierzatko2"=> "tygrysa",
    "Zwierzatko3"=> "Malpe",
    "wygrana" =>"Samochod",
    "Wygrana1" => "Dom",
    "Wygrana2" => "Rower",

);




$losowanie = count($tabelka1);
$maxIlosc= $losowanie -1;

//Nie dokonczony kod trzeba jeszcze zmienic tablice i dodac ceny do kazdego losowania
echo "<pre">;

print_r( "Uwaga <br> W dzisiejszym lodowaniu padla glowna nagroda".$tabelka1[1]."O wartosci".)

echo "</pre">;
