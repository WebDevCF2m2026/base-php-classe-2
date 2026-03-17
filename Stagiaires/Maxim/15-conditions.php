<?php

$note = rand(0,10)

if($note <= 3){
    $note .= ' nul, étudie la prochaine fois.';
}elseif($note <= 5){
    $note .= ' Peut mieux faire.';
}elseif($note <= 7){
    $note .= ' Bien.';
}else($note <= 10){
     $note .= 'Très Bien.';
}endif
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen note</title>
</head>
<body>
    <h1>Note de l'examen pair</h1>
    <p>ta note de l'examen est de : <?=$note?></p>
</body>
</html>

<!-- ne fonctionne pas -->