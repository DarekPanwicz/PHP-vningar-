<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-21
 * Time: 12:09
 */
require_once 'PowerTreit.php';
require_once 'AbstractCar.php';
require_once 'ButtonCar.php';
require_once 'KeyCars.php';

require_once 'ButtonCar.php';
require_once 'AbstractAgdDevices.php';
require_once 'DishWasher.php';
require_once 'Fridge.php';
require_once 'WashingMachine.php'



$buttonCarSetPower= new Dajmos007\ButtonCar();
$buttonCarSetPower->powerOn();

echo "Status samochodu: ";
var_export($buttonCarSetPower).PHP_EOL;

$dishwasher = new Dajmos007\DishWasher();
$dishwasher->powerOff();
echo "Status: Zmywarki: ";
var_export($dishwasher).PHP_EOL;