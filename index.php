<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-17
 * Time: 15:15
 */
//declare(strict_type=1);
require_once 'CustomerInterface.php';
require_once 'Invoice.php';
require_once 'Customer.php';
require_once 'ChaoticCustomer.php';
require_once 'GentleCustomer.php';
require_once 'CustomerFactory.php';

//New customer Marian
$customer = new Customer();
$customer->setName('Marian');
echo $customer->getDiscount();
echo $customer->getName();
echo $customer->askForDiscount();

//New Chaotic Customer Rudolf
$rudolf = new ChaoticCustomer();
$rudolf->setName('Rudolf');
echo $rudolf->getDiscount();
echo $rudolf->getName();
echo $rudolf->askForDiscount();

//New gentle Customer
$gentle = new GentleCustomer();
echo $gentle->getDiscount();
var_export($customer);

// Adding statistic methods
GentleCustomer::getClassName();
Customer::getClassName();
ChaoticCustomer::getClassName();

$malpa = CustomerFactory::chooseCustomer("Gentle");
$malpa->askForDiscount();
$Anna = CustomerFactory::chooseCustomer(CustomerFactory::GENTLE, 1933);
echo "To jest Anna ";
var_export( $Anna);

//New object gentleCustomer
$customerGentle= new GentleCustomer(3);
var_export( $customerGentle);
//New object Chaotic Customer
$customerChaotic = new Customer(4);
echo $customerChaotic->age;

//New object, new customerX
$customerX = new Customer(5);
echo $customerX->age;

//New object invoice with name Marian ? This must be wrong Dude !
//$invoice = $marian->askForInvoice(88);
//var_export($invoice);

