<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-24
 * Time: 11:28
 */

use Dajmos007;

require_once "src/Dajmos007/Dog.php";
require_once "src/Dajmos007/Doberman.php";
require_once "src/Dajmos007/Labrador";

$darek = new \dajmos007\Doberman;
$darek->setName("Darek");
echo $darek->getName();