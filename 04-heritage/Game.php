<?php

class Game
{
    /**
     * Contient les joueurs de la partie.
     */
    private $players = [];

    /**
     * Permet d'ajouter un joueur à la partie
     */
    public function addPlayer($player)
    {
        array_push($this->players, $player);
        // $this->players[] = $player;

        return $this;
    }
}
