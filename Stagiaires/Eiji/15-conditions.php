<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
</head>

<body>
    <h1>Exercice 15 : condition</h1>
    <p>Consigne : générez un chiffre entre 0 et 10, puis affichez : 0-3 → "X : Nul, étudie la prochaine fois", 4-5 → "X
        : Peut mieux faire", 6-7 → "X : Bien", 8-10 → "X : Très bien".</p>
        <!-- version Micha -->
    <?php
    $nbr = mt_rand(0, 10);
    if ($nbr <= 3):
        ?>
        <p>Appréciation : Nul, étudie la prochaine fois</p>
        <?php
    elseif ($nbr <= 5):
        ?>
        <p>Appréciation : Peut mieux faire</p>
        <?php
    elseif ($nbr <= 7):
        ?>
        <p>Appréciation : Bien</p>
        <?php
    else:
        ?>
        <p>Très bien</p>
        <?php
    endif
    ?>

    <hr>

</body>

</html>
<?php
$nbr = mt_rand(0, 10);

if ($nbr >= 0 && $nbr <= 3) {
    echo "{$nbr}/10 : Nul, étudie la prochaine fois";
} elseif ($nbr >= 4 && $nbr <= 5) {
    echo "{$nbr}/10 : Peut mieux faire";
} elseif ($nbr >= 6 && $nbr <= 7) {
    echo "{$nbr}/10 : Bien";
} else {
    echo "{$nbr}/10 : Très bien";
}

