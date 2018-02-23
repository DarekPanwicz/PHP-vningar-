<?php
//Rozbuduj aplikację z zadania 1 o określoną ilość rund i tablicę wyników. Niech ilość rund wybierze użytkownik z zakresu
//[1-5]. Niech serię rzutów wygrywa ten gracz, który wygrał większą ilość razy przy pojedynczych rzutach kostką.

echo "Jak masz na imie: ";
//Funkcja ktora pyta o imput
$imie= fgets(STDIN);

echo "Wpisz odpowiednia ilosc RUND od 1 do 5: ";
$rundy= fgets(STDIN);

echo "[WCIŚNIJ ENTER, ABY RZUCIĆ KOSTKĄ]";
fgets(STDIN);
echo " " .PHP_EOL;

$gracz =[];
var_dump($gracz);
$ai= [];
var_dump($ai);
for ($i=0; $i>$rundy; $i++)
{

//Dodanie systemu losowania
$losowanieGracz= rand ( 1, 6);
$gracz= $losowanieGracz;
$losowanieAi= rand ( 1, 6);
$ai= $losowanieAi;
}

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

