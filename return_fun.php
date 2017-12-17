<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-17
 * Time: 12:22
 */

declare(strict_types=1);

// Dodanie funkcji ktora dodaje dwie zmienne a  i b

function sum (int $a=0, int $b =0):int
{
    return $a +$b;
}

function diff( int $a=0, int $b=0): int
{
    return $a - $b;
}

function mult( int $a=0, int $b=0): int
{
    return $a * $b;
}

function div( int $a=0, int $b=1): float
{ if($b==0) {

    die("");
}
    return $a / $b;
}



echo sum(5,3),PHP_EOL;
echo diff(5,3),PHP_EOL;
echo mult(4,9),PHP_EOL;
echo div(5,0),PHP_EOL;