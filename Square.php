<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-20
 * Time: 12:36
 */

declare(strict_types=1);

class Square extends Rectangle
{



   public function setHeight(int $height): void
   {
       $this->height= $height;
       $this->width= $height;
   }

   public function setWidth(int $width): void
   {
      $this->width= $width;
      $this->height=$width;
   }

}