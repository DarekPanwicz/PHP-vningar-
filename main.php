<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-24
 * Time: 11:28
 */

require_once "Dog.php";
require_once "Doberman.php";
require_once "Labrador";

$darek = new \dajmos007\Doberman;
$darek->setName("Darek");
echo $darek->getName();