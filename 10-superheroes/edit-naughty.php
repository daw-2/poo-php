<?php
require_once 'config/autoload.php';
require_once 'partials/header.php'; ?>
    <div class="container mt-5">
        <?php
            // On récupère l'id de l'URL
            $id = $_GET['id'] ?? null;
            // On récupère le vilain qui va être modifié
            $query = Database::get()->prepare('SELECT * FROM supernaughty WHERE id = :id');
            $query->bindValue('id', $id);
            $query->execute();
            // Le setFetchMode ici permet de retourner une instance de SuperNaughty avec fetch plutôt qu'une instance de StdClass
            $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, SuperNaughty::class);
            $superNaughty = $query->fetch(); // le fetch fait un new SuperNaughty(); grâce à PDO::FETCH_CLASS
            
            // Traitement du formulaire
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Récupérer les données du formulaire
                // On hydrate une instance de SuperNaughty
                //$superNaughty = new SuperNaughty();
                $superNaughty->hydrate($_POST); // On hydrate l'objet avec les données du formulaire

                // Vérification des données...

                // Si la requête SQL a réussi
                if ($superNaughty->update($id)) {
                    echo '<div class="alert alert-success">Le vilain a été modifié</div>';
                }
            }
        ?>
        <form method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= $superNaughty->name ?>">
            </div>
            <div class="form-group">
                <label for="hobby">Hobby</label>
                <input type="text" name="hobby" id="hobby" class="form-control" value="<?= $superNaughty->hobby ?>">
            </div>
            <div class="form-group">
                <label for="name">Identity</label>
                <input type="text" name="identity" id="identity" class="form-control" value="<?= $superNaughty->identity ?>">
            </div>
            <div class="form-group">
                <label for="name">Univers</label>
                <select name="universe" id="universe" class="form-control">
                    <option value="Marvel" <?= ($superNaughty->universe === 'Marvel') ? 'selected' : ''; ?>>Marvel</option>
                    <option value="DC" <?= ($superNaughty->universe === 'DC') ? 'selected' : ''; ?>>DC</option>
                </select>
            </div>

            <button class="btn btn-primary btn-block">Modifier</button>
        </form>
    </div>

<?php require_once 'partials/footer.php'; ?>
