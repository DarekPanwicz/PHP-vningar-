<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-10
 * Time: 15:10
 */

$a= 3;
include 'another.php';
#require 'another.php';

echo $a, PHP_EOL;

$a= 3;
require 'another.php';
#require 'another.php';

echo $a, PHP_EOL;




/**
 * include --> dostalem warning
 * require --> dostajemy fatal error
 *
 * najlepiej stosowac require_once
 *
 *
 */