<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-16
 * Time: 12:41
 */

$userRole="2";

if ($userRole ===2){

    echo "admin";

} elseif ($userRole ===1){

    echo "moderator";
} else {

    echo "user";
};