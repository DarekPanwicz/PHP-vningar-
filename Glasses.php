<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-20
 * Time: 15:46
 */

class Glasses extends AbstractGlasses implements ContactsInterface
{



     public function chooseFrame(string $power, string $name)
     {
        return "Stworzono okulary o mocy $this->power firmy $this->name";
     }
}