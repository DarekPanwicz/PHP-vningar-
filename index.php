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
require_once 'GentleCustomer.php';

$customer =new Customer();
$customer->setName('Marian');
echo $customer->getDiscount();
echo $customer->getName();
$customer->askForDiscount();

$rudolf =new ChaoticCustomer();
$rudolf->setName('Rudolf');
echo $rudolf->getDiscount();
echo $rudolf->getName();
$rudolf->askForDiscount();

$gentle = new GentleCustomer();
$gentle->getDiscount();


var_export($customer);

// wywolanie metod statycznych
GentleCustomer::getClassName();
Customer::getClassName();
ChaoticCustomer::getClassName();