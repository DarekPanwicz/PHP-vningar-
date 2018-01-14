<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-14
 * Time: 13:06
 */

require_once 'AbstractProduct.php';
require_once 'Hosting.php';
require_once 'Domain.php';

$hosting = new Hosting();
$domain = new Domain();

var_export($hosting) ;
var_export($domain) ;