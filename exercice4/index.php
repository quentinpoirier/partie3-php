<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice4</title>
</head>
<body>
    <h1>exercice4</h1>
    <p>Créer une variable et l'initialiser à 1.  
    Tant que cette variable n'atteint pas 10, il faut :</p>
    <ul>
        <li>l'afficher</li>
        <li>l'incrementer de la moitié de sa valeur</li>
    </ul>

    <?php
     $numbone = 1;
     while ($numbone < 10) {
          $result = $numbone += $numbone / 2;

          echo '<br>';
          echo $result;
     }
    ?>
    
</body>
</html>