<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-24
 * Time: 11:28
 */

use Dajmos007;

require __DIR__ . '/vendor/autoload.php';

$darek = new \Dajmos007\Doberman;
$darek->setName("Darek");
echo $darek->getName();



