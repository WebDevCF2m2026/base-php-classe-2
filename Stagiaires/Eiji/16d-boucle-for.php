<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <h1>Exercice 16d : for</h1>
    <p>Consigne : d) Affichez la table de multiplication de 7</p>
<?php
for($i = 1; $i <= 10; $i++){
    $res = 7*$i  ;
    echo ("$res ");
}