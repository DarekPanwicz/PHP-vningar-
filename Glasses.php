<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-20
 * Time: 15:46
 */

class Glasses implements ContactsInterface
{

    public $power;
    public $name;

    //This function have only Glasses

    public function setName(string $name)
    {
        $this->name=$name;
    }

    public function getName(){
        return $this->name;
    }

    public function setPower(int $power){

        $this->power=$power;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }



     public function chooseFrame(string $power, string $name)
     {
        return "Stworzono okulary o mocy $this->power firmy $this->name";
     }
}