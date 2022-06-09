<?php
spl_autoload_register(function($className) {
    require './classes/' .$className . '.php';
});

$voiture1 = new Voiture("vert", 1200, "peugeot");
$voiture1->setCouleur("noir");
echo $voiture1->getCouleur();

//var_dump($voiture1);
?>