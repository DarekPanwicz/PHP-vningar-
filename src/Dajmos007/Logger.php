<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-27
 * Time: 15:59
 */
declare(strict_types=1);

namespace Dajmos007;

class Logger
{


    public function addTologger($loggerText)

    {
        $time = new \DateTime();
        //We save time, string in the system log
        file_put_contents("logs/filmotekaX.log", $time->format('Y-m-d H:i:s') . $loggerText . PHP_EOL, FILE_APPEND);

    }



}