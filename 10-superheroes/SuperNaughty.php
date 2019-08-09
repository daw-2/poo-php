<?php

class SuperNaughty
{
	public $name;
    public $hobby;
    public $identity;
    public $universe;

	public function hydrate($data)
    {
    	$this->name = trim($data['name']);
        $this->hobby = trim($data['hobby']);
        $this->identity = trim($data['identity']);
        $this->universe = trim($data['universe']);
    }

    public function save()
    {
		// Ici ma requête SQL...
        // Prépare la requête pour insérer le vilain
        $query = Database::get()->prepare('INSERT INTO `supernaughty` (`name`, `hobby`, `identity`, `universe`) VALUES (:name, :hobby, :identity, :universe)');

        // On associe les données récupérées à la requête
        $query->bindValue(':name', $this->name);
        $query->bindValue(':hobby', $this->hobby);
        $query->bindValue(':identity', $this->identity);
        $query->bindValue(':universe', $this->universe);

        return $query->execute(); // executer la requête préparée
    }

    public function update($id)
    {
        // Ici ma requête SQL...
        // Prépare la requête pour insérer le vilain
        $query = Database::get()->prepare('UPDATE `supernaughty` SET `name` = :name, `hobby` = :hobby, `identity` = :identity, `universe` = :universe WHERE id = :id');

        // On associe les données récupérées à la requête
        $query->bindValue(':name', $this->name);
        $query->bindValue(':hobby', $this->hobby);
        $query->bindValue(':identity', $this->identity);
        $query->bindValue(':universe', $this->universe);
        $query->bindValue(':id', $id);

        return $query->execute(); // executer la requête préparée
    }
}
