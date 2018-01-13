<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-10
 * Time: 09:28
 */

//declare(strict_type=1);

//$radek = new Customer(); -- zrobienie nowego obiektu
//$raderk ->setName("Radek")

class Customer
{
    // privatr, public, protected

    protected $name;
    public function getDiscount():int
    {
        return 20;


    }
// setter setName
// getter getName


    public function  setName(string $name): void
{
     $this ->name = $name;
}


    public function getName()
    {
        return $this->name;
    }


    public  function askForDiscount():void
    {

        echo $this->name . "Can I ask for discount ? ";
    }

    public static  function  getClassName(): void
    {

        echo 'Jestem klasa', get_called_class(), PHP_EOL;
        //echo $this->name , PHP_EOL; //Blad nie bedzie dzialac


    }





}