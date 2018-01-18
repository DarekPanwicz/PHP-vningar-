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


    public function askForDiscount(): string
    {

        return $this->name . " Give my FU.. discount!! ";
    }

    public function askForRenew(int $period){

        // miaaauu

    }


    public function askForInvoice(int $invoiceId): Invoice
    {

        $invoice= new invoice();
        $invoice->number=$invoiceId;
        $invoice->date= new DateTime('now');
        $invoice->setCustomer($this);
        return $invoice;

    }

}