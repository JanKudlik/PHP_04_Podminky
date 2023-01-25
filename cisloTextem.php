<?php
/**
 * cisloTextem
 * Za využití formuláře a vhodné podmínky vytvořte script, který přepíše číselnou hodnotu čísel 0-9 na textové vyjádření.
 * Například pokud uživatel zadá hodnotu 1, skript vypíše "jedna".
 * Ošetřete vstup, kdy uživatel chce zadat jiné číslo než 0-9.
 */


//reseni
if ($_SERVER["REQUEST_METHOD"]=="GET") {
$hodnota =$_GET['hodnota'];
}
if ($hodnota ==0){
    echo "nula";
} elseif ($hodnota==1){
    echo "jedna";
} elseif ($hodnota==2){
    echo "dva";
} elseif ($hodnota==3){
    echo "tři";
} elseif ($hodnota==4){
    echo "čtyři";
} elseif ($hodnota==5){
    echo "pět";
} elseif ($hodnota==6){
    echo "šest";
} elseif ($hodnota==7){
    echo "sedm";
} elseif ($hodnota==8){
    echo "osm";
} elseif ($hodnota==9){
    echo "devět";
} else {
    echo "Číslo není 0-9";
}
echo '<form action="cisloTextem.php" method="get">';
echo 'Číslo: <input type="text" name="hodnota">';
echo '<input type="submit" value="Odeslat">';
echo '</form>';

?>