<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratoire 02</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
    <nav>
        <a href="index.php">Retour</a>
    </nav>

    <h1>Exercice 6</h1>

    <?php
        if (!isset($_GET['nombre'])) {
            echo 'Erreur: Paramètre <strong>nombre</strong> manquant.';
            echo '</body></html>';
            exit;
        }

        $nombre = $_GET['nombre'];

        if (!is_numeric($nombre)) {
            echo 'Erreur: Le paramètre <strong>nombre</strong> doit être un nombre.';
            echo '</body></html>';
            exit;
        }
        if ($nombre < 1) {
            echo 'Erreur: Le paramètre <strong>nombre</strong> doit être supérieur ou égal à 1.';
            echo '</body></html>';
            exit;
        }
        if ($nombre > 50000) {
            echo 'Erreur: Le paramètre <strong>nombre</strong> doit être inférieur à 50 000.';
            echo '</body></html>';
            exit;
        }

        $nombreDepart = $nombre;
        $compteur = 0;
        while ($nombre <= 100000) {
            $nombre *= 2;
            $compteur++;
        }

        echo "Le nombre $nombreDepart peut être doublé à $compteur reprises avant de dépasser 100 000.";
    ?>
</body>
</html>
