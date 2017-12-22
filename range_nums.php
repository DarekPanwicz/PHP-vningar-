<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-22
 * Time: 09:26
 */

/*ZAD. 13.
Stwórz tablicę przy pomocy funkcji range(0, 50):
Przy pomocy pętli foreach przeiteruj się przez każdy element i wyświetl na output.
Skrypt zapisz jako range_nums.php.*/


//loop with range function :D

foreach (range(0,50, 1) as $currentNumber){

    echo "aktualna liczba: " . $currentNumber . "<br>";

}