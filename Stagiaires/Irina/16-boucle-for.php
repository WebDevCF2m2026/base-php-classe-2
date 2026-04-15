<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 16-boucle-for.php  </title>
</head>
<body>
       <h1>16-boucle-for.php</h1>
       <h2> Premier boucle for </h2>
       <p> a) Affichez les nombres de 1 à 100 </p>
       <?php
       // for (initialisation $i;condition lie a $i; modification $i){ actions; }
       for($i=1; $i<101;$i++){
        echo "$i" ;
       }
       ?>  
           <h2> Troisieme boucle for<h2>
          <p>Affichez un decompte de 10 a 0</p>
            <?php

        for($i=10; $i>=0; $i--);
        echo " $i ";

     
         affichez la table de multiplication de 7
         <?php
         for($i=1; $i<=10; $i++);
              $resultat = 7*$i;
              echo "$resultat ";
         endfor;



       ?>




</body>
</html>