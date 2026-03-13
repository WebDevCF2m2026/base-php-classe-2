<?php

$stagiaires = [
    "WEBDEV01" => [
        "Nom" => "Dupont",
        "Prenom" => "Jean",
        "Sites" => [
            "SitePerso" => "https://example.com/jean/",
            "github" => "https://github.com/jean",
        ],
    ],
    "WEBDEV02" => [
        "Nom" => "Martin",
        "Prenom" => "Marie",
        "Sites" => [
            "SitePerso" => "https://example.com/marie/",
            "github" => "https://github.com/marie",
        ],
    ],
];

// acces tableau 
echo $stagiaires["WEBDEV01"]["nom"]["Sites"]["github"];