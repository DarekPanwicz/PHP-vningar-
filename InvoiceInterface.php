<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-14
 * Time: 15:09
 */


declare(strict_types=1);
interface   InvoiceInterface
{

    public static function askForRenew(int $period);

    public function askForInvoice(int $invoiceId);
}