<!-- utilisez une boucle while pour afficher les nombres de 1 à 20, en mettant en gras les nombres divisibles par 3. -->
<?php
$i = 1;
while ($i <= 20) {
    if ($i % 3 == 0) {
        echo "<b>" . $i . "</b> ";
    } else {
        echo $i . " ";
    }
    $i++;
}
?>