<?php

class Hunter extends Character
{
    public function rangedAttack($character)
    {
        // Le chasseur enlève 30 de vie
        $character->health -= $this->strenght * 3;
    }
}
