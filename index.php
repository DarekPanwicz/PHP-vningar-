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
require_once 'CustomerFactory.php';


$customer = new Customer();
$customer->setName('Marian');
echo $customer->getDiscount();
echo $customer->getName();
$customer->askForDiscount();

$rudolf = new ChaoticCustomer();
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

$malpa = CustomerFactory::chooseCustomer("Gentle");
$malpa->askForDiscount();
$Anna = CustomerFactory::chooseCustomer(CustomerFactory::GENTLE); // Sprawdz

$customerGentle= new GentleCustomer(3);
var_export( $customerGentle);

$customerChaotic = new Customer(4);
echo $customerChaotic->age;

$customerX = new Customer(5);
echo $customerX->age;

