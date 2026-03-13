<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Exercise 15</h1>
    <p>Créez 15-conditions.php :
        générez un chiffre entre 0 et 10, puis affichez : 0-3 → "X :
        Nul, étudie la prochaine fois", 4-5 → "X :
        Peut mieux faire", 6-7 → "X : Bien", 8-10 → "X : Très bien".</p>
        
    <?php
    // nombre au hasard entre 0 et 10
    $coteEntreZeroEtDix = rand(0,10);
     ?>
     <h2>Votre note : <?=$coteEntreZeroEtDix?>/10</h2>
     <hr>
     <?php 
     if($coteEntreZeroEtDix<=3):
      ?>
     <p>Appréciation : Nul, étudie la prochaine fois </p>
     <?php
     elseif($coteEntreZeroEtDix<=5):
      ?>
     <hr>
    <p>Appréciation : peut mieux faire </p>
     <?php
     elseif($coteEntreZeroEtDix<=7):
      ?>
     <hr>
    <p>Appréciation : bien </p>
    <?php 
    else:
     ?>
     <p>Appréciation : bien </p>
     <?php 
     endif
      ?>
</body>

</html>