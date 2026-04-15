<!-- simulez un système de pagination affichant les numéros de page de 1 à N (N aléatoire entre 1 et 10). -->
<?php
$N = rand(1, 10);
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= $N);
?>