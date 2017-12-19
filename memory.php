<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-16
 * Time: 12:15
 */


//$allocatedMemory = memory_get_usage();

$allocatedMemory = memory_get_usage();

echo "<br><pre>";

echo $allocatedMemory;
echo "<pre>";

$mb= ($allocatedMemory /1024) /1024;


if($mb < 640)
{

   echo "640 KB wystarczy kazdemu";


} else {

  echo "Potrzebujesz".$mb."mb";
};
echo "<br><pre>";


echo $mb;
echo "<pre>";