<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-13
 * Time: 14:45
 */

declare(strict_types=1);

class CustomerFactory
{

    public static function chooseCustomer(string $customerType):Customer
    {

        if ($customerType=="Gentle"){

            return new GentleCustomer();
        }
            return new ChaoticCustomer();
        //
    }
}