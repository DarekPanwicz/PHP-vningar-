<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-27
 * Time: 15:59
 */
declare(strict_types=1);

namespace Dajmos007;

class FilesDownloader
{

    //metoda downloadHTML
    public function downloadHtml()
    {
        return $htmlWithPosterLinks = file_get_contents(Config::GET_POSTERS_LINKS);

    }

    //metoda downloadJPG
    public function downloadPictures( string $filename, string $categoryOfProduct): void
    {
        //Getting
        $downloadedPictures= file_get_contents(Config::GET_POSTERS_LINKS . $filename . '.jpg');
       //Saving

        file_put_contents("img/{$categoryOfProduct}/", $downloadedPictures . PHP_EOL, FILE_APPEND);

    }





}