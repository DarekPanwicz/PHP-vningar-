<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-17
 * Time: 10:49
 */

$alcohols = ['beer', 'wine' ,'whisky', 'vodka'];

//Pop the element off the end of array
echo count($alcohols);
echo end($alcohols);
$adding =  array_pop ( $alcohols );
$chunk= array_chunk($alcohols, 2);




echo $adding;
echo $chunk;
