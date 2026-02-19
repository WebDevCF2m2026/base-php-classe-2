<?php
// prise de la date en microseconde à l'ouverture de la page
$temps = microtime("true");
// création une variable avec 
$datetime = date("Y-m-d H:i:s");
// on va attendre 2 secondes
sleep(2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date du jour : <?= $datetime ?></title>
</head>
<body>
    <h1>Date du jour : <?= $datetime ?></h1>
    <p>Date du jour en micro-secondes depuis le 1/01/1970 <?= $temps?></p>
</body>
</html>
<?php
// calcul du temps de chargement de la page
$diff = $temps - microtime("true");
?>