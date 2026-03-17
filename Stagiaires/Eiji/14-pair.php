<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pair / impair</title>
</head>    
<body>
    <h1>Exercice 14 : pair / impair</h1>
        <p>Consigne : générez un nombre aléatoire entre 1 et 20 avec mt_rand(). S'il est pair, affichez "Le nombre X est pair", sinon "Le nombre X est impair". Indice : utilisez l'opérateur modulo %.</p>
</body>
</html>
<?php
$nbr = mt_rand(1, 20);

if ($nbr % 2 === 0){
    echo "le nombre {$nbr} est pair";
}else{
    echo "le nombre {$nbr} est impair";
}
?>
