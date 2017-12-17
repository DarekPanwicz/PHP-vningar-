<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-10
 * Time: 09:28
 */


// mb zmiana kodowania przy funkcjach


$strings =['Navicat', 'Category','Catharsis'];

foreach ($strings as $nazwa){

    echo mb_strpos($nazwa, "cat");
    echo mb_strlen ( $nazwa);
    echo mb_str_replace("cat", "dog", "zmieniona wartosc");


};

