<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2017-12-23
 * Time: 09:33
 */

/*8. Write a PHP script to sort the following associative array */
$ar1= array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
/*
 * a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key*/

//ascending order sort by value
asort($ar1);

foreach ($ar1 as $name => $age){

    echo "Age of ". $name . ' is ' . $age . "<br>";

};

echo "<hr><br>";

$ar2= array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

//ascending order sort by Key
ksort($ar2);

foreach ($ar2 as $name => $age){

    echo "Age of ". $name . " is " . $age . "<br>";

};