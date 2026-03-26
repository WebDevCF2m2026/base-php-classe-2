<?php
function inverserMot($mot) {
    $resultat = "";
    $longueur = strlen($mot);
    for ($i = $longueur - 1; $i >= 0; $i--) {
        $resultat .= $mot[$i];
    }
    return $resultat;
}

// Tests
$mots = ["Bonjour", "PHP", "CF2M", "Hello", "abcdef"];

foreach ($mots as $mot) {
    echo "{$mot} → " . inverserMot($mot) . "<br>";
}
