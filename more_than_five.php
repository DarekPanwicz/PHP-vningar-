<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-20
 * Time: 10:30
 */

//New loop

for($i=1; $i<=10; $i++){
    //New if with continue statement
    if($i<5){
        continue;
    }

            if($i%2 ){

                echo "liczba nieparzysta to: " . "<b>".$i .  "</b><br>";

            } else {

                echo "liczba parzysta to: " . "<b>".$i .  "</b><br>";

            }

}
