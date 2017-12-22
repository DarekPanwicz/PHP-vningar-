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


    function __construct($userName)

    {
        $this->userName = $userName;
        $this->password = "miauuuuuu to jest haslo dude";

    }

    public function getPassword ($password)
    {

        if($password !="mmmiau"){

            echo $password, PHP_EOL;

            return $this->password;
    } else {

            echo "Twoje dane nie sa prawidlowe dude";

    }

    }

}


$data = new Access("Darek", "Batman");

echo  $data->getPassword("s ");
