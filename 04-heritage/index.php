
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>POO : Héritage</title>
</head>
<body>
    <?php
        // 1/ Créer la classe Game, Warrior, Hunter et Magus
        // 2/ On inclue chaque classe dans ce fichier
        require_once 'Character.php';
        require_once 'Game.php';
        require_once 'Warrior.php';
        require_once 'Hunter.php';
        require_once 'Magus.php';
        // 3/ On crée la méthode addPlayer dans Game qui retourne l'instance d'une Game

        // On peut créer une partie
        $game = new Game();

        // On crée les personnages
        $aragorn = new Warrior('Aragorn');
        $legolas = new Hunter('Legolas');
        $gandalf = new Magus('Gandalf');

        // On ajoute des personnages dans le jeu
        $game
            ->addPlayer($aragorn)
            ->addPlayer($legolas)
            ->addPlayer($gandalf)
            ->addPlayer('toto')
        ;

        var_dump($game);

        $aragorn->attack('toto'); // Enlève X points de vie en fonction de la force
        $legolas->rangedAttack($gandalf); // Enlève X points de vie en fonction de la force * 3
        $gandalf->castSpell($aragorn); // Enlève X points de vie en fonction du mana
        $legolas->attack($gandalf);

        var_dump($game);
    ?>
</body>
</html>
