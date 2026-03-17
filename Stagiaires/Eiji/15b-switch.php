
<!-- version Micha -->
<?php
$nbr = mt_rand(0,10);

//création d'une variable de type string qui contiendra le résultat à afficher
$appreciation = "Appréciation : ";

switch($nbr){
    case 0: case 1: case 2: case 3:
      $appreciation .= "Nul, étudie la prochaine fois";
      break;
      
    case 4: case 5:
        $appreciation .= "Peut mieux faire";
        break;
        
    case 6: case 7:
        $appreciation .= "Bien";
        break;
        
    default:
        $appreciation .= "Très bien" ;   
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <h1>Exercice 15b : switch</h1>
    <p>Consigne : refaites l'exercice 15 en utilisant un switch.</p>


    <!-- la manière d'implanter un -echo dans du HTML -->
    <h2> Note : <?= $nbr ?> / 10</h2>
    <p> <?= $appreciation ?></p>

<hr>    
    <?php
$nbr = mt_rand(0,10);

switch ($nbr){
    case 0: case 1: case 2: case 3:            
        echo "{$nbr}/10 : Nul, étudie la prochaine fois";
        break;
    case 4: case 5:    
        echo "{$nbr}/10 : Peut mieux faire";
        break;
    case 6: case 7:    
        echo "{$nbr}/10 : Bien";
        break;
    default:
        echo "{$nbr}/10 : Très bien";       
}
?>
</body>
</html>

