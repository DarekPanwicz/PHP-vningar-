<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-20
 * Time: 12:35
 */

declare(strict_types=1);

class Rectangle
{

    protected $height;
    protected $width;
    protected $calcArea;

    /**
     * @param mixed $height
     */
    public function setHeight(int $height):void
    {
        $this->height = $height;
    }
    /**
     * @return mixed
     */
    public function getHeight():int
    {
        return $this->height;
    }

    /**
     * @param mixed $width
     */
    public function setWidth(int $width):void
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getWidth():int
    {
        return $this->width;
    }

    public function calcArea():int
{
        return $this->width*$this->height;
}

}