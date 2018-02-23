<?php

echo "Jak masz na imie: ";

//Funkcja ktora pyta o imput
$imie= fgets(STDIN);

echo "Wpisz odpowiednia ilosc RUND od 1 do 5: ";
$rundy= fgets(STDIN);

if($rundy >5)
{
    echo "podales za duza liczbe DUDE, liczba nie moze byc wieksza jak 5. Wlacz program ponownie i wpisz odpowiednia liczbe" .PHP_EOL;
    exit();
}
echo "[WCIŚNIJ ENTER, ABY RZUCIĆ KOSTKĄ]";
fgets(STDIN);
echo " " .PHP_EOL;

$losowanieGracz =[];
$losowanieAi= [];


//Dodanie petli ktora pobiera ilosc rund
for ($i=1; $i<=$rundy; $i++)
{
    $losowanieGracz.= rand ( 1, 6);
    $losowanieAi.= rand ( 1, 6);


echo "Czesc " . $imie . " Wylosowales liczbe:" . " " . $losowanieGracz. PHP_EOL." A najnowszej generacji AI wylosowalo liczbe: " . $losowanieAi .PHP_EOL;

if ($losowanieGracz < $losowanieAi)
{
    print_r("Wygrywa komputer". PHP_EOL .PHP_EOL);

} else if ($losowanieGracz> $losowanieAi)

{
    print_r("Wygrywa Gracz". PHP_EOL. PHP_EOL);

} else if($losowanieGracz= $losowanieAi)
{
    print_r("Jest remis". PHP_EOL. PHP_EOL);
}



}
print_r("To jest zawartosc printa gracz: ". $losowanieGracz.PHP_EOL .PHP_EOL);
print_r("To jest zawartosc printa AI: ". $losowanieAi.PHP_EOL .PHP_EOL);

