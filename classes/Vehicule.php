<?php
// abstract on ne peut pas instancier la class Vehicule donc si je fais
// new Vehicule il refusera je suis donc oubliger d'utiliser l'héritage
abstract class Vehicule
{
    public const TVA = 20;

    protected int $masse;
    protected float $vitesse = 0;
    protected int $capacite;
    protected string $marque;

    public function afficherEnergieCinetique(): float
    {
        return  0.5 * $this->masse * ($this->vitesse ** 2);
    }
    //exemple de Casis demontration d'une function static dans une classe abstraite
    public static function test()
    {
        echo "Test";
    }
}
