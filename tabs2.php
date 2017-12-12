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
    $arrTotal2= array_diff($tabelka2, $tabelka1);




echo "<pre>";
echo "<hr>";
echo "<h1>Jakie nazwy wystepuja w obu tabelkach</h1>";
print_r($arrTotal);
echo "<hr>";

echo "<pre>";
echo "<hr>";
echo "<h1>Jakie nazwy <Strong>Nie</Strong> wystepuja w obu tabelkach</h1>";
print_r($arrTotal2);
echo "<hr>";


echo "<pre>";
echo "<hr>";
echo "<h1>Pytanie: Czy w moim koszyku 1 znajduje sie slowo 'pies'</h1>";



if(in_array("kot",$tabelka1)){

    echo "Tak wystepuje te slowo";
} else {

    echo "No niestety nie ma tego w tabelce";
}



print_r($arrTotal3);


echo "<hr>";