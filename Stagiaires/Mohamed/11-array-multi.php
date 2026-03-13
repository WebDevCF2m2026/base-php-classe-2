<?php
$stagiaires = [
    "stagiaire1" => [
        "Nom" => "Najib",
        "Prenom" => "Mohamed",
        "Sites" => [
            "SitePerso" => "https://example.com/mohamed/",
            "github" => "https://github.com/mohamed",
        ],
    ],
    "stagiaire2" => [
        "Nom" => "Martin",
        "Prenom" => "Marie",
        "Sites" => [
            "SitePerso" => "https://example.com/marie/",
            "github" => "https://github.com/marie",
        ],
    ],
    "stagiaire3" => [
        "Nom" => "lepetit",
        "Prenom" => "gregoire",
        "Sites" => [
            "SitePerso" => "https://example.com/gregoire/",
            "github" => "https://github.com/gregoire",
        ],
    ],
];

echo $stagiaires["stagiaire3"]["Sites"]["github"];
?>