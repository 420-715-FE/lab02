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

    <h1>Exercice 7</h1>

    <select name="nombre">
        <option value="">Sélectionnez un nombre</option>
        <?php

        for ($i = 1; $i <= 100; $i++) {
            echo "<option value=\"$i\">$i</option>";
        }

        ?>
    </select>    
</body>
</html>
