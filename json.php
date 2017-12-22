<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-22
 * Time: 09:46
 */

foreach (range(a,z, 1) as $currentNumber){

    $myJSON = json_encode($currentNumber);

    echo "aktualna litera w json: " . $myJSON  . "<br>";



}

echo "<br><hr>";

foreach (range(0,50, 1) as $currentNumber){

    $myJSON = json_encode($currentNumber);

    echo "aktualna liczba w json: " . $myJSON  . "<br>";





}