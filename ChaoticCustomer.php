<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-13
 * Time: 09:52
 */

declare(strict_types=1);

class ChaoticCustomer extends Customer implements CustomerInterface

{

    public function getDiscount(): int
    {
        return 85;
    }


    public function askForDiscount(): void
    {

        echo $this->name . " Give my FU.. discount!! ";
    }

    public static function askForRenew(int $period){

        // miaaauu
        echo " miauuu CAT";
    }

    public static function askForInvoice(int $invoiceId)
    {
        echo "Daj fakture!";

    }

}