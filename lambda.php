<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-17
 * Time: 13:11
 */
declare(strict_types=1);

$sayHello = function (string $name):string {
    return "Hello, "{$name}!";
};

echo $sayHello('Diana');