<?php
// prise de la date en microsecondes a l ouverture de la page
$temps = microtime(true);
//création d une variable avec le datetime
$datetime = date("Y-m-d H:i:s");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date du jour : <?= $datetime ?></title>
</head>
<body>
    <h1>date du jour : <?= $datetime ?></h1>
    <p>date du jour en micro seconde depuis le 1/01/1970: <?= $temps ?></p>
    <h2>meme date en francais : le <?=date("d/m/Y \à H\hi") ?></h2>
</body>
</html>
<?php
//calcul du temps de chargement de la page
$diff =microtime(true) - $temps;
// affichage du temps de chargement de la page
echo "<!--$diff-->";
?>