<?php

/**
 * On veut créer une classe Voiture.
 * Une voiture posséde 4 roues, une couleur, une marque et un modèle. (4 attributs)
 * Une voiture peut rouler et klaxonner. (2 méthodes)
 * On instanciera une voiture.
 */

require_once 'Car.php';

$car = new Car();
$car->brand = 'Renault';
$car->model = 'Megane';

echo $car->drive(); // "La Renault Megane roule sur ses 4 roues."
echo $car->klaxon(); // "La voiture bleue klaxonne."

$car2 = new Car('Alfa Roméo', '147');
$car2->setColor('gris');
var_dump($car2);
