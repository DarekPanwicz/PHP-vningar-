<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-21
 * Time: 09:46
 */

class AbstractGlasses
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


}