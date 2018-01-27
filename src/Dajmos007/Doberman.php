<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-24
 * Time: 11:42
 */

declare(strict_types=1);


namespace Dajmos007;

class Doberman extends Dog implements AnimalsInterface
{
    //Addding ... properties from DogTrait :D
    use DogTrait;

    //Sett name for darek object in main.php
    public function setName(string $name):string
    {

        $this->name= $name;

    }
    //Get name for darek object in main.php
    public function getName():string
    {
        return $this->name;
    }



}