<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-17
 * Time: 13:27
 */$names = ['Zenon', 'Yeti', 'X-man'];

 $greeting ='hi';

 $callback = function (string $name)

$hellos = array_map($callback, $names);
var_export($hellos);

//Dokoncz napisanie kodu z PDF