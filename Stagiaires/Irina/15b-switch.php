
<?php
//nombre au  hazard entre 0 et 10
$coteEntreZeroEtDix = rand(0,10);

//creation d'une variable de type string qui contiendra
//le resultat a afficher
$appreciation = "appreciacion"


//utillisation du switch  pour modifier l'affichage
switch($citeEntreZeroEtDix){
    case 0:
    case 1:
    case 2:
    case 3:
        $appreciation.=" Nul, étudie la prochaine fois";
        break;  
    case 4:        
}   case 5:
         $appreciation.=" Peut mieux faire";
         break;
    case 6:
    case 7:
         $appreciation.= " Bien ";
         break;
    default;
         $appreciation.= "Tres bien";
          


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices 15b</title>
</head>
<body>
    <h1>Créez 15b</h1>
    <p> Créez 15b-switch.php : refaites l'exercice 15 en utilisant un switch.</p>
    <p>Consignes du 15-conditions.php :générez un chiffre entre 0 et 10, puis affichez : 0-3 → "X : Nul, étudie la prochaine fois", 4-5 → "X : Peut mieux faire", 6-7 → "X : Bien", 8-10 → "X : Très bien".</p>
    <h2> Votre note : <?= $citeEntreZeroEtDix ?>/10</h2>
    <p><?=$appreciation
</body>
</html>