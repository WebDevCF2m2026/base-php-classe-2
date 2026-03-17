<?php
// temperaturé au hazard entre -100 et 100
$temperature = rand(-100, 100)

//variable de type string qui contient le debut de phrase qui est le meme dans les 3 cas
$reponse .='La variable $temperature vaut '.$temperature;

//condition pour vérifier la valeur de température
//inferieure ou egale a >= solide
if($temperature <= 0){
    //concatenation avec  .= de la variable $reponse
$reponse .="°, donc l'eau est solide.";
//sinon si elseif ou else if plus ou egal a 100 =>gazeux
}elseif($temperature >= 100){

  $reponse .="°,donc l'eau est gazeuse.";
  //sinon, l'eau ne peut pas plus etre que solide
}else{
    $reponse .= "°, donc l'eau est liquide.";
}








?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Température de l'eau</title>
</head>
<body>
    <h1> température de l'eau </h1>
    <p> Créez  13-eau.php : générez ////////////////////"LOREM"></div> </p>
    <p> Résultat : <b><?=$reponse?></b></p>

    
</body>
</html>