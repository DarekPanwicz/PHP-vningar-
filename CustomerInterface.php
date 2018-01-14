<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-14
 * Time: 13:42
 */
declare(strict_types=1);
interface  CustomerInterface
{

    public static function askForRenew(int $period);
}

class GentleCustomer extends Customer implements CustomerInterface
class CustomerInterface extends Customer implements CustomerInterface