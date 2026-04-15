<?php
// température au hasard entre -100 et 200 (depuis PHP 7.1 rand est un alias de mt_rand)
$temperature = rand(-100,200);

// variable de type string quio contient le début de phrase qui est le même dans les 3 cas
$reponse = 'La variable $temperature vaut '.$temperature."°, donc l'eau est ";

// condition pour vérifier la valeur de température
// inférieure ou égale à  => solide
if($temperature <= 0){
    // concaténation avec .= de la variable $reponse
    $reponse .= "solide.";
// sinon si elseif ou else if  plus grand ou égal à 100 => gazeux  
}elseif($temperature >= 100){

    $reponse .= "gazeuse.";

// sinon, l'eau ne peut plus être que solide    
}else{
    $reponse .= "liquide.";
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
    <h1>Température de l'eau</h1>
    <p>Créez 13-eau.php : générez une température aléatoire entre -100 et 200° et affichez l'état de l'eau (solide ≤ 0, liquide entre 1 et 99, gazeux ≥ 100).</p>
    <p>Résultat : <b><?=$reponse?></b></p>
</body>
</html>