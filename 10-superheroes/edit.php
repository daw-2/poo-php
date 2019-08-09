<?php
require_once 'config/autoload.php';
require_once 'partials/header.php'; ?>
    <div class="container mt-5">
        <?php
            $id = $_GET['id'] ?? null;
            $query = Database::get()->prepare('SELECT * FROM superheroe WHERE id = :id');
            $query->bindValue('id', $id);
            $query->execute();
            $superHeroe = $query->fetch(PDO::FETCH_OBJ);
            var_dump($superHeroe);
        ?>
        <form method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= $superHeroe->name ?>">
            </div>
            <div class="form-group">
                <label for="power">Power</label>
                <input type="text" name="power" id="power" class="form-control" value="<?= $superHeroe->power ?>">
            </div>
            <div class="form-group">
                <label for="name">Identity</label>
                <input type="text" name="identity" id="identity" class="form-control" value="<?= $superHeroe->identity ?>">
            </div>
            <div class="form-group">
                <label for="name">Univers</label>
                <select name="universe" id="universe" class="form-control">
                    <option value="Marvel" <?= ($superHeroe->universe === 'Marvel') ? 'selected' : ''; ?>>Marvel</option>
                    <option value="DC" <?= ($superHeroe->universe === 'DC') ? 'selected' : ''; ?>>DC</option>
                </select>
            </div>

            <button class="btn btn-primary btn-block">Modifier</button>
        </form>
    </div>

<?php require_once 'partials/footer.php'; ?>
