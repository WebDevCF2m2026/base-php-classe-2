<?php


$nombre = rand(1,20);


if($nombre%2){
    $nombre .=' est un nombre impair';
}
else{
    $nombre .=' est un nombre pair';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nombre pair ou Impair</h1>
    <p>le nombre aléatoire est : <?=$nombre?></p>
</body>
</html>