<?php // Nyitó teg.

$lista = array(); // Itt létrehozom az "lista" nevű tömböt.

for ($i = 0; $i < 25; ++$i) // Ciklus 0-tól 24-ig egyesével növelve az "i"-t.
{
    $rnd = rand(50,100); // Random szám generálás [50,100] között, beteszem "rnd" nevű változóba.
    array_push($lista, $rnd); // "rnd"-t beteszem a tömbbe.
}
echo "Lista:<br>";
var_dump($lista); // Szépen formatálva megjeleníti a tömböt. (Bár nekem valaiért csúnyán jelenik meg.)
echo "<br>"; // Sortörés.

$szam = rand(65,85); // Random szám generálás [65,85] között, beteszem "szam" nevű változóba.
echo "Szám:", $szam;
echo "<br>"; // Sortörés.

// Ezen a ponton kész vagyok az előkészületekkel.
// 1. Feladat: ----------------------------------------------------------------------------------------------------------------------------------
$i = 0; // Ciklusváltozó létrehozása 0-ás kezdőértékkel.
$van = false; // Megtalálható-e a "szám" a listában. (Alapból feltételezem hogy nem.)
while($i < 25 && !$van) // Ciklus amíg "i" kisebb mint 25 ÉS amíg "van" értéke hamis.
{                       // (Írhattam volna hogy van == false, a felkiáltójellel tagadtam van értékét.)
    if ($lista[$i] == $szam) // Ha "lista" "i"-edik eleme megegyezik "szam"-mal akkor:
    {
        $van = true; // Van értékét igazra állítom. (Ezzel jelezve hogy megtaláltam amit kerestem.)
    }
    // Itt lehetne else de most minek...
    ++$i; // FONTOS!!! "i" ciklusváltozó értékét növelni kell hogy ne fussak végtelen ciklusba.
}
if ($van) // Ha "van" olyan elem amit kerestem akkor:
{
    echo "Az adott szám megtalálható a tömbben."; // Kiírom hogy megtaláltam.
}
else // Különben:
{
    echo "Az adott szám NEM található meg a tömbben."; // Ha nem akkor kiírom hogy nem.
}
echo "<br>"; // Sortörés.
// 1. Feladat vége. ------------------------------------------------------------------------------------------------------------------------------

// 2. Feladat: -----------------------------------------------------------------------------------------------------------------------------------
if ($van) // Csak akkor fusson le ha benne van ezért, ezért egy nagy if-be megy az egész.
{
    $i = 0; // Ciklusváltozó létrehozása 0-ás kezdőértékkel.
    $index = -1; // Milyen indexen van a "szám" a listában. (Alapból -1 jó hely lesz nekünk.)
    while($i < 25 && $index == -1) // Ciklus amíg "i" kisebb mint 25 ÉS amíg "index" értéke -1.
    {
        if ($lista[$i] == $szam) // Ha "lista" "i"-edik eleme megegyezik "szam"-mal akkor:
        {
            $index = $i; // "index" értékének átadom az "i"-t. (Mert ugye itt találtam meg.)
        }
        // Itt lehetne else de most is minek...
        ++$i; // FONTOS!!! "i" ciklusváltozó értékét növelni kell hogy ne fussak végtelen ciklusba.
    }
    echo "Tömb beli helye:", $index + 1; // Kiírom a helyét ami mindig "index" + 1. (Hely és index nem ugyan az.)
    echo "<br>"; // Sortörés.
}
// 2. Feladat vége. ------------------------------------------------------------------------------------------------------------------------------

// 3. Feladat: -----------------------------------------------------------------------------------------------------------------------------------
$listaA = array(); //
$listaB = array(); // Szükséges tömbök létrehozása.
$listaC = array(); //

for ($i = 0; $i < 25; ++$i) // Ciklus 0-tól 24-ig egyesével növelve az "i"-t.
{
    if ($lista[$i] % 2 == 0) // Ha "lista" "i"-edik elemének 2-vel vett osztási maradéka 0 (Tehát páros), akkor:
    {
        if ($lista[$i] > $szam) // Ha "lista" "i"-edik eleme nagyobb mint "szam" akkor:
        {
            array_push($listaA, $lista[$i]); // "lista" "i"-edik elemét beteszem "ListaA"-ba.
        }
        else if ($lista[$i] < $szam) // Ha "lista" "i"-edik eleme kisebb mint "szam" akkor:
        {
            array_push($listaB, $lista[$i]); // "lista" "i"-edik elemét beteszem "ListaB"-ba.
        }
        // Mivel a feladat nem definiálta hogy mi van egyenlőség esetén ezért olyan esetem nincs.
    }
    else// Különben (Páratlan.):
    {
        array_push($listaC, $lista[$i]); // "lista" "i"-edik elemét beteszem "ListaC"-ba.
    }
}
echo "ListaA:<br>"; // Lista neve sortöréssel.
var_dump($listaA); // Szépen formatálva megjeleníti a tömböt. (Bár nekem valaiért csúnyán jelenik meg.)
echo "<br>"; // Sortörés.

echo "ListaB:<br>"; // Lista neve sortöréssel.
var_dump($listaB); // Szépen formatálva megjeleníti a tömböt. (Bár nekem valaiért csúnyán jelenik meg.)
echo "<br>"; // Sortörés.

echo "ListaC:<br>"; // Lista neve sortöréssel.
var_dump($listaC); // Szépen formatálva megjeleníti a tömböt. (Bár nekem valaiért csúnyán jelenik meg.)
echo "<br>"; // Sortörés.
// 3. Feladat vége. ------------------------------------------------------------------------------------------------------------------------------

?>  <!-- Záró teg. -->
