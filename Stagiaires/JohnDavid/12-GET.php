<!-- une page HTML avec 4 liens qui pointent vers des variables GET différentes 
 (ex: ?section=accueil, ?section=contact, etc.). 
 Affichez le contenu de $_GET avec var_dump(). -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Example</title>
</head>
<body>
    <h1>GET Example</h1>
    <nav>
        <ul>
            <li><a href="?section=accueil">Accueil</a></li>
            <li><a href="?section=contact">Contact</a></li>
            <li><a href="?section=about">About</a></li>
            <li><a href="?section=services">Services</a></li>
        </ul>
    </nav>

    <?php
    var_dump($_GET);
    ?>
</body>
</html>

