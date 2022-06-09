<?php
class Voiture {
    public string $couleur;
    public int $masse;
    public string $marque;
    public float $vitesse=0;

    public function afficherMessage()
    {
        echo "je roule";
    }

    public function afficheVitesse(): float
    {
       return $energieCinetique = 0.5 * $this->masse * ($this->vitesse ** 2);
      
    }

}