<?php
$monTab = ['un','deux','trois','quatre','cinq','six','sept','huit','neuf','dix'];

// Accéder à un élément
echo $monTab[0]; // pomme
echo "<br>";
echo $monTab[2]; // banane
echo "<br>";

// Compter les éléments
foreach ($monTab as $value) {
  echo "$value <br>";
}

?>