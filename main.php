<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-27
 * Time: 09:32
 */
declare(strict_types=1);

//Trzeba doinstalowac sobie yamla
/*$config = yaml_parse_file('config.yml');
var_export($config);*/

//Getting one file from webb
$getPoster = file_get_contents('https://upload.wikimedia.org/wikipedia/en/4/4f/The_Hobbit_-_The_Desolation_of_Smaug_theatrical_poster.jpg');

//Converting string to image and saving picture in poster folder
file_put_contents('posters/img.jpg', $getPoster);

//Getting file list from webb
$getPosters = file_get_contents('https://cytaty.eu/img/sda/posters/');

// Array with movie names
$titles = [
    "Pirates of Carribean",
    "Dead Men tell No Tales",
    "Rings",
    "Blade Runner 2049",
    "Thor",
    "Get Out",
    "Star Wars: The Last Jedi",
    "Okja", "London Has Fallen",
    "The Legend of Tarzan",
    'The Founder',
    "Captain America: Civil War",
    "Spectre"];


$matches= []; ///href="([0-9]+)\.jpg"/ - /znak rozpoczynajacy i konczacy pattern
/// REGEXP - taking pattern from links on the website to calculate number of files to import
preg_match_all( '/href="([0-9]+)\.jpg"/', $getPosters, $matches);


//Adding new loop for saving 12 images files from webb (getposters)
foreach ($matches[1] as $filename)
{
    //This metod taking time
    $time = new DateTime();
    //We save time, string in the system log
    file_put_contents("logs/filmoteka.log", "Nr: $filename" ." ,".$time->format('Y-m-d H:i:s') . " Rozpoczecie pobierania plakatu:" . $titles[$filename-1] . PHP_EOL, FILE_APPEND);

    //Getting file list from webb
    $getPosters = file_get_contents('https://cytaty.eu/img/sda/posters/' . $filename . '.jpg');

    file_put_contents("posters/" . str_ireplace([' ', ':'],['-',''],$titles[$filename-1]) . ".jpg", $getPosters);

    $time = new DateTime();
    file_put_contents("logs/filmoteka.log", "Nr: $filename" ." ,". $time->format('Y-m-d H:i:s') . " Zakonczenie zapisywania plakatu:" . $titles[$filename-1] . PHP_EOL, FILE_APPEND);
}


//Adding new loop for saving 12 shots files from webb (getShots)
foreach ($matches[1] as $filename) {

    $time = new DateTime();
    file_put_contents("logs/filmoteka.log", "Nr: $filename" . " ," . $time->format('Y-m-d H:i:s') . " Rozpoczecie pobierania shota" . $titles[$filename - 1] . PHP_EOL, FILE_APPEND);
    //Getting file list from webb - shots
    $getShots = file_get_contents('https://cytaty.eu/img/sda/shots/' . $filename . '.jpg');

    file_put_contents("shots/" . str_ireplace([' ', ':'], ['-', ''], $titles[$filename - 1]) . ".jpg", $getShots);

    $time = new DateTime();
    file_put_contents("logs/filmoteka.log", "Nr: $filename" . " ," . $time->format('Y-m-d H:i:s') . " Zakonczenie zapisywania shota:" . $titles[$filename - 1] . PHP_EOL, FILE_APPEND);

}
