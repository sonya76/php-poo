<?php

class Voiture {
    public $couleur;
    public $masse;
    public $marque;
    public $vitesse=0;

    public function afficherMessage()
    {
        echo "je roule";
    }

    public function afficheVitesse(): float
    {
       return $energieCinetique = 0.5 * $this->masse * ($this->vitesse ** 2);
      
    }

}

$voiture1 = new Voiture();
$voiture1 ->couleur="rouge";
$voiture1 ->masse=1200;
$voiture1 ->vitesse=30;

echo "<br />";
$voiture1 ->masse=1190;
echo "<br />";

echo $voiture1->afficheVitesse();
$voiture2 = new Voiture();
$voiture2 ->couleur="bleu";

?>