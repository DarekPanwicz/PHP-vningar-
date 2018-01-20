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
$rectange= new Rectangle();
$rectange->setHeight(20);
$rectange->setWidth(10);
echo $rectange->calcArea().PHP_EOL;

$square = new Square();
echo "Square Area".PHP_EOL;
$square->setHeight(5);
$square->setWidth(4);
echo $square->calcArea().PHP_EOL;

