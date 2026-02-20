<?php
// Déclaration d'une variable string contenant "3.14"
$Valeur = "3.14";

// Conversion en entier (int)
$Entier = (int)$Valeur;

// Conversion en nombre à virgule (float)
$Float = (float)$Valeur;

// Conversion en booléen (bool)
$Bool = (bool)$Valeur;

// Affichage des résultats avec var_dump()
echo "Valeur (string) : ";
var_dump($Valeur);
echo "Conversion en INT : ";
var_dump($Entier);
echo "Conversion en FLOAT : ";
var_dump($Float);
echo "Conversion en BOOL : ";
var_dump($Bool);
?>
