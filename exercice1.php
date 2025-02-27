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
        <a href="index.html">Retour</a>
    </nav>
    <h1>Exercice 1</h1>

    <h2>Exercice 1.1</h2>
    <ul>
        <?php

        $n = 1;
        while ($n <= 10) {
            echo "<li>$n</li>";
            $n++;
        }

        ?>
    </ul>

    <h2>Exercice 1.2</h2>
    <ul>
        <?php

        $n = 1;
        do {
            echo "<li>$n</li>";
            $n++;
        } while ($n <= 10);

        ?>
    </ul>

    <h2>Exercice 1.3</h2>
    <ul>
        <?php

        for ($n = 1; $n <= 10; $n++) {
            echo "<li>$n</li>";
        }

        ?>
    </ul>

    <h2>Exercice 1.4</h2>
    <ul>
        <?php

        $compteur = 10;
        while ($compteur > 0) {
            echo "<li>$compteur</li>";
            $compteur--;
        }

        ?>
    </ul>

    <h2>Exercice 1.5</h2>
    <ul>
        <?php

        for ($i = 10; $i > 0; $i--) {
            echo "<li>$i</li>";
        }

        ?>
    </ul>

    <h2>Exercice 1.6</h2>
    <ul>
        <?php

        $compteur = 0;
        while ($compteur <= 20) {
            echo "<li>$compteur</li>";
            $compteur += 2;
        }

        ?>
    </ul>

    <h2>Exercice 1.7</h2>
    <ul>
        <?php

        for ($i = 0; $i <= 20; $i += 2) {
            echo "<li>$i</li>";
        }

        ?>
    </ul>

    <h2>Exercice 1.8</h2>
    <ol>
        <?php

        $n1 = 0;
        $n2 = 1;
        $compteur = 0;

        while ($compteur < 20) {
            echo "<li>$n1</li>";
            $n3 = $n1 + $n2;
            $n1 = $n2;
            $n2 = $n3;
            $compteur++;
        }

        ?>
    </ol>

    <h2>Exercice 1.9</h2>
    <ol>
        <?php

        $n1 = 0;
        $n2 = 1;

        for ($i = 0; $i < 20; $i++) {
            echo "<li>$n1</li>";
            $n3 = $n1 + $n2;
            $n1 = $n2;
            $n2 = $n3;
        }

        ?>
    </ol>
</body>
</html>
