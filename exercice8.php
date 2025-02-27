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

    <h1>Exercice 8</h1>

    <?php
    
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo 'FizzBuzz';
        } else if ($i % 3 === 0) {
            echo 'Fizz';
        } else if ($i % 5 === 0) {
            echo 'Buzz';
        } else {
            echo $i;
        }
        echo '<br />';
    }
    
    ?>  
</body>
</html>
