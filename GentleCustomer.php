<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-13
 * Time: 10:47
 */
declare(strict_types=1);

class GentleCustomer extends Customer
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


}