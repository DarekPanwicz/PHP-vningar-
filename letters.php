<?php


/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-14
 * Time: 09:06
 */



/**
 * Skrypt zawiera kilka ćwiczeniowych funkcji operujących na stringach.
 *
 * Przykład użycia:
 * 1. Zdefiniuj zmienną $stringToTest na ciąg znaków, który chcesz przetestować.
 * 2. Wywołuj kolejne funkcje zgodnie z ich dokumentacją.
 * 3. Uruchom skrypt w konsoli: php -f letters.php
 */




declare(strict_types=1);


$stringToTest = 'Darek';
//$stringToTest = 'rabbit';
//$stringToTest = 'karaś';
//$stringToTest = 'ślimak';
//$stringToTest = '';
//$stringToTest = 'łódź';


echo "<pre>";
removeLastLetter($stringToTest)."<br>";

echo "<br><hr><br>";
appendLetters($stringToTest, ' <b>Panwicz</b>'."<br>");
echo "<br><hr><br>";


insertLetters($stringToTest, ' <b>Batman</b> ');
echo "<br><hr><br>";
removeFirstLetter($stringToTest)."<br>";



echo "<br><hr><br>";
reverseText($stringToTest)."<br>";


echo "<br><hr><br>";
textUpperCase($stringToTest)."<br>";


echo "<br><hr><br>";
textLowerCase($stringToTest)."<br>";

echo "<br><hr><br>";
dotsInjection($stringToTest);

echo "</pre>";



/**
 * Dodanie do tekstu na końcu ciągu znaków.
 *
 * @param string $text Tekst, do którego dodajemy ciąg znaków.
 * @param string $letters Ciąg znaków do dodania.
 *
 * @return string Tekst z dodanymi literami.
 */
function appendLetters(string $text, string $letters): string
{
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text .= $letters;
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;

    return $text;
}

/**
 * Usunięcie ostatniej litery z podanego ciągu znaków.
 *
 * @param string $text Tekst, z którego usuniemy ostatnią literę.
 *
 * @return string Tekst bez ostatniej litery.
 */
function removeLastLetter(string $text): string
{
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text = substr($text, 0, strlen($text) - 1);
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;

    return $text;
}



//Funkcja insertLetters

function insertLetters(string $text, string $letters): string
{
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text = $letters.$text;
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;

    return $text;
}


//Funkcja removeFirstLetter

function removeFirstLetter(string $text): string
{
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    // $text = substr($text, 0, strlen($text) - 1);
    $text = substr($text, 1);
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;

    return $text;
}


//Funkcja reverse text

function reverseText(string $text): string
{
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text = strrev($text);
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;

    return $text;
}




//Funkcja text upper case

function textUpperCase(string $big): string
{
    echo "Before ", __FUNCTION__, ": ", $big, PHP_EOL;
    $big = strtoupper($big);
    echo "After ", __FUNCTION__, ": ", $big, PHP_EOL;

    return $big;
}


//Funkcja text lower case

function textLowerCase(string $small): string
{
    echo "Before ", __FUNCTION__, ": ", $small, PHP_EOL;
    $small = strtolower($small);
    echo "After ", __FUNCTION__, ": ", $small, PHP_EOL;

    return $small;

}

//Funkcja dotsInjection
//Normalnie 2 h to pisalem :D

function dotsInjection(string $injection): string {

    echo "Before ", dotsInjection, ": ",$injection, PHP_EOL;

    $arr1 =str_split($injection);


    $suma="";

    For($i=0; $i<sizeof($arr1); $i++){

        $suma .= ($arr1[$i].".") ;

    }


    echo "After ", __FUNCTION__, ": ", $suma, PHP_EOL;


    return $injection;


}

