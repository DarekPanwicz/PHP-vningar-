<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2017-12-23
 * Time: 10:39
 */

/*Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6
List of seven lowest temperatures : 60, 62, 63, 63, 64,
List of seven highest temperatures : 76, 78, 79, 81, 85,*/


$monthTemp = "8, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";

$tempArray= explode(',',$monthTemp);
$totalTemp= 0;
$tempArrayLength =count($tempArray);

foreach ($tempArray as $temp){

    $totalTemp+=$temp;

}

$avgHightTemp = $totalTemp/$tempArrayLength;
echo "Avrage temp is: " . $avgHightTemp;

echo "<br><hr>";


sort($tempArray);

echo " List of seven lowest temperatures :";

for($i=0; $i<7; $i++){

    echo $tempArray[$i];

}

echo "<br><hr>";




echo "List of seven highest temperatures ";

for($i=($tempArrayLength -5); $i<($tempArrayLength); $i++){

    echo $tempArray[$i] . ",";

}







