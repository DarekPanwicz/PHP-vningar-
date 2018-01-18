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


    public static function chooseCustomer(string $customerType, int $yearOfBirth=0): Customer
    {


        //Zapis z sprawdzeniem
        $age =$yearOfBirth ? date('Y')- $yearOfBirth:0;  //Co oznacza "?"

        //Prosty zapis bez sprawdzenia to :
       // $age = date('Y') - $yearOfBirth;

        if ($customerType === self::GENTLE) // self slowo kluczowe odwolanie po statycznej wlasciwosci do GENTLE ktore jest wyzej
        {
            return new GentleCustomer($age);

        } elseif ($customerType === self::CHAOTIC) {
            return new ChaoticCustomer($age);
            //
        }
        return new Customer($age);

    }
}