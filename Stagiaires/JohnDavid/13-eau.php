
<?php
$temperature = rand(-100, 200);

$response = 'La variable $temperature contient la valeur :' . $temperature . "\n";
if ($temperature <= 0) {
    $response .= "°, donc l'eau est à l'état solide.";
} elseif ($temperature >= 100) {
    $response .= "°, donc l'eau est à l'état gazeux.";
} else {
    $response .= "°, donc l'eau est à l'état liquide.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature de l'eau  </title>
</head>
<body>
    <h1>Temperature de l'eau</h1>
    <p>Créez 13-eau.php : générez une température aléatoire entre -100 et 200° et affichez l'état de l'eau
         (solide ≤ 0, liquide entre 1 et 99, gazeux ≥ 100).</p>
    <p> Résultat : <?= $response; ?></p>
</body>
</html>