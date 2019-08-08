<!--
    1/ Intégrer une nouvelle page HTML (DOCTYPE...) avec Bootstrap
    2/ Ajouter un formulaire permettant de créer un super héros
       Le formulaire contient les champs : name (input), power (input), identity (input), universe (select)
    3/ Ajouter le traitement du formulaire :
       - Quand le formulaire est soumis, on récupére les données dans $_POST
       - A partir des données, on va créer une instance de SuperHeroe et hydrater celle-ci.
         BONUS: Une méthode hydrate() pourrait hydrater l'objet en partant de $_POST (tableau)
       - Reprendre la requête SQL pour créer un super héros et on l'adapte pour pouvoir ajouter l'instance créée précédement.
-->
<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Super Heroes</title>
  </head>
  <body>
    <div class="container mt-5">
        <?php
            // Traitement du formulaire
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Récupérer les données du formulaire
                // On hydrate une instance de SuperHeroe
                require_once 'SuperHeroe.php';
                $superHeroe = new SuperHeroe();
                $superHeroe->hydrate($_POST); // On hydrate l'objet avec les données du formulaire

                // Vérification des données...

                // Si la requête SQL a réussi
                if ($superHeroe->save()) {
                    echo '<div class="alert alert-success">Le héros a été ajouté</div>';
                }
            }
        ?>

        <form method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="power">Power</label>
                <input type="text" name="power" id="power" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Identity</label>
                <input type="text" name="identity" id="identity" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Univers</label>
                <select name="universe" id="universe" class="form-control">
                    <option value="Marvel">Marvel</option>
                    <option value="DC">DC</option>
                </select>
            </div>

            <button class="btn btn-primary btn-block">Ajouter</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
