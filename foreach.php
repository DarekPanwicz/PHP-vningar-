<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-19
 * Time: 13:18
 */

$liczby = ['jeden', 'dwa', 'trzy'];

$liczby2 = [

    'imie1'=> 'Grazyna',
    'imie2' => 'Nowak',
    'imie3' => 'kobieta'
];


foreach ($liczby2 as $literacja=>$klucz){

    echo "Klucz {$literacja} wynosi {$klucz}" . "<br>";

}
