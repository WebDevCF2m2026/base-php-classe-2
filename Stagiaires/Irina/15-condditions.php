<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 15</title>
</head>
<body>
    
      <h1> Exercice 15   </h1> 

<p>  Créez 15-conditions.php : générez un chiffre entre 0 et 10, puis affichez : 0-3 → "X : Nul, étudie la prochaine fois", 4-5 → "X : Peut mieux faire", 6-7 → "X : Bien", 8-10 → "X : Très bien". </p>
<?php
$citeEntreZeroEtDix = rand (0,10);
?>
<h2> Votre note : <?=$citeEntreZeroEtDix?>// affichage de la note/10</h2>
<hr>
<?php
//si inferieur ou egal a 3
if($citeEntreZeroEtDix <=3):
       ////affichage de l'html
    ?>
    <p>Appreciacion : Nul, étudie la prochaine fois </p>
    <?php
    else($citeEntreZeroEtDix <=5):
    ?>
    <p>Appreciacion : Peut mieux faire</p>
    <?php
    else ( $citeEntreZeroEtDix  <=7 ):
        ?>
        <p>Appreciacion : Bien </p>
    <?php 
     
    endif;
    ?>




</body>
</html>