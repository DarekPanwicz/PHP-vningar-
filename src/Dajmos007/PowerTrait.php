<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-21
 * Time: 11:55
 */
namespace Dajmos007;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

trait PowerTrait
{
    protected $powerOn;
    protected $powerOff;

    public function powerOn()
    {
        $this->power= "on";
    }

    public function powerOff()
    {
        $this->power= 'Off';
    }

   public function logger (){
    // Create the logger
$logger = new Logger('my_logger');
// Now add some handlers
$logger->pushHandler(new StreamHandler(__DIR__.'/loggerB.log', Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());

// You can now use your logger
$logger->info('My logger is now ready');

   }
}
