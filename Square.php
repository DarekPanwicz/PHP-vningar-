<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-20
 * Time: 12:36
 */

declare(strict_types=1);

class Square
{
    public $lenght;

   public function setLenght(int $lenght): void
   {
       $this->lenght= $lenght;

   }

    public function getLenght(int $lenght): void
    {
       return $this->lenght= $lenght;

    }



}