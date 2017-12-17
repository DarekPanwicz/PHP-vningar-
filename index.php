<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-17
 * Time: 15:15
 */
declare(stric_type=1);

require_once 'Customer.php';

$customer =new Customer();
$customer->name = 'Marian';

var_export($customer);