<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>Accueil</h1>
    <?php include "inc/menu.php"?>
    <h3>Les stagiares de classe 2</h3>
    <?php
    foreach($students as $user){
        echo "<p>$user</p>";
    }
    ?>
</body>
</html>