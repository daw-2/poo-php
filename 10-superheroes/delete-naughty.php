<?php

require_once 'config/autoload.php';

// Récupérer l'id du vilain à supprimer
$id = $_GET['id'] ?? null;

// On supprimer le vilain
$query = Database::get()->prepare('DELETE FROM supernaughty WHERE id = :id');
$query->bindValue('id', $id);
$query->execute();

// Redirection vers la liste
header('Location: list-naughty.php');
exit;
