<?php
// tableau indexé contenant 10 prénoms
$prenoms = ["Alice", "Bob", "Charlie", "David", "Eve", "Medhi", "Grace", "Heidi", "Ivan", "Judy"];

// Affichage du ul li avec les valeurs du tableau
echo "<ul>".PHP_EOL;
    foreach($prenoms as $item){
        echo "  <li>$item</li>".PHP_EOL;
    }
echo "</ul>
<hr>";

// Affichage du ul li avec les clés et les valeurs du tableau
echo "<ul>".PHP_EOL;
    foreach($prenoms as $key => $value){
        echo "  <li>".($key+1).") $value</li>".PHP_EOL;
    }
echo "</ul>
<hr>";
?>
