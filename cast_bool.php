<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-10
 * Time: 14:58
 */

$var= 5;
$cast= (bool) $var;
var_dump($var, $cast);

var=  5.5;
$cast= (bool) $var;
var_dump($var, $cast);

var=  null;
$cast= (bool) $var;
var_dump($var, $cast);

var= false;
$cast= (bool) $var;
var_dump($var, $cast);

var=  true;
$cast= (bool) $var;
var_dump($var, $cast);

var= 'php';
$cast= (bool) $var;
var_dump($var, $cast);

var= '4php';
$cast= (string) $var;
var_dump($var, $cast);