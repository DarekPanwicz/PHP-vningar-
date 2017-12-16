<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-16
 * Time: 12:53
 */

$userRole =0;
//$userRole =1;
//$userRole =2;

if($userRole == 2){

    echo "Admin";

}

if($userRole ==2 and $userRole==1){

    echo "Moderator";
} else {

    echo "user";
}