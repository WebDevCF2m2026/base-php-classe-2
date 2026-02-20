<?php

// prise de la date en microseconde à l'ouverture de la page
$temps = microtime(true);
// création d'une variable avec le datetime
$datetime = date("Y-m-d H:i:s");
// on attendre 2 secondes
//sleep(2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date du jour : <?=$datetime?></title>
</head>
<body>
    <h1>Date du jour : <?=$datetime?></h1>
    <p>Date du jour en micro-secondes depuis le 1/01/1970 <?=$temps?></p>
    <h2>Même date en français : Le <?=date("d/m/Y \à H\hi")?></h2>
    <?php

$new = new datetime();

//var_dump($_GET, $new, $GLOBALS);
    ?>
</body>
</html>
<?php
// calcul du temps de chargement de la page
$diff = microtime(true) - $temps ;
// affichage de la génération de la page
echo "<!-- $diff -->";
?>