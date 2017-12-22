<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-13
 * Time: 13:24
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
$firstName= "Darek";
$lastName = " <b>Panwicz</b>";
$stringToTest = $firstName;


removeLastLetter($stringToTest);
appendLetters($stringToTest, $lastName);

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

    
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL."<br><br>";
    $text .= $letters;
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL."<br><br>";

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
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL."<br><br>";
    $text = substr($text, 0, strlen($text) - 1);
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL."<br><br>";

    return $text;
}