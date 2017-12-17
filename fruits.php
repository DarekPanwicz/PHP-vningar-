o<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-17
 * Time: 09:15
 */

$fruits = ["Apple", "oragne", "Plum" ];
$box = [];

for ($i =0; $i<2; ++$i){

    foreach ($fruits as $fruit) {
        $boxMax = 2;

        while ($boxMax){

            if ($fruit === 'orange'){
                break 2;
                //continue 2
                //Jeden wychodzi z jednej petli a dwa wychodzi z dwoch petli

            }

            $box[]= $fruit;

            --$boxMax;

            var_export($box);

        }
    }
}