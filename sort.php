<?php
/**
 * Created by PhpStorm.
 * User: dajmos
 * Date: 2017-12-13
 * Time: 10:53
 */

// PRAKTYCZNE ZASTOSOWANIE TABLIC


// Tablica jednowymiarowa
$MyBasket1 = Array("Telewizor", "Książka kucharska", "Słuchawki", "Stół kuchenny", "Kawa inka");


echo "<pre>Tablica \$MyBasket1:\n";
print_r($MyBasket1);
echo "</pre><hr />";


echo "<pre>Tablica \$MyBasket1 posortowana [ A-Z ]:\n";
asort($MyBasket1);
print_r($MyBasket1);
echo "</pre>";

echo "<pre>Tablica \$MyBasket1 posortowana [ Z-A ]:\n";
arsort($MyBasket1);
print_r($MyBasket1);
echo "</pre>";


?>
