<?php

// tempérarure au hasaard entre -100 et 200
$temperature = mt_rand(-100, 200);

// variable de type strin qui contient le début de phrase qui est le même dans les 3 cas
$reponse = 'la variable $temperature vaut'.$temperature."°, l'eau est ";

// condition pour vérifier la valeur de température
if ($temperature <= 0) {
    $reponse .= "solide";
}elseif ($temperature < 100) {
   $reponse .= "liquide"; 
}else {
   $reponse .= "gazeuse";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Température de l'eau</h1>
    <p>créez 13-eau.php : générez une température aléatoire entre -100 et 200° et affichez l'état de l'eau (solide <= 0, liquide entre 1 et 99, gazeux >= 100)</p>

    <p>Résultat : <b><?=$reponse?></b></p>
</body>
</html>