<?php

/**
 * Reprendre le header (de !DOCTYPE jusque <body>) de create.php et l'ajouter dans un fichier partials/header.php
 * Reprendre le footer (de la première balise <script> à </html>) de create.php et l'ajouter dans un fichier partials/footer.php
 * 
 * Dans le fichier list.php, inclure le header et inclure le footer.
 * Entre le header et le footer, on créera un tableau HTML avec Bootstrap.
 * Dans ce tableau, on affichera la liste des super héros présents dans la base de données.
 * 
 * Une fois le fichier list.php terminé, on ajoutera une navbar dans le partials/header.php. La navbar permettra de naviguer entre la page list.php (Les héros) et la page create.php (Créer un héros). Il faudra bien inclure le header et le footer dans create.php
 */

require_once 'partials/header.php';

// Connexion avec PDO
$db = new PDO('mysql:host=localhost;dbname=superheroes', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING // Activer les erreurs MySQL
]);

// Récupèrer les héros
$query = $db->query('SELECT * FROM `superheroe`');
$superHeroes = $query->fetchAll(PDO::FETCH_OBJ);

?>

<div class="container mt-5">
    <div class="card shadow">
        <table class="table mb-0">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Pouvoir</th>
                    <th scope="col">Identité</th>
                    <th scope="col">Univers</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($superHeroes as $superHeroe) { ?>
                    <tr>
                        <td scope="row"><?= $superHeroe->id; ?></td>
                        <td>IMAGE</td>
                        <td><?= $superHeroe->name; ?></td>
                        <td><?= $superHeroe->power; ?></td>
                        <td><?= $superHeroe->identity; ?></td>
                        <td><?= $superHeroe->universe; ?></td>
                        <td>
                            <a href="#" class="btn btn-secondary">Révéler</a>
                            <a href="#" class="btn btn-info">Modifier</a>
                            <a href="#" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once 'partials/footer.php';
