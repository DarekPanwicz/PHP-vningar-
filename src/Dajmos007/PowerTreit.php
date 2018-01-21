<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-21
 * Time: 11:55
 */
namespace Dajmos007;

trait PowerTreit
{
    protected $powerOn;
    protected $powerOff;

    public function powerOn()
    {
        $this->power= "on";
    }

    public function powerOff()
    {
        $this->power= 'Off';
    }
}
