<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratoire 02</title>
    <link rel="stylesheet" href="water.css">
    <style>
        body {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Retour</a>
    </nav>

    <h1>Exercice 5</h1>

    <?php

    if (isset($_GET['nombre'])) {
        if (!is_numeric($_GET['nombre'])) {
            echo 'Le paramètre nombre doit être un nombre.';
            echo '</body></html>';
            exit;
        }
        
        $nombre = $_GET['nombre'];
    } else {
        $nombre = 10;
    }

    for ($i = 1; $i <= $nombre; $i++) {
        for ($j = 0; $j < $nombre - $i; $j++) {
            echo '&nbsp; ';
        }
        for ($j = 0; $j < $i; $j++) {
            echo '* ';
        }
        echo '<br />';
    }

    ?>
</body>
</html>
