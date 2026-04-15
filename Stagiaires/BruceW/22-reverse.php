<?php
$inverseMot = "bonjour";

function inverserMot($mot) {
    $resultat = "";
    $i = strlen($mot) - 1;
    
    while ($i >= 0) {
        $resultat .= $mot[$i];
        $i--;
    }
    
    return $resultat;
}

echo inverserMot($inverseMot);