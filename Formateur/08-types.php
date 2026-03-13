Documentation sur les <a href="https://www.php.net/manual/fr/types.comparisons.php" target="_blank">typages</a><br>
<?php
echo '<h3>Typage avec cast ()</h3>';
echo '$pi ="3.14"; <br>';
$pi ="3.14"; 
// echo pi();

// Les casts de typage https://www.php.net/manual/fr/language.types.type-juggling.php

$int = (int) $pi; // entier
echo '$int = (int) $pi; -> 3<br>';
$float = (float) $pi;
echo'$float = (float) $pi; -> 3.14<br>';
$bool = (bool) $pi;
echo'$bool = (bool) $pi; -> true';

var_dump($pi,$int,$float,$bool);

echo "<p>Avantage: rapide est simple à mettre, mais peut poser un problème de sécurité ou  inattendu : en cas d'erreur, cette conversion renvoie 0.... donc si notre conversion peut vraiment donner 0... on a un problème</p>";
echo '$int = (int) $vide;// en cas d\'erreur,
<br> renvoie 0
$zero = (int) "0"; // mais ceci donne VRAIMENT 0<br>$string = (string) $array; // imprévu, fait un warning mais prends Array !<br>';

$array = []; // tableau
$int = (int) $array;// en cas d'erreur, renvoie 0
$zero = (int) "0"; // mais ceci donne VRAIMENT 0
$string = (string) $array; // imprévu, fait un warning mais prends Array !

var_dump($int,$zero,$string);

?>
