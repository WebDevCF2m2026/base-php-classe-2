<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pair / Impair</title>
</head>
<body>
    

     <h1>Pair / Impair <h/1>
     <h2>Créez 14-pair.php : générez un nombre aléatoire entre 1 et 20 avec mt_rand(). S'il est pair, affichez "Le nombre X est pair", sinon "Le nombre X est impair". Indice : utilisez l'opérateur modulo %.</h2>
    <?php
    // nombre au hazard entre 1 et 20 (PHP 7.1 rand = alias de mt_rand)
    $nombre = mt_rand(1,20);

  
    

      //si le reste de la division enclidienne vaut strictemment 0
      if(($nombre%2)===0){
        echo "$nombre est pair";
      } else{
        echo "$nombre est impair ";
      } 

     
    // si on a pas de reste  de la division encludienne (%)
    ?>


</body>
</html>