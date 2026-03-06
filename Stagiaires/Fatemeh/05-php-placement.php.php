

<?php 
// avant l'html
  $date = date("Y-m-d H:i:s"); //format de temps utilisé par les bases de données
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Page html de base</title>
</head>
<body>
 <h1>Page html de base</h1>
<h2>Date de datetime : <?= $datetime ?></h2>
<h3>Voic le timestamp <?=  time() ?></h3>
<p>C'est le temps en seconde depuis le 01/01/1970 - avec time()</p>
<h3>Voici le timestamp en microsecondes <?= microtime(true) ?></h3>
<pre>
  01
  00
  // base 3 => 8 possibilités => base 16
  111
  110
  101
  011
  001
  etc...
  //base 4 => 16 possibilités => base 16 

  base 8 => 256 possibilités (premier pc, commodore, Atari etc...)
  base 16 => 65536 (pjg par pixels)
  base 32 => 4 294 967 296 ..
  base 64 => 18 446 744 073 709 551 615 ... hum
</pre>
</body>
</html>
<?php
echo "En fin de html on évite l'affichage {$_}";