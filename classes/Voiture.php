<?php
class Voiture extends Vehicule
{
    private string $couleur;

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

    public function __destruct()
    {
        echo "<p>My object destroyed</p>";
    }
}
