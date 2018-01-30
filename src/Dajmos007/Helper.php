<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-27
 * Time: 15:59
 */
declare(strict_types=1);

namespace Dajmos007;

class Helper
{


    public function findFilesFromHtml(string $htmlWithPosterLinks)
    {
        $matches= [];
        /// REGEXP - taking pattern from links on the website to calculate number of files to import.
        preg_match_all( '/href="([0-9]+)\.jpg"/', $htmlWithPosterLinks, $matches);

        return $matches;

    }

    public function convertTitlesToUrl(string $filename)
    {

       return str_ireplace([' ', ':'],['-',''],$filename);
    }
}


