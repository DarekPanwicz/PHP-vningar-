<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-16
 * Time: 12:15
 */


//$allocatedMemory = memory_get_usage();

$allocatedMemory = 100;
$mb= ($allocatedMemory /1024) /1024;


if(($allocatedMemory / 1024) <640){

   echo "640 KB wystarczy kazdemu";


} else {

  echo "Potrzebujesz".$mb."mb";
};
