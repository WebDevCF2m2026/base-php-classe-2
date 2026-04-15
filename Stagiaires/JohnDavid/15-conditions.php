<!-- générez un chiffre entre 0 et 10, puis affichez : 0-3 → "X : Nul, étudie la prochaine fois", 4-5 → "X : 
    Peut mieux faire", 6-7 → "X : Bien", 8-10 → "X : Très bien". -->
<?php
$number = mt_rand(0, 10);
if ($number >= 0 && $number <= 3) {
    $result = "Nul, étudie la prochaine fois";
} elseif ($number >= 4 && $number <= 5) {
    $result = "Peut mieux faire";
} elseif ($number >= 6 && $number <= 7) {
    $result = "Bien";
} else {
    $result = "Très bien";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Évaluation du Nombre</title>
</head>
<body>
    <h1>Évaluation du Nombre</h1>
    <p>Générez un chiffre entre 0 et 10, puis affichez : 0-3 → "X : Nul, étudie la prochaine fois", 4-5 → "X : Peut mieux faire", 6-7 → "X : Bien", 8-10 → "X : Très bien".</p>
    <p><?= "Le nombre $number : $result"; ?></p>
</body>
</html>