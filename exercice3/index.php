<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
</head>
<body>
    <h1>exercice3</h1>
    <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas inférieure ou égale à 10 :</p>
    <ul>
        <li>multiplier la première variable avec la deuxième</li>
        <li>afficher le résultat</li>
        <li>décrémenter la première variable</li>
    </ul>

    <?php
    $numbtwo = 2;

    $numbone = 100;
    while ($numbone >= 10) {
         $result = $numbone-- * $numbtwo;
         echo $result . ' /';
    }

    // $numbtwo = 2;

    // for ($numbone = 100; $numbone >= 10; $numbone--) {
    //     if ($numbone >= 10) {
    //         echo $numbone * $numbtwo;
    //     }
    // }
    ?>
    
</body>
</html>