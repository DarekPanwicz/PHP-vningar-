<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-27
 * Time: 09:32
 */
declare(strict_types=1);

//Getting file from webb
$getPoster = file_get_contents('https://upload.wikimedia.org/wikipedia/en/4/4f/The_Hobbit_-_The_Desolation_of_Smaug_theatrical_poster.jpg');

//Converting string to image and saving picture in poster folder
file_put_contents('posters/img.jpg', $getPoster);

//Getting file list from webb
$getPosters = file_get_contents('https://cytaty.eu/img/sda/posters/');


//Adding new loop for saving 12 files from webb (getposters)
for($i=1; $i<=12;$i++)
{
    //Getting file list from webb
    $getPosters = file_get_contents('https://cytaty.eu/img/sda/posters/'.$i.'.jpg');

    file_put_contents("posters/" .$i . ".jpg", $getPosters);
}