<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-21
 * Time: 13:57
 */
namespace Dajmos007;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require __DIR__ . '/vendor/autoload.php';


$log = new Logger('name');
$log->pushHandler(new StreamHandler('logix.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');


