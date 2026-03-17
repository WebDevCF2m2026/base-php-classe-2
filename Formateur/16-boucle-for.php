<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16-boucle-for.php</title>
</head>
<body>
    <h1>16-boucle-for.php</h1>
    <h2>a) Première boucle for</h2>
    <p>Affichez les nombres de 1 à 100</p>
    <?php
    // for (initialisation $i;condition lié à $i;modification $i){ actions; }
    for($i=1; $i<101; $i++){
        echo "$i ";
    }
    ?>
    <pre><code>
    // for (initialisation $i;condition lié à $i;modification $i){ actions; }
    for($i=1; $i<101; $i++){
        echo "$i ";
    }</code></pre>
    <h2>b) Deuxième boucle for</h2>
    <p>Affichez les nombres pairs de 0 à 50</p>
    <?php
    for($nb=0; $nb<=50; $nb+=2){
        echo "$nb ";
    }
    ?>
    <pre><code>
    for($nb=0; $nb<=50; $nb+=2){
        echo "$nb ";
    }</code></pre>
    <h2>c) Troisième boucle for</h2>
    <p>Affichez un décompte de 10 à 0</p>
    <?php
    // écriture en une ligne $i-- => décrémentation
    for($i=10; $i>= 0; $i--) echo "$i ";
    ?>
    <pre><code>    
    // écriture en une ligne $i-- => décrémentation
    for($i=10; $i>= 0; $i--) echo "$i ";</code></pre>
    <h2>c) Quatrième boucle for</h2>
    <p>Affichez la table de multiplication de 7</p>
    <?php
    for($i=1; $i<=10; $i++):
        // calcul
        $resultat = 7*$i;
        // affichage du résultat
        echo "$resultat ";
    endfor;
    ?><hr>
    <?php
    for($i=1; $i<=10; $i++):
        // affichage immédiat car les () sont exécutées avant le 
        // echo => transtypage des int avec le string automatique
        echo (7*$i)." ";
    endfor;
    ?>
    <pre><code>
    for($i=1; $i<=10; $i++):
        // calcul
        $resultat = 7*$i;
        // affichage du résultat
        echo "$resultat ";
    endfor;

    for($i=1; $i<=10; $i++):
        // affichage immédiat car les () sont exécutées avant le 
        // echo => transtypage des int avec le string automatique
        echo (7*$i)." ";
    endfor;
    </code></pre>
</body>
</html>