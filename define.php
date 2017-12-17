<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-17
 * Time: 10:07
 */


//Wlaczenie wyswietlania bledow

error_reporting(E_ALL);
ini_set('display_errors', true);


const MAX_SLIDERS_NUMBER = 99;
if(!defined(MAX_SLIDERS_NUMBER){

    defined("MAX_SLIDES_NUMBER", 666);
}

define("MAX_SLIDES", 666);
echo "Maxymalna ilosc slajdow: ",MAX_SLIDERS_NUMBER, PHP_EOL;