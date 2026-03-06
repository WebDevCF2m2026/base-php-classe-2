<?php
$stagiaires = [
    [
        "nom"       => "Wuthrich",
        "prenom"    => "Bruce",
        "sites"     => [
            "perso"  => "https://bruce-wuthrich.github.io/TI-prefo/",
            "github" => "https://github.com/Bruce-Wuthrich"
        ]
    ],
    [
        "nom"       => "Najib",
        "prenom"    => "Mohamed",
        "sites"     => [
            "perso"  => "https://najib-mohamed.github.io/Ti-prefo/",
            "github" => "https://github.com/Najib-Mohamed"
        ]
    ],
    [
        "nom"       => "Tiromana",
        "prenom"    => "Tupea",
        "sites"     => [
            "perso"  => "https://2025.webdev-cf2m.be/2026/",
            "github" => "https://github.com/Tiro-Tupea"
        ]
    ]
];

echo "<h3>GitHub du troisième stagiaire :</h3>";
echo "<p>" . $stagiaires[2]["prenom"] . " " . $stagiaires[2]["nom"] . "</p>";
echo "<hr>";
echo "<a href=\"" . $stagiaires[2]["sites"]["github"] . "\" target=\"_blank\">"
     . $stagiaires[2]["sites"]["github"]

?>
















?>