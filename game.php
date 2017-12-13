<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-12
 * Time: 18:32
 */

$tabelka = array(

    array(
        "name"=>"Telewizor",
        "desc" => "Opis telewizora..",
        "vendor" => "Philips",
        "cat" => "AGD/RTV",
        "price" => 675.45
    ),

    array(
        "name"=>"Konsola",
        "desc" => "Opis konsoli..",
        "vendor" => "Microsoft",
        "cat" => "AGD/RTV",
        "price" => 1742.4
    ),

    array(
        "name"=>"Meble",
        "desc" => "Opis mebli..",
        "vendor" => "Red § White",
        "cat" => "Dom",
        "price" => 4563
    ),

    array(
        "name"=>"Ekspress do kawy",
        "desc" => "Opis ekspresu..",
        "vendor" => "Delonga",
        "cat" => "AGD/RTV",
        "price" => 3475
    )
);

$licznik = count($tabelka);



echo "UWAGA! UWAGA! <br>"."W dzisiejszym losiowaniu padla glowna nagroda XXX o wartosci XXX PLN <br>
sponsorowana przez XXX ! <br> Wszystkim serdecznie gratulujemy";


echo "<pre> <h1>";

print_r($licznik);

echo " </h1> </pre> ";