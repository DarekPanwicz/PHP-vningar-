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
echo sum(5,3);