<?php

class Magus extends Character
{
    public function __construct($name)
    {
        // On conserve le comportement du constructeur
        // de la classe mère
        parent::__construct($name);
        $this->mana *= 2;
    }

    public function castSpell($character)
    {
        $character->health -= $this->mana;
    }

    public function attack($character)
    {
        // On supprime la fonction attack
        // pour les mages
        return;
    }
}
