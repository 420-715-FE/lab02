<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratoire 02</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
    <h1>Laboratoire 02</h1>
    <nav>
        <ul>
            <?php

            for ($i = 1; $i <= 9; $i++) {
            ?>
                <li>
                    <a href="exercice<?= $i ?>.php">Exercice <?= $i ?></a>
                </li>
            <?php
            }

            ?>
        </ul>
    </nav>
</body>
</html>
