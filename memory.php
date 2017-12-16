<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-16
 * Time: 12:15
 */
$allocatedMemory = memory_get_usage();



if($allocatedMemory / 1024 <640){

   echo "640 KB wystarczy kazdemu";


} elseif ($allocatedMemory / 1024 >640){

  echo "Jesli ilosc pa,mieci jest mniejsza niz 640 KB";
};
