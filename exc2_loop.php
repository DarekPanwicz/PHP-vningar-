<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2017-12-27
 * Time: 10:49
 */
//
//Create a script to construct the following pattern, using nested for loop.
//
//*
//* *
//* * *
//* * * *
//* * * * *




for ($i=0; $i<5; $i++){

  for ($j=0; $j<=$i; $j++){

      echo  "*";
   /*   if($i<$j){

          echo " ";
      }*/
  }
 echo " <br>";
}

