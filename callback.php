<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-17
 * Time: 13:15
 */

$names = ['Zenon', 'Yeti', 'X-man'];

$callback = function(string $name): string {
    return "Hello, {$name}!";
};

$hellos = array_map($callback, $names);
var_export($hellos);