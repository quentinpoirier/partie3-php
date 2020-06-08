<?php
     $numbone = 0;
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice1</title>
</head>
<body>
    <h1>exercice1</h1>
    <p>Créer une variable et l'initialiser à 0.  
Tant que cette variable n'atteint pas 10, il faut :</p>
    <ul>
        <li>l'afficher</li>
        <li>l'incrementer</li>
    </ul>

    <?php
     while ($numbone <= 10) { ?>

        <div><?= $numbone++ ?></div>

    <?php } ?>

</body>
</html> 