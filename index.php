<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-20
 * Time: 12:59
 */
declare(strict_types=1);

require_once "Rectangle.php";
require_once "Square.php";

//Adding new object rectangle
echo "Rectangle Area".PHP_EOL;
$rectangle= new Rectangle();
$rectangle->setHeight(20);
$rectangle->setWidth(10);
echo $rectangle->calcArea().PHP_EOL;

$square = new Square();
echo "Square Area".PHP_EOL;
$square->setHeight(5);
$square->setWidth(4);
echo $square->calcArea().PHP_EOL;

function getArea(Rectangle $rectangle):int
{
    $rectangle->setHeight(2);
    $rectangle->setWidth(4);
    return $rectangle->calcArea();
}

echo getArea($rectangle);
echo getArea($square);

