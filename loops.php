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

    echo "Zawartosc petli foreach " . $arr1 . "<br>";

}
echo "<br><hr><br>";

// for loop
for($i=0; $i<sizeof($months); $i++){

    echo "Zawartosc petli for: " . $months[$i] . "<br>";

}

//reverse nummbers
$monthsReverse = array_reverse($months);

// while loop
$size= sizeof($monthsReverse) -1;
$j = 0;

echo "<br><hr><br>";
echo $size; //Wyswietlenie zawartosci size
echo "<br><hr><br>";

while ($j <= $size){

   echo  "Zawartosc petli while: " . $monthsReverse[$size] . "<br>";

    $size--;
}