<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-17
 * Time: 15:15
 */
//declare(strict_type=1);

require_once 'Customer.php';

$customer =new Customer();
$customer->setName('Marian');
echo $customer->getDiscount();

var_export($customer);