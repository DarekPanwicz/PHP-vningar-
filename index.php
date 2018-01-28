<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-27
 * Time: 15:43
 */

declare(strict_types=1);

namespace Dajmos007;

require __DIR__ . '/vendor/autoload.php';

//Copying all posters pictures from webbsite
$getPosters = file_get_contents(Config::GET_POSTERS_LINKS);

$matches= [];

/// REGEXP - taking pattern from links on the website to calculate number of files to import
preg_match_all( '/href="([0-9]+)\.jpg"/', $getPosters, $matches);

// Initiating new object, part of class Loger
$logger= new Loger();
//Lopp with posters
foreach ($matches[1] as $filename)
{

    //Save START time, string in the system log
    $logger->addTologer( " Rozpoczecie pobierania PLAKATU:" . Config::TITLES[$filename-1]);

    //Getting posters file list from webb
    $getPosters = file_get_contents(Config::GET_POSTERS_LINKS . $filename . '.jpg');
    //Save all Posters Files to img posters
    file_put_contents(Config::SAVE_POSTERS_LINKS . str_ireplace([' ', ':'],['-',''],Config::TITLES[$filename-1]) . ".jpg", $getPosters);

    //Save END time, string in the system log
    $logger->addTologer( " Zakonczenie pobierania PLAKATU:" . Config::TITLES[$filename-1]);
}

//Lopp with shots
foreach ($matches[1] as $filename)
{

    //Save START time, string in the system log
    $logger->addTologer( " Rozpoczecie pobierania SHOTA:" . Config::TITLES[$filename-1]);

    //Getting shots file list from webb
    $getPosters = file_get_contents(Config::GET_SHOTS_LINKS . $filename . '.jpg');
    //Save all Posters Files to img posters
    file_put_contents(Config::SAVE_SHOTS_LINKS . str_ireplace([' ', ':'],['-',''],Config::TITLES[$filename-1]) . ".jpg", $getPosters);

    //Save END time, string in the system log
    $logger->addTologer( " Zakonczenie pobierania SHOTA:" . Config::TITLES[$filename-1]);
}








