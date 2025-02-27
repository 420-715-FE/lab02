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

    <h1>Exercice 3</h1>

    <?php

    if (isset($_GET['nombre'])) {
        if (!is_numeric($_GET['nombre'])) {
            echo 'Le paramètre nombre doit être un nombre.';
            echo '</body></html>';
            exit;
        }
        $nombre = $_GET['nombre'];
    } else {
        $nombre = 999;
    }

    echo '<p>';
    for ($i = 0; $i < $nombre; $i++) {
        if ($i % 4 == 0) {
            echo 'A';
        } else if ($i % 4 == 1) {
            echo 'B';
        } else if ($i % 4 == 2) {
            echo 'C';
        } else {
            echo 'D';
        }
    }
    echo '</p>';

    ?>
</body>
</html>
