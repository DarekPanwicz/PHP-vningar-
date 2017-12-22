<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-22
 * Time: 12:38
 */

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

//Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country.

/*Sample Output :
The capital of Netherlands is Amsterdam
The capital of Greece is Athens
The capital of Germany is Berlin
- - - - - - - - - - - - - - - - - - - - - - - - -
- - - - - - - - - - - - - - - - - - - - - - - - -*/

foreach ($ceu as $country => $city){

    echo "The capital of <b>$country</b>  is <b> $city </b> " . "<hr>";

}