<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-10
 * Time: 14:55
 */
$var= 5; 5.5; null; false; true; 'php'; '4php';
$cast= (float) $var;
var_dump($var, $cast);