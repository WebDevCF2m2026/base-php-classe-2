<?php

$stagiaires = [
    "WEBDEV01" => [
        "Nom" => "Monjezi",
        "Prenom" => "Fatemeh",
        "Sites" => [
            "SitePerso" => "https://fatemehmjz.github.io/TI_Prefo/",
            "github" => "https://github.com/fatemehmjz",
        ],
    ],
    "WEBDEV02" => [
        "Nom" => "Savastre",
        "Prenom" => "Irina",
        "Sites" => [
            "SitePerso" => "https://iren-savastre.github.io/TI-Prefo/",
            "github" => "https://github.com/iren-savastre",
        ],
    ],
    "WEBDEV03" => [
        "Nom" => "Tchomgui",
        "Prenom" => "John-David",
        "Sites" => [
            "SitePerso" => "https://john-dav9.github.io/TI-Prefo/",
            "github" => "https://github.com/John-Dav9",
        ],
    ],
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11-array-multi.php</title>
</head>
<body>
    <h1>11-array-multi.php</h1>
    <p>echo $stagiaires["WEBDEV02"]["Sites"]["github"]</p>
    <?php
    // affichage qui suit l'arborescence des tableaux
    echo $stagiaires["WEBDEV03"]["Sites"]["github"];
    ?>
    <h3>Le json fonctionne avec le système de clef:valeurs, ce genre de tableau est facile à convertir</h3>
    <p>echo $json = json_encode($stagiaires)</p>
    <?php
    echo $json = json_encode($stagiaires);
    ?>
    <h3>Le json est facilement retransformable en tableau associatif voir le dernier var_dump</h3>
    <pre>$array = json_decode($json,true);</pre>
    <?php
    // qu'on affiche en bas
    $array = json_decode($json,true);

    ?>

<?php
    echo "<h3>print_r() donne moins de détails au profit de la lisibilité</h3><pre>";
    print_r($stagiaires);
    echo "</pre>";

    var_dump($stagiaires,$array);

    ?>
</body>
</html>