<?php
// Données
$arrayData = [
    'about'=> [
        'Title' => "A propos",
        'Text' => "<p>Bienvenue sur la section me concernant</p><p>Bonne visite!</p>",
    ],
    'portfolio'=> [
        'Title' => "Mon portfolio",
        'Text' => "<p>Bienvenue sur la section concernat mes travaux</p><p>",
    ],
    'works'=> [
        'Title' => "Mes Travaux",
        'Text' => "<p>... en travaux !</p>",
    ],
    'contact'=> [
        'Title' => "Contactez-moi",
        'Text' => "<form action='' method='post'>
            <input type='text' name='myMail' placeholder='Votre mail'><br>
            <textarea name='monMessage' placeholder='votre message'></textarea><br>
            <input type='submit' value='envoyer'>
        </form>
        ",
    ],
];


// si la variable $_GET est vide : accueil
if(empty($_GET)){
    // création des variables de l'accueil
    $title = 'Variable superglobale $_GET';
    $text = 'Bienvenue sur mon site';

// si la variable est une section    
}elseif(isset($_GET['section'])){

    $title = $arrayData[$_GET['section']]['Title'];
    $text = $arrayData[$_GET['section']]['Text'];

// il existe des variables get, mais elle n'ont rien à voir avec ma navigation
}else{
    // création des variables de l'accueil
    $title = 'Variable superglobale $_GET';
    $text = 'Bienvenue sur mon site';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $title ?></h1>
    <nav>
        <a href="?">Accueil</a>
        <a href="?section=about">A propos</a>
        <a href="?section=portfolio">Mon Portfolio</a>
        <a href="?section=works">Mes Travaux</a>
        <a href="?section=contact">Contactez-moi</a>
    </nav>
    <p><?= $text ?></p>
    <?php
var_dump($_GET,$_POST);
    ?>
</body>
</html>