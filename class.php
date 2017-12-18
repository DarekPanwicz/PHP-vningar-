<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-18
 * Time: 12:10
 */

//New class name
class Imie
{
//New constructor
    public function __construct($name)
    {
        echo "Dzis na imie mam: " . $name . "<br>";
    }


}

$imie1= new Imie("Darek");
$imie2= new Imie("Batman");
$imie3= new Imie("Kasia");


