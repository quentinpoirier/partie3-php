<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice7</title>
</head>
<body>
    <h1>exercice7</h1>
    <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>

    <?php
    for ($walk = 1; $walk <= 100; $walk += 15) {
        echo '<br>';
        echo $walk . '...On tient le bon bout. ';
    }
    ?>
        
</body>
</html>