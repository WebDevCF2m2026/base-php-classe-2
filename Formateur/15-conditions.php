<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 15</title>
</head>
<body>
    <h1>Exercice 15</h1>
    <p>Créez 15-conditions.php : générez un chiffre entre 0 et 10, puis affichez : 0-3 → "X : Nul, étudie la prochaine fois", 4-5 → "X : Peut mieux faire", 6-7 → "X : Bien", 8-10 → "X : Très bien".</p>
    <p>Ecriture des if elseif et else avec les : (utilisé dans le frontend)</p>
    <?php
    // nombre au hasard entre 0 et 10
    $coteEntreZeroEtDix = rand(0,10);
    ?>
    <h2>Votre note : <?=$coteEntreZeroEtDix// affichage de la note ?>/10</h2>
    <hr>
    <?php
    // si inférieure ou égal à 3
    if($coteEntreZeroEtDix<=3):
        // affichage de l'html ci-dessous
    ?>
    <p>Appréciation : Nul, étudie la prochaine fois</p>
    <?php
    elseif($coteEntreZeroEtDix<=5):
    ?>
    <p>Appréciation : Peut mieux faire</p>
    <?php
    elseif($coteEntreZeroEtDix<=7):
    ?>
    <p>Appréciation : Bien</p>
    <?php
    // dans tous les autres cas
    else:
    ?>
    <p>Appréciation : Très bien</p>
    <?php
    // ne pas l'oublier, il remplace la }
    endif;
    ?>

</body>
</html>