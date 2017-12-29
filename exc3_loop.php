<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2017-12-29
 * Time: 10:55
 */

/*4. Create a script to construct the following pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
**/

$number=4;

//First loop

for ($i=0; $i<=$number; $i ++){


   for ($j=0; $j<=$i; $j ++) {

       echo "*" ;


   }

   echo "<br>";


};

//second loop

for ($i=1; $i>=$number; $i --){


    for ($j=1; $j<=$i; $j++) {

        echo "*" ;


    }

    echo "<br>";


};