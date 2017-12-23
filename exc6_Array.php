<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2017-12-23
 * Time: 09:26
 */

/*7. Write a PHP script that inserts a new item in an array in any position.
Expected Output :
Original array :
1 2 3 4 5
After inserting '$' the array is :
1 2 3 $ 4 5*/



$arr1=[1,2,3,4,5];

array_push($arr1, "Här kan jag lägga en liten text");

var_export($arr1[5]) ;