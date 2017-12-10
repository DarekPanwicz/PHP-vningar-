<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-10
 * Time: 12:11
 */

$a = 4;
$b = 1;
$b += ++$a + 4/2*$a-- ** 2;
echo $a, PHP_EOL, $b, PHP_EOL;