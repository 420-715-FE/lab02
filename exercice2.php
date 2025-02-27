<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratoire 02</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
<?php

if (isset($_GET['etoiles'])) {
    if (!is_numeric($_GET['etoiles'])) {
        echo 'Le paramètre etoiles doit être un nombre.';
        echo '</body></html>';
        exit;
    }
    $etoiles = $_GET['etoiles'];
} else {
    $etoiles = 1000;
}

if (isset($_GET['saut'])) {
    if (!is_numeric($_GET['saut'])) {
        echo 'Le paramètre saut doit être un nombre.';
        echo '</body></html>';
        exit;
    }
    $saut = $_GET['saut'];
}

for ($i = 0; $i < $etoiles; $i++) {
    if (isset($saut) && $i % $saut == 0) {
        echo '<br />';
    }
    echo '*';
}

?>
</body>
</html>
