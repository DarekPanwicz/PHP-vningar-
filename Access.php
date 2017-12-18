<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-18
 * Time: 14:27
 */
class Access
{
    public $userName;
    private $password;


    function __construct($userName, $password)

    {
        $this->$userName = $userName;
        $this->$password = $password;

    }

    public function getPassword ()
    {

        if($this->$userName == "Darek" && $this->$password == "Batman"){

            echo "Twoje dane sa prawidlowe: ";
    } else {

            echo "Twoje dane nie sa prawidlowe dude";

    }

    }

}


$data = new Access("Darek", "Batman");


