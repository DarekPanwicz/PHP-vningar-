<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-27
 * Time: 15:43
 */

declare(strict_types=1);

namespace Dajmos007;

//Adding autoload. package downloaded with composer (vendor->composer).
require __DIR__ . '/vendor/autoload.php';

//Copying all posters pictures from webbsite.
$htmlWithPosterLinks = file_get_contents(Config::GET_POSTERS_LINKS);

/// REGEXP - taking pattern from links on the website to calculate number of files to import.
$helper= new Helper();
$matches= $helper->findFilesFromHtml($htmlWithPosterLinks);

// Initiating new object, part of class Loger.
$logger= new Loger();
$downloadedPicture= new FilesDownloader();

//Lopp with posters.
foreach ($matches[1] as $filename)
{
    //Save START time, string in the system log.
    $logger->addTologer( " Rozpoczecie pobierania PLAKATU:" . Config::TITLES[$filename-1]);
    //Getting posters file list from webb.
    $downloadedPicture->downloadPictures($filename, $categoryOfProduct="posters");

    //Save all Posters Files to img posters.
    file_put_contents(Config::SAVE_POSTERS_LINKS
        . $helper->convertTitlesToUrl(Config::TITLES[$filename-1])
        . ".jpg", $downloadedPicture);

    //Save END time, string in the system log.
    $logger->addTologer( " Zakonczenie pobierania PLAKATU:" . Config::TITLES[$filename-1]);
}

//Loop with shots.
foreach ($matches[1] as $filename)
{

    //Save START time, string in the system log.
    $logger->addTologer( " Rozpoczecie pobierania SHOTA:" . Config::TITLES[$filename-1]);
    //Getting shots file list from webb.
    $downloadedPicture->downloadPictures($filename, $categoryOfProduct="shots");
    //Save all Posters Files to img posters.
    file_put_contents(Config::SAVE_SHOTS_LINKS
        . $helper->convertTitlesToUrl(Config::TITLES[$filename-1])
        . ".jpg", $downloadedPicture);

    //Save END time, string in the system log.
    $logger->addTologer( " Zakonczenie pobierania SHOTA:" . Config::TITLES[$filename-1]);
}








