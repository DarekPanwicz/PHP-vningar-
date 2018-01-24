<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-24
 * Time: 11:42
 */

declare(strict_types=1);


namespace Dajmos007;

class Doberman extends Dog
{
    use DogTrait;

    public function setName(string $name):string
    {

        $this->name= $name;

    }

    public function getName():string
    {
        return $this->name;
    }



}