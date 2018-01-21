<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-21
 * Time: 13:57
 */

require __DIR__ . '/vendor/autoload.php';

$buttonCarSetPower= new Dajmos007\ButtonCar();
$buttonCarSetPower->powerOn();

echo "Status samochodu: ";
var_export($buttonCarSetPower).PHP_EOL;