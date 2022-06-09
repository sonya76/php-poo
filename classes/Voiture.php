<?php
class Voiture
{
    private string $couleur;
    private int $masse;
    private string $marque;
    private float $vitesse = 0;

    //fonction magic
    public function __construct(string $color, int $mass, string $brand)
    {
        $this->couleur = $color;
        $this->masse = $mass;
        $this->marque = $brand;
    }


    //assesseur getter
    public function getCouleur(): String
    {
        return $this->couleur;
    }
    //mutateur setter
    public function setCouleur(string $color): void
    {
        $this->couleur = $color;
    }

    public function afficherMessage()
    {
        echo "je roule";
    }

    public function afficheVitesse(): float
    {
        return $energieCinetique = 0.5 * $this->masse * ($this->vitesse ** 2);
    }
    public function __destruct()
    {
        echo "<p>My object destroyed</p>";
    }
}
