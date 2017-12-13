<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-13
 * Time: 16:03
 */

$pies="Reks";
$glodny =true;



function jedzenie($glodny){

    if($glodny === true){

        return true;


    } else if($glodny === false){

        return false;

    };


};


$wynik = jedzenie($glodny);

 if ($wynik ===true){

     echo "<bre>";
     echo "Daj jedzonko dla psa";
     echo "</bre>";

 } else if ($glodny===false){

     echo "<bre>";
     echo "Piesol juz jest najedzony";
     echo "</bre>";

 }



