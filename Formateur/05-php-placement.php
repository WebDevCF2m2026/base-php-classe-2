<?php
// avant l'html
$datetime = date("Y-m-d H:i:s"); // format de temps utilisé par les bases de données
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page html de base</title>
</head>
<body>
    <h1>Page html de base</h1>
    <h2>Date de datetime : <?= $datetime ?></h2>
    <h3>Voici le timestamp <?= time() ?></h3>
    <p>C'est le temps en seconde depuis le 01/01/1970 - avec time()<p>
    <h3>Voici le timestamp en microsecondes <?= microtime(true) ?> - avec microtime(true)</h3>  
    <pre>
// binaire => 2 possibilités
1
0
// base 2 => 4 possibilités
11
10
01
00
// base 3 => 8 possibilités => base 8
111
110
101
011
001
etc.... 
// base 4 =>  16 possibilités => base 16

base 8 => 256 possibilités (premier PC, Commodore, Atari etc...)
base 16 => 65536 (jpg par pixels)
base 32 => 4 294 967 296 ...
base 64 => 18 446 744 073 709 551 616 ... hum
    </pre>  
</body>
</html>
<?php
echo "En dessous de fin de l'html, on évite l'affichage ".$_SERVER['REMOTE_ADDR'];
