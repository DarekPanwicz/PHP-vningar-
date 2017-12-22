<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-22
 * Time: 09:11
 */

/*AD. 12.
Korzystając z dwóch zagnieżdżonych pętli for napisz tabliczkę mnożenia, która wyświetli mnożenie razy dwa, razy trzy, razy cztery i razy pięć.
Plik zapisz jako two_fors.php.*/

//Adding first loop
for ($i=1; $i<=5; $i ++){

    //Adding second loop
    for ($j=1; $j<=9; $j ++){

        echo "2 * {$i} = " . 2* $j*$i . "<br>";

    }

echo "<br>";
}