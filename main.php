<?php


echo "Jak masz na imie: ";
//Funkcja ktora pyta o imput
$imie= fgets(STDIN);
echo "[WCIŚNIJ ENTER, ABY RZUCIĆ KOSTKĄ]";
fgets(STDIN);
echo " " .PHP_EOL;

//Dodanie systemu losowania
$losowanieGracz= rand ( 1, 6);
$losowanieAi= rand ( 1, 6);

echo "Czesc " . $imie . " Wylosowales liczbe:" . " " . $losowanieGracz . PHP_EOL." A najnowszej generacji AI wylosowalo liczbe: " . $losowanieAi .PHP_EOL;

if ($losowanieGracz < $losowanieAi)
{
    echo "Wygrywa komputer". PHP_EOL;;

} else if ($losowanieGracz > $losowanieAi)

{
    echo "Wygrywa Gracz". PHP_EOL;;

} else if($losowanieGracz = $losowanieAi)
{
    echo "Jest remis". PHP_EOL;;
}