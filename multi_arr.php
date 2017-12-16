<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-16
 * Time: 10:41
 */

echo "<pre>";

$big = [
    "small"=> [

        'key'=> "Value",
    ],

];

var_export($big);

echo $big['small']['key']."<br>";
echo "<hr>";
unset($big['small']['key']);
var_export($big);

//unset - usuniecie

echo "<hr>";


$cars = [

    'volvo'=> [

        'xc90','xc60', 'v60',
    ],

    'skoda'=> [

        'felicia' => [

            'hatchback', ' kombi', 'pickup',

        ],
    ],
];
//Szukanie mercedesa w arr cars
// isset - czy cos istnieje
var_export(isset($cars['Mercedes']));













echo "</pre>";