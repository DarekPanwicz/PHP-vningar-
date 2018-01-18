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

    public function askForDiscount(): string
    {

        return "Can I ask for discount :D ?";
    }

    public function askForRenew(int $period){

        echo "miauu1";
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