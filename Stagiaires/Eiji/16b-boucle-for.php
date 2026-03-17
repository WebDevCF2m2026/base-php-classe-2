<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <h1>Exercice 16b : for</h1>
    <p>Consigne : b) Affichez les nombres pairs de 0 à 50 </p>
<?php
for($i = 0; $i <= 50; $i += 2){
    echo "$i ";
}