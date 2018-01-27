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

