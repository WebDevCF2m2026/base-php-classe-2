<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les noms de  variables en PHP</title>
</head>
<body>
    <h1>Les noms de  variables en PHP</h1>
    <h2>Commence par $ suivi d'une lettre ou _</h2>
    <p>Commencer par un $ à un avantage certain:</p>
    <p>Pas de mots réservés</a>
    <code>
        <pre>
        <?php
        $echo = "bonjour";
        echo 'la variable $echo est fonctionelle :'.$echo;
        ?>
        </pre>
    </code>
    <h3>On évite toute fois à utiliser $_</h1>
    <p>Les variables commençant par $_ sont des super globales, ou en OO (orienté objet), ce sont des paramètres privés (ça disparaît)</p>
    <h4>La variable $_GET est une superglobale</h4>
    <p>Les superglobales sont toujours des tableaux associatifs</p>
    <code>
        <pre>
        <?php
        // console.log de PHP
        var_dump($_GET);
        ?>
        </pre>
    </code>
Ne contient que des lettres, chiffres et _
Sensible à la casse ($nom ≠ $Nom)
Peut changer de type après sa création (typage non strict)
</body>
</html>