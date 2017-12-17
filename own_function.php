<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-17
 * Time: 11:53
 */



// Wyswietlenie z formatowaniem podanego nazwiska
//@param string $familyName nazwisko


declare(strict_types=1);
//Laraver
function printFamilyName(string $familyName, int $birthday = 200): void

{

    echo "Name: $familyName"."born".$birthday, PHP_EOL;
}


printFamilyName("Nowak", 1853);
printFamilyName("Kowalski");

