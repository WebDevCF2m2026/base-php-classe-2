 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pair /impair</title>
 </head>
 <body>
  <h1>pair impair</h1>

  <h2>exercices 14</h2>

  <?php

 $chiffre = mt_rand(1,20);

 if (($chiffre % 2 )=== 0) {
    echo "le chiffre $chiffre est pair";
  } else {
    echo "le chiffre $chiffre est impair";
  }
 ?>
  
 </body>
 </html>
