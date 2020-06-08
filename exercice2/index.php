<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice2</title>
</head>
<body>
    <h1>exercice2</h1>
    <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.  
    Tant que la première variable n'est pas supérieure à 20 :</p>
    <ul>
        <li>multiplier la première variable avec la deuxième</li>
        <li>afficher le résultat</li>
        <li>incrementer la première variable</li>
    </ul>
    
    <?php
    $numbtwo = 2;

    $numbone = 0;
    while ($numbone <= 20) {
         echo $numbone++ * $numbtwo . ' /';  
    }
        
    // for ($numbone = 0; $numbone <= 20; $numbone++) {
    //     if ($numbone <= 20) {
    //         echo $numbone * $numbtwo;
    //     }
    // }
    ?>
</body>
</html>