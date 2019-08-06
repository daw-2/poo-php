<?php

class Cat
{
    private $name;
    private $type;
    private $fur;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (strlen($name) < 3) {
            throw new Exception('Le nom est trop court');
        }

        $this->name = $name;

        // retourner l'objet permet de chainer les appels de méthodes
        return $this;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
