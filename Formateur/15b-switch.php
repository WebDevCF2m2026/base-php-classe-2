<?php
// nombre au hasard entre 0 et 10
$coteEntreZeroEtDix = rand(0,10);

// création d'une variable de type string qui contiendra
// le résultat à afficher
$appreciation = "Appréciation : ";

// utilisation du switch pour modifier l'affichage
switch($coteEntreZeroEtDix){
    case 0:
    case 1:
    case 2:
    case 3:
        $appreciation.="Nul, étudie la prochaine fois";
        break;
    case 4:
    case 5:
        $appreciation.="Peut mieux faire";
        break;
    case 6:
    case 7:
        $appreciation.="Bien";
        break;
    default:
        $appreciation.="Très bien";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 15b</title>
</head>
<body>
    <h1>Exercice 15b</h1>
    <p>Créez 15b-switch.php : idem que le 15 avec switch</p>
    <p>Consignes du 15-conditions.php : générez un chiffre entre 0 et 10, puis affichez : 0-3 → "X : Nul, étudie la prochaine fois", 4-5 → "X : Peut mieux faire", 6-7 → "X : Bien", 8-10 → "X : Très bien".</p>
    <h2>Votre note : <?= $coteEntreZeroEtDix ?>/10</h2>
    <p><?= $appreciation ?></p>

</body>
</html>