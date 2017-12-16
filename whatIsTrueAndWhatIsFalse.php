<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-11
 * Time: 14:38
 */

$counter =2;
// 0 - false
//String to 0 czyli false

if ($counter ==true){

    echo '<strong> "Ta liczba to true" </strong>';
} else {

    echo "To jest false";
}


echo "<br><br><br><br><br><br>";



$counter =0;
// 0 - false
if ($counter ==true){

    var_export("Pokazuje zawartosc zmiennej,: $counter ") ;
} else {

    var_dump( $counter."Pokazuje zawartosc zmiennej, chyba ale pewny nie jestem :D ");

}