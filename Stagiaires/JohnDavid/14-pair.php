<?php
$number = mt_rand(1, 20);
if ($number % 2 === 0) {
    $result = "Le nombre $number est pair.";
} else {
    $result = "Le nombre $number est impair.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Pair ou Impair</title>
</head>
<body>
    <h1>Nombre Pair ou Impair</h1>
    <p>Créez 14-pair.php : générez un nombre aléatoire entre 1 et 20 avec mt_rand(). S'il est pair, affichez "Le nombre X est pair", sinon "Le nombre X est impair". Indice : utilisez l'opérateur modulo %.</p>
    <p><?= $result; ?></p>
</body>
</html>
