<?php
//
//ZAD. 1. KOSTKA / WARIANT PROSTY
//Napisz prostą aplikację, która zapyta o imię użytkownika, a następnie wyświetli komunikat:
//[WCIŚNIJ ENTER, ABY RZUCIĆ KOSTKĄ]
//i gdy użytkownik wciśnie ENTER, wyświetli się wylosowana wartość, a po chwili wartość wylosowana dla gracza KOMPUTER.
//Jeśli wartość gracza KOMPUTER jest większa, wygrywa KOMPUTER.
//Jeśli wartość gracza, którym jest użytkownik, jest większa, wygrywa użytkownik.
//W przypadku jednakowych wartości, jest remis.





echo "Jak masz na imie: ";
$imie= fgets(STDIN);
echo "[WCIŚNIJ ENTER, ABY RZUCIĆ KOSTKĄ]";
fgets(STDIN);
echo " " .PHP_EOL;
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