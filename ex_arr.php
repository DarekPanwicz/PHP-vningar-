<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-16
 * Time: 09:49
 */

echo "<pre> <h1>";
$exArr1 = [
'klucz'=> 'wartosc',
];

var_export($exArr1);

$exArr2 = [
    "wartosc",
];
var_export($exArr2);

$exArr3= [];
$exArr3['klucz']= 'wartosc';
var_export($exArr3);

$exArr4= [];
$exArr4[] = 'wartosc';
var_export($exArr4);

$exArr5= [];
$exArr5{0} = 'wartosc';
var_export($exArr5);

$exArr6= [];
$exArr6 {'klucz'}= 'wartosc';
var_export($exArr6);





















echo "</pre></h1>";