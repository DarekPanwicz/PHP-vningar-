<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-13
 * Time: 09:52
 */

declare(strict_types=1);

class ChaoticCustomer extends Customer

{

    public function getDiscount(): int
    {
        return 85;
    }


    public  function askForDiscount():void
    {

        echo $this->name . "Give my FU.. discount!! ";
    }

}