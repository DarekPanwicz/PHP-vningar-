<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-21
 * Time: 15:28
 */

require __DIR__ . '/vendor/autoload.php';




// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('/logix.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');


$buttonCarSetPower= new Dajmos007\ButtonCar();
$buttonCarSetPower->powerOn();

echo "Status samochodu: ";
var_export($buttonCarSetPower).PHP_EOL;