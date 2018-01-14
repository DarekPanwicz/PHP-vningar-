<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-14
 * Time: 12:49
 */


declare(strict_types=1);
abstract class AbstractProduct
{

 protected $price;
 abstract function changeStatus(string $newStatus);
 abstract function order();
 public function setPrice(int $price)
 {
     $this->price=$price;

 }
 public function getPrice(){

     return $this->price;
 }


}