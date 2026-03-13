<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
</head>
<body>
    <h1>Variable superglobale $_GET</h1>
    <nav>
        <a href="?">Accueil</a>
        <a href="?section=about">A propos</a>
        <a href="?section=portfolio">Mon Portfolio</a>
        <a href="?section=works">Mes Travaux</a>
        <a href="?section=contact">Contactez-moi</a>
    </nav>
    <?php
var_dump($_GET);
    ?>
</body>
</html>