<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <h1>Exercice 16c : for</h1>
    <p>Consigne : c) Affichez un décompte de 10 à 0</p>
<?php
for($i = 10 ; $i >= 0 ; $i--){
    echo "$i ";
}