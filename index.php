<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-17
 * Time: 15:15
 */
//declare(strict_type=1);

require_once 'Customer.php';
require_once 'ChaoticCustomer.php';

$customer =new Customer();
$customer->setName('Marian');
echo $customer->getDiscount();
echo $customer->getName();
echo $customer->askForDiscount();

$rudolf =new ChaoticCustomer();
$rudolf->setName('Rudolf');
echo $rudolf->getDiscount();
echo $rudolf->getName();
echo $rudolf->askForDiscount();

var_export($customer);