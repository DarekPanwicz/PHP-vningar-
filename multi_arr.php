<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-16
 * Time: 10:41
 */

echo "<pre>";

$big = [
    "small"=> [

        'key'=> "Value",
    ],


];

var_export($big);

echo $big['small']['key']."<br>";
echo "<hr>";
unset($big['small']['key']);
var_export($big);

//unset - usuniecie






echo "</pre>";