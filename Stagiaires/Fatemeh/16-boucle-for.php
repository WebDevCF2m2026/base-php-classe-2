<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16-boucle-for.php</title>
</head>
<body>
    <h1>16-boucle-for.php</h1>
    <h2>a) Premier boucle for</h2>
    <p>Affichez les nombre pairs de 0 à 100</p>
    <?php 
    for($i=1; $i<101; $i++){
        echo "$i ";
    }
    ?>
    <h2>b) Deuxième boucle for</h2>
    <p>Affichez les nombre pairs de 1 à 50</p>
    <?php 
    for($nb; $nb<=50; $nb+=2){
        echo "$nb ";
    }
     ?>
    <h2>c) Troisième boucle for</h2>
    <p>Affichez un décompte de 10 à 0</p>
    <?php 
    for($i=10; $nb>=0; $i--){
        echo "$i ";
    }
     ?>
    <h2>d) Quatrième boucle for</h2>
    <p>Affichez la table de multiplication de 7</p>
    <?php 
    for($i=1; $i<=10; $i++):
        $resultat=7*$i;
        echo" $resultat";
    endfor;
    
     ?>
         
</body>
</html>