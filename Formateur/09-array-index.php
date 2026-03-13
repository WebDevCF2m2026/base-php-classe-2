<?php

// tableau indexé
$monTab = ['un','deux','trois','quatre','cinq','six','sept','huit','neuf','dix'];

// manière manuelle (3 premiers)
echo $monTab[0];
echo "<hr>";
echo $monTab[1];
echo "<hr>";
echo $monTab[2];
echo "<hr>";

// manière manuelle (3 premiers) avec concaténation (. ou ,)

echo $monTab[0]."<hr>" .
     $monTab[1]  ."<hr>".  $monTab[2]  ."<hr>";

// manière manuelle (3 premiers)PHP gère ce problème depuis longtemps, quand la clef est un numérique, on peut utiliser les doubles ""

echo "$monTab[0]<hr>$monTab[1]<hr>$monTab[2]<hr>";
// pas avac simple
echo '$monTab[0]<hr>$monTab[1]<hr>$monTab[2]<hr>';


echo "<h3>While</h3>";
// on va utiliser une boucle pas faite ni pour les tableaux, ni pour les numériques particulièrement, mais pour tout

$compteMonTab = count($monTab); // on prend le nombre d'éléments du tableau (nb boucles nécessaires)
$clef = 0; // notre première clé du tableau

// on va utiliser la boucle la plus connue, mais aussi la plus dangereurs, car elle est souvant infinie
while($clef < $compteMonTab){
    echo $monTab[$clef]."<hr>";
    $clef++; // vaut $clef += 1; ou $clef = $clef + 1;
}
echo "<h3>for</h3>";
// deuxième boucle for, la numérique
for($i=0;$i<$compteMonTab; $i++){
    echo $monTab[$i]."<hr>";
}
echo "<h3>foreach, spécialisé tableau et objets</h3>";
// boucle pour tableaux
foreach($monTab as $item){
    echo "$item<hr>";
}