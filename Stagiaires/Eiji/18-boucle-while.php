<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <h1>Exercice 18 : while</h1>
    <p>Consigne : utilisez une boucle while pour afficher les nombres de 1 à 20, en mettant en gras les nombres divisibles par 3</p> 
<?php
$i = 1;
while ($i <= 20){
    if($i % 3 == 0){
        echo "<b>  $i  </b>";
    }else{
        echo "$i ";
    }
    $i++;
}