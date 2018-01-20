<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-20
 * Time: 12:36
 */

declare(strict_types=1);

class Square implements AreaCalculableInterface
{
    public $lenght;

   public function setLenght(int $lenght): void
   {
       $this->lenght= $lenght;

   }

    public function getLenght(): int
    {
       return $this->lenght;

    }
    public function calcArea():int
    {
        return $this->lenght*$this->lenght;
    }


}