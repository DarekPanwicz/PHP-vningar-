<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-13
 * Time: 10:47
 */
declare(strict_types=1);

class GentleCustomer extends Customer implements CustomerInterface
{

    public function __construct(int $age=0)
    {
        $this->status = 'premium';
        parent::__construct($age);
    }

    public function askForDiscount(): void
    {

        echo "Can I ask for discount :D ?";
    }

    public static function askForRenew(int $period){

        echo "miauu1";
    }

    public static function askForInvoice(int $invoiceId)
    {
        echo "Poprosze fakture";

    }

}