<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratoire 02</title>
    <link rel="stylesheet" href="water.css">
    <style>
        table, td {
            border: 1px solid black;
        }

        td {
        padding: 10px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Retour</a>
    </nav>

    <h1>Exercice 9</h1>

    <table>
        <?php

        for ($i = 0; $i < 10; $i++) {
            echo '<tr>';
            for ($j = 0; $j < 10; $j++) {
                echo '<td>';
                echo ($i * 10) + $j;
                echo '</td>';
            }
            echo '</tr>';
        }

        ?>
    </table>
</body>
</html>
