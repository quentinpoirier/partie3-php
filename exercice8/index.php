<?php
    for ($walk = 200; $walk >= 0; $walk -= 12) {
        $message = $walk . '...Enfin ! ';
    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice8</title>
</head>
<body>
    <h1>exercice8</h1>
    <p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>

    <?php
    for ($walk = 200; $walk >= 0; $walk -= 12) {
        echo '<br>';
        echo $walk . '...Enfin ! ';
    }
    ?>

</body>
</html>