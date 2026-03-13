<?php
// On va attribuer une valeur aléatoire entre -100 et 100 a la variable temperature
$temperature = rand(-100,200).'°';


// 
$reponse = 'la variable température vaut : '.$temperature;

// ici on vient vérifier la valeur de la température
if($temperature <= 0){
    // température est inférieur ou égal a 0
    $reponse .=  ", solide";
}
elseif($temperature < 100){
    $reponse .= ", liquide";
}
else{
    $reponse .= ", gazeux";
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
    <h1>température de l'eau : <?=$temperature?></h1>
    <h2><?=$reponse?> </h2>
    
</body>
</html>
