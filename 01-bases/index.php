<?php

class Cat
{
    var $name;
    var $type;
    var $fur;

    function cry()
    {
        return 'Miaou !';
    }

    function eat()
    {
        return $this->name . ' mange';
    }
}

// Bianca et Mina sont deux instances différentes de la classe
// Cat
$bianca = new Cat();
$mina = new Cat();

// On peut affecter des valeurs aux propriétés
$bianca->name = 'Bianca';
$bianca->type = 'Chat de gouttière';
$bianca->fur = 'blanc';

// On peut afficher la valeur d'une propriété
echo 'Mon chat s\'appelle ' . $bianca->name . ' et il fait ' . $bianca->cry();
echo '<br>';

$mina->name = 'Mina';

echo $mina->name . ' peut aussi faire ' . $mina->cry();
echo '<br>';

var_dump($bianca);
var_dump($mina);
echo '<br>';

echo $bianca->eat();
echo '<br>';
echo $mina->eat();
