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

  const GENTLE = 'gentle';  //zamiana stringa na stala
  const CHAOTIC = 'chaotic';


    public static function chooseCustomer(string $customerType):Customer
    {

        if ($customerType=== self::GENTLE) // self slowo kluczowe odwolanie po statycznej wlasciwosci do GENTLE ktore jest wyzej
        {

            return new GentleCustomer();
        } elseif ($customerType=== self::GENTLE){
            return new ChaoticCustomer();
        //
        } return new Customer();

    }
}