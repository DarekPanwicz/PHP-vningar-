<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-10
 * Time: 14:35
 */

$firstName = "Darek";
$secondName = &$firstName;
$secondName = 'Batman';
echo "My first name is {$firstName}.", PHP_EOL;
echo "My second name is {$secondName}.",PHP_EOL;