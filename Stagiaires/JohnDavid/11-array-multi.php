<!-- Tableau multidimensionnel de 3 stagiaires avec nom, prénom et un sous-tableau de sites 
 (perso + github). Affichage du github du troisième stagiaire. -->
<?php
$stagiaires = [
    [
        "nom" => "NAGIB",
        "prenom" => "Mohamed",
        "sites" => [
            "perso" => "jeandupont.com",
            "github" => "github.com/jeandupont"
        ]
    ],
    [
        "nom" => "TAPA",
        "prenom" => "TIROMANA",
        "sites" => [
            "perso" => "sophiemartin.com",
            "github" => "github.com/sophiemartin"
        ]
    ],
    [
        "nom" => "Tchomgui",
        "prenom" => "John David",
        "sites" => [
            "perso" => "john-david-portfolio.web.app",
            "github" => "github.com/john-dav9"
        ]
    ]
];
echo $stagiaires[2]["sites"]["github"];