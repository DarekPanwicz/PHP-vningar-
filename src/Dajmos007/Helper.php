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


    public function findFilesFromHtml(string $getPosters)
    {
        $matches= [];

        preg_match_all( '/href="([0-9]+)\.jpg"/', $getPosters, $matches);

        return $matches;

    }

    public function convertTitlesToUrl(string $filename)
    {

       return str_ireplace([' ', ':'],['-',''],$filename);
    }
}


