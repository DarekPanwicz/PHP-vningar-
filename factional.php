<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-17
 * Time: 12:53
 */


declare(strict_types=1);

// silnia n!=n* (n-1)!
//5! = 4 x 5 (Minus jeden)

function factorial(int $n):int

{
    if ($n===1){

        return 1;
    }
    return $n *($n-1);
}

echo factorial(456);