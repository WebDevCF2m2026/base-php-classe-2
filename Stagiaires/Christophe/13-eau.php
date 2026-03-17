<?php
// tempreature au hasard entre -100 et 200
$temperature = mt_rand(-100, 200);
$reponse= 'La variable $temperature vaut '.$temperature;

if ($temperature <= 0) {
    $reponse .="°, donc l'eau est solide.";
} elseif ($temperature < 100) {
    $reponse .="°, donc l'eau est liquide.";
} else {
    $reponse .="°, donc l'eau est gazeuse.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Température de l'eau</title>
</head>
<body>
   <h1>Temperature</h1> 
   <p>Créez 13-eau.php : générez une température aléatoire entre -100 et 200° et affichez l'état de l'eau (solide ≤ 0, liquide entre 1 et 99, gazeux ≥ 100).</p>
    <p>Resultat : <?=$reponse?></p>
</body>
</html>