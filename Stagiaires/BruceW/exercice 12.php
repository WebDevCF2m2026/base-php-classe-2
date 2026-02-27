<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice GET - Liens et var_dump</title>
     <link rel="stylesheet" href="./style.css">
</head>
<body>

    <h1>Exercice GET</h1>

    <div class="liens">
        <a href="?section=accueil">Accueil</a>
        <a href="?section=articles">Articles</a>
        <a href="?section=contact">Contact</a>
        <a href="?section=apropos">À propos</a>
    </div>

    <h2>Contenu de $_GET :</h2>

    <div class="dump">
        <?php
        echo "<pre>";
        var_dump($_GET);
        echo "</pre>";
        ?>
    </div>

    <p>
        Cliquez sur les liens ci-dessus pour modifier la variable GET et observer le résultat de var_dump().
    </p>

</body>
</html>