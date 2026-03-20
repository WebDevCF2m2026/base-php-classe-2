<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do while</title>
</head>
<body>
    <h1>do while</h1>
    <p>Boucle qui affichera toujours l'action entre {} même si elle ne tourne pas, mais tournera bien au cas où elle est nécessaire</p>
    <?php
    // chiffre au hasard initialisation
    $i=rand(-5,5);
    do{
        // s'affiche au moins une x si le chiffre est plus grand ou égal à 1
        // si négatif la boucle tournera normalement
        echo "$i ";

        // incrémentation
        $i++;
    // condition, si plus petit que 1    
    }while($i<1);
    ?>
</body>
</html>