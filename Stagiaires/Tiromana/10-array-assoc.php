<?php

// Tableau associatif
$tabPers = [
    "prenom"             => "Tiro",
    "nom"                => "Tupea",
    "caracteristique"    => "calme",
    "dateDeNaissance"    => "2000-01-01"
];

echo "<hr>"

// Affiche les valeurs 
echo $tabPers["prenom"];
echo $tabPers["nom"];
echo $tabPers["caracteristique"];
echo $tabPers["dateDeNaissance"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tableau associatifs</h1>
    <p>Tableau contenant de cles non automatique et des valeurs, il faut passer la clef, comme pour un indexé, pour récupérer une valeur</p>
    <h3>Simple echos</h3>
    <pre><code>
    $tabPers = [
    "prenom"             => "Tiro",
    "nom"                => "Tupea",
    "caracteristique"    => "calme",
    "dateDeNaissance"    => "2000-01-01"
];
    </code></pre>
    <?php

    var_dump($tabPers)
    ?>
</body>
</html>