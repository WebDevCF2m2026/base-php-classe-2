<?php

$nom = "Mike"; // string
$age = 30;// integer
$taille = 1.75;// float
$estEtudiant = true;// boolean
$cours = ["Math", "Physique", "Chimie"];// array (indexé)
$professeur = [
    "titre" => "Mr Pitz",
    "matiere" => "Informatique",
];// array (associtive)
$etudiants = [
    [
        "nom" => "Alice",
        "age" => 22, 
        "cours"=>["Mathématique"],
    ],
    [
        "nom" => "Bob",
        "age" => 24,
        "cours"=>[
            "Mathématique",
            "Français"
        ]
    ],
    [
        "nom" => "Charlie",
        "age" => 21, 
        "cours"=>["Latin"]
    ],

];// tableau multidimentionel
$description = null;
var_dump($nom, $age, $taille, $estEtudiant, $cours, $professeur, $etudiants, $cours, $description,$_GET);
