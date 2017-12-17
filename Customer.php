<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-10
 * Time: 09:28
 */

//declare(strict_type=1);

class Customer
{
    // privatr, public, protected

    private $name;
    public function getDiscount():int

{
    return 20;
}

// setter setName
// getter getName


    public function  setName(string $name): void
{
     $this->name;
}


    public function getName():string
    {
        return $this->name;
    }





}