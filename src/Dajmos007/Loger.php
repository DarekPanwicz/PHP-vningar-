<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-27
 * Time: 15:59
 */
declare(strict_types=1);

namespace Dajmos007;

class Loger
{

    //Function that adds logs to system
    public function addTologer($loggerText)

    {
        $time = new \DateTime();
        //Save time, string with object name, in the system log
        file_put_contents(Config::LOGS, $time->format('Y-m-d H:i:s') . $loggerText . PHP_EOL, FILE_APPEND);

    }



}