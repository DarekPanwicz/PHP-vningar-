<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-12
 * Time: 14:29
 */

$tabelka1= array(

    "zwierze1"=>"kot",
    "zwierze2"=>"Pies",
    "zwierze3"=>"malpa",
    "ryba3"=>"Szczupak",
);

$tabelka2 = array(

    "ryba1"=>"Losos",
    "ryba2"=>"Szczupak",
    "ryba3"=> "Pstrag"

);


echo "<pre>";
echo "<hr>";

print_r($tabelka1);
echo "<hr>";


echo "<pre>";
echo "<hr>";

print_r($tabelka2);
echo "<hr>";

$arrTotal = array_intersect($tabelka1, $tabelka2);


echo "<pre>";
echo "<hr>";

print_r($arrTotal);
echo "<hr>";
