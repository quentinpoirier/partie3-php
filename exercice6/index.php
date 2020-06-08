<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice6</title>
</head>
<body>
    <h1>exercice6</h1>
    <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>

    <?php
    for ($walk = 20; $walk >= 0; $walk--) {
        echo '<br>';
        echo $walk . '...C\'est presque bon. ';
    }
    ?>
    
</body>
</html>