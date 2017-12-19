<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-16
 * Time: 10:31
 */

//
//$weekdays = [
//
//    "Monday" => "Poniedzialek",
//    "Tuesday" => "Wtorek",
//    'Wednesday'=> "Sroda",
//    'Thursday' => "Czwartek",
//    'Friday' => "Piatek",
//    'Saturday' =>"Sobota",
//    'Sunday'=> "Niedziela",
//
//];

echo "<pre>";
$weekdays = [
];

$weekdays = [

    "pl"=>[

    "Monday" => "Poniedzialek",
    "Tuesday" => "Wtorek",
    'Wednesday'=> "Sroda",
    'Thursday' => "Czwartek",
    'Friday' => "Piatek",
    'Saturday' =>"Sobota",
    'Sunday'=> "Niedziela",

],"sv" =>[

    "Måndag" => "Poniedzialek",
    "Tisdag" => "Wtorek",
    'Onsdag'=> "Sroda",
    'Torsdag' => "Czwartek",
    'Fredag' => "Piatek",
    'Saturday' =>"Sobota",
    'Söndag'=> "Niedziela",

],


];

var_export($weekdays['pl']);

$checkWeekday = "Monday";

echo "<br>";
// warunek ? prawda, falsz
echo isset($weekdays['pl'][$checkWeekday]) ? "Tlumaczenie istnieje": "Tlumaczenie nie istnieje ";
echo "<br>";
echo isset($weekdays['se'][$checkWeekday]) ? "Tlumaczenie istnieje": "Tlumaczenie nie istnieje ";




echo "</pre>";