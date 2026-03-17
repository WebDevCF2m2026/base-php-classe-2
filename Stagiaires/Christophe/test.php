<?php
 if (isset($_GET['nom'])  ) {
    $lenom = $_GET['nom'];
   }
  if (isset($_GET['age'])  ) {
    $lage = $_GET['age'];
   } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<body>
    <h1>Bienvenue</h1>
   <p> <?php
 
      echo "<h1>Bienvenue ".$lenom.", sur le site !</h1>";
?></p>
</body>
</html>

