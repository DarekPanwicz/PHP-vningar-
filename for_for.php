<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-19
 * Time: 13:36
 */

for ($i =0; $i<=10; $i++){

    if ($i > 5){

        continue;
    }

    for ($j = 1; $j <=5; $j++){


        echo "Podaj mi liczbe w pierwszej petli " . $i. "<br> Podaj liczbe w drugiej petli " . $j ."<br><br>";
    }

};

