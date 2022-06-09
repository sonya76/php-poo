<?php
require_once './classes/Voiture.php';


$voiture1 = new Voiture();
$voiture1 ->couleur="rouge";
$voiture1 ->masse= 1200;
$voiture1 ->vitesse= 30;

echo "<br />";
$voiture1 ->masse=1190;
echo "<br />";

echo $voiture1->afficheVitesse();
$voiture2 = new Voiture();
$voiture2 ->couleur="bleu";

?>