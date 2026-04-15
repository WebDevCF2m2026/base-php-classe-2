<?php
// tableau indexé contenant 10 prénoms
$prenoms = ["Alice", "Bob", "Charlie", "David", "Eve", "Medhi", "Grace", "Heidi", "Ivan", "Judy"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17-boucle-foreach</title>
</head>
<body>
    <h1>17-boucle-foreach</h1>
    <p>Créez 17-boucle-foreach.php : créez un tableau de 10 prénoms et affichez-les dans une liste HTML &lt;ul>&lt;li>.</p>
    <h2>foreach($prenoms as $value) | récupération de la valeur </h2>
    <ul>
    <?php
    foreach($prenoms as $prenom){
    ?>
        <li><?= $prenom ?></li>
    <?php
    }
    ?>
    </ul>
    <h2>foreach($prenoms as $key => $value) | récupération de la valeur</h2>
    <ul>
    <?php
    // pour chaque élément dans le tableau on récupère la clef (qui commence à 0 car tableau indexé) et la valeur
    foreach($prenoms as $key => $value):

        // pour avoir le nombre de ligne, on ajoute 1 à la clef
        $nbLigne = $key+1;

        // si le $nbLigne est pair, le fond du li est gris, sinon il est blanc
        if($nbLigne%2===0):

    ?>
        <li style='background-color:beige'><?= "$nbLigne) $value" ?></li>
    <?php
        else:
?>
        <li><?= "$nbLigne) $value" ?></li>
    <?php
        endif;

    endforeach;
    ?>
    </ul>
</body>
</html>