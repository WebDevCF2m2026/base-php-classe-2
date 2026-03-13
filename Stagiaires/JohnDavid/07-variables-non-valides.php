<?php
// Declarons des variables non valides et observons les erreurs

// 1. Variable avec un nom commençant par un chiffre
$1stName = "John"; // Erreur : un nom de variable ne peut pas commencer par un chiffre

// 2. Variable avec un espace
$first name = "John"; // Erreur : un nom de variable ne peut pas contenir d'espaces
// 3. Variable avec un caractère spécial
$first-name = "John"; // Erreur : un nom de variable ne peut pas contenir de tirets
// 4. Variable avec un mot réservé
$for = "John"; // Erreur : "for" est un mot réservé en PHP
// 5. Variable avec un nom vide
$ = "John"; // Erreur : un nom de variable ne peut pas être vide
// 6. Variable avec un nom de variable déjà utilisé
$firstName = "John"; // Erreur : un nom de variable ne peut pas être utilisé plusieurs fois dans le même scope
// 7. Variable avec un nom de variable contenant des caractères non autorisés
$first@name = "John"; // Erreur : un nom de variable ne peut pas contenir de caractères spéciaux autres que le underscore (_)
// 8. Variable avec un nom de variable contenant des accents
$prénom = "John"; // Erreur : un nom de variable ne peut pas contenir d'accents
// 9. Variable avec un nom de variable contenant des espaces et des caractères spéciaux 
$first name! = "John"; // Erreur : un nom de variable ne peut pas contenir d'espaces ni de caractères spéciaux
// 10. Variable avec un nom de variable contenant des caractères non latins
$имя = "John"; // Erreur : un nom de variable ne peut pas contenir de caractères non latins
?>