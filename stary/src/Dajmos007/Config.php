<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-27
 * Time: 16:00
 */
declare(strict_types=1);

namespace Dajmos007;

class Config
{
    //Adding code for downloading posters pictures from remote server.
    public const GET_POSTERS_LINKS= "https://cytaty.eu/img/sda/posters/";
    //Adding code for downloading shots pictures from remote server.
    public const GET_SHOTS_LINKS= "https://cytaty.eu/img/sda/shots/";
    //Adding link for save posters in local storage.
    public const SAVE_POSTERS_LINKS="img/posters/";
    //Adding link for save shots in local storage.
    public const SAVE_SHOTS_LINKS="img/shots/";
    //Adding text about titles. This text is called in index.php.
    public const TITLES=

        [
            "Pirates of Carribean Dead Men tell No Tales",
            "Rings",
            "Blade Runner 2049",
            "Thor",
            "Get Out",
            "Star Wars: The Last Jedi",
            "Okja", "London Has Fallen",
            "The Legend of Tarzan",
            'The Founder',
            "Captain America: Civil War",
            "Spectre"
        ];

    //Generating file on local storage.
    public const LOGS = "logs/filmoteka.log";


}