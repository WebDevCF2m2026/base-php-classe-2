<?php
function inverserMot($mot){
    $motreverse = "";
    for ($i=0; $i < strlen($mot); $i++) { 
        $motreverse = $mot[$i].$motreverse;
    }
    return $motreverse;
}

echo(inverserMot("Bonjour"));