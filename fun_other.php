<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-17
 * Time: 11:33
 */

$countries = ['Russia', 'Italy', 'Egypt', 'Norway'];

//Forma zapisu w postacji stringa
//unserialize - odwrotnosc

echo serialize($countries);