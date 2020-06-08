<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice5</title>
</head>
<body>
    <h1>exercice5</h1>
    <p>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</p>

    <?php
    for ($walk = 1; $walk <= 15; $walk++) {
        echo '<br>';
        echo $walk . '...On y arrive presque. ';
    }
    ?>
    
</body>
</html>