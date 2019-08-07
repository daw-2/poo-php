<?php

/**
 * Cette classe permet de créer un formulaire pour un site web.
 */
class Form
{
    /**
     * Représente les champs de notre formulaire
     */
    private $fields = [];

    /**
     * Définit le label du bouton sur le formulaire.
     */
    private $button;

    public function input($name)
    {
        // On ajoute le champ dans fields
        $this->fields[] = [
            'name' => $name, // Nom du champ
            'tag' => 'input', // Balise html du champ
        ];

        return $this;
    }

    /**
     * Définit le label du bouton sur le formulaire.
     */
    public function button($name)
    {
        $this->button = $name;
    }

    /**
     * __toString permet de définir ce qu'on affiche quand on echo l'objet.
     *
     * Ici, on affiche le formulaire en HTML
     */
    public function __toString()
    {
        // On génére le rendu du formulaire
        $html = '<form method="post">';
        // Parcourir tous les champs et les ajouter dans la variable html
        // $this->fields = ['email', 'prenom', 'nom', 'message'];
        // $this->fields = [['name' => 'email'], 'prenom', 'nom', 'message'];
        foreach ($this->fields as $field) {
            $html .= '<div class="form-group">';
            $html .= '<label>'.$field['name'].'</label>';

            if ($field['tag'] === 'input') { // Si le champ de l'itération actuelle est un input
                $html .= '<input type="text" name="'.$field['name'].'" class="form-control">';
            }
            // 2/ Ajouter à la condition le bon affichage pour les champs dont le tag est textarea

            $html .= '</div>';
        }

        // Afficher le bouton dans le HTML
        $html .= '<button class="btn btn-primary btn-block">'.$this->button.'</button>';

        // Fin de la balise form
        $html .= '</form>';

        return $html;
    }

    public function textarea($name)
    {
        /**
         * 1/ On se base sur la fonction input mais on modifie le tag du champ
         */
    }

    public function select($name)
    {

    }
}