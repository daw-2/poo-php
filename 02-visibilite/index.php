<?php

require_once 'Cat.php';

$bianca = new Cat();

// $bianca->name = 'Bianca';
$bianca
    ->setName('Bianca')
    ->setType('Chat de gouttière')
;

// $bianca->setName('Bianca');
// $bianca->setType('Chat de gouttière');

echo $bianca->getName();
