<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-16
 * Time: 13:56
 */

$arr1 =[

    $Alicja =[
        'Geografia'=> 4,
        'Polski'=> 2,
        'Biologia'=> 4,
    ],

    $Bobik =[
        'Geografia'=> 3,
        'Polski'=> 5,
        'Biologia'=> 2,
    ],

    $Darek =[
        'Geografia'=> 5,
        'Polski'=> 3,
        'Biologia'=> 4,
    ],

];



        foreach ($arr1 as $tab=>$x){
            foreach ($x as $value=> $wynik){

                echo "Uczen" . $value . "z przedmiotu {$value} otrzymal ocene {$wynik} <br>"  ;  ;
            }
        };

// DOkoncz zadanie
