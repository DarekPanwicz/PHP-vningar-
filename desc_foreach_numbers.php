<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-20
 * Time: 0git   ¨
 * 9:10
 */

//Adding new array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//Reverse array
$reversed = array_reverse($numbers);

//Adding new foreach loop
foreach ($reversed as $arr1){

    echo "Wyswietl liczby: " .  $arr1  . "<br>";

}

//PS: Da sie to zrobic prosciej bez uzycia funkcji array_reverse ?