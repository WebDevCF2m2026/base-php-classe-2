<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
    $stagiaire = [
    "nom"=> "Haubursin",
    "prenom"=> "Eiji",
    "email"=> "eiji.haubursin@outlook.com",
    "age"=> 24
];
?>
<table>
    <?php 
            // ($nomTableau as $key => $value) -> sert à pointé les informations voulu pour la boucle
        foreach ($stagiaire as $key => $value) {
            // cette ligne permet d'afficher la clé et la valeur qui lui est attribué
            echo "($key : $value) <br> ";
        }   
    ?>
</table>    
</body>
</html>



