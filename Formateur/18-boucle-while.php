<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18-boucle-while.php</title>
</head>
<body>
    <h1>18-boucle-while.php</h1>
    <h2>! Aux boucles infinies !</h2>
    <p>18-boucle-while.php : utilisez une boucle while pour afficher les nombres de 1 à 20, en mettant en gras les nombres divisibles par 3.</p>
<?php
// initialisation
$i = 1;
// condition (doit devenir false sinon boucle infinie)
while ($i <= 20) {
    // condition pour mettre en gras => diviseur de 3
    /*if($i%3===0){
        echo "<strong>$i</strong> ";
    }else{
        echo "$i ";
    }*/
    // condition ternaire (condition) ? true : false    
    echo ($i%3===0) ? "<strong>$i</strong> ": "$i ";   
    // incrémentation
    $i++;
}
?>
</body>
</html>
