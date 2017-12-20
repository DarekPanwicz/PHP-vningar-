<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-20
 * Time: 10:53
 */


$months = ['styczen', 'luty', 'marzec', 'kwiecien', 'maj', 'czerwiec', 'lipiec', 'sierpien', 'wrzesien', 'pazdziernik', 'listopad', 'grudzien'];

//przy pomocy poniższych petli po kolei:
//- foreach
//    - for
//    - while


//Foreach loop

foreach ($months as $arr1) {

    echo "Zawartosc Tab: " . $arr1 . "<br>";

}
echo "<br><hr><br>";

// for loop
for($i=0; $i<sizeof($months); $i++){

    echo "Zawartosc Tab: " . $months[$i] . "<br>";

}


// while loop